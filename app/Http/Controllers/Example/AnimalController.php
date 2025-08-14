<?php

namespace App\Http\Controllers\Example;

use App\Http\Controllers\Controller;
use App\Http\Requests\AnimalRequest;
use App\Models\Animal;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $animals = Animal::latest()->paginate(5);
        return view('examples.animals.index', compact('animals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $animal = new Animal();
        return view('examples.animals.create', compact('animal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AnimalRequest $request): RedirectResponse
    {
        $animal = new Animal();

        $animal->fill($request->validated() + [
            'slug' => Str::slug($request->name),
        ]);
        $animal->save();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = Str::slug($request->name, '-') . '-' . $animal->id . '.png';
            $animal->update([
                'image' => $file->storeAs('animals_images', $imageName, 'public')
            ]);
        }

        return redirect()->route('animals.index')->with('success', 'Animal creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Animal $animal): View
    {
        return view('examples.animals.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal): View
    {
        return view('examples.animals.edit', compact('animal'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AnimalRequest $request, string $id): RedirectResponse
    {
        $animal = Animal::findOrFail($id);

        $animal->fill($request->validated() + [
            'slug' => Str::slug($request->name),
        ]);

        if ($request->hasFile('image')) {
            // Eliminar la imagen anterior si existe
            if ($animal->image) {
                Storage::disk('public')->delete('animals_images/' . $animal->image);
            }

            $file = $request->file('image');
            $imageName = Str::slug($request->name, '-') . '-' . $animal->id . '.png';
            $animal->image = $file->storeAs('animals_images', $imageName, 'public');
        }
        $animal->save();

        return redirect()->route('animals.index')->with('updated', 'Animal actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $animal = Animal::findOrFail($id);

        // Eliminar la imagen si existe
        if ($animal->image) {
            Storage::disk('public')->delete('animals_images/' . $animal->image);
        }
        $animal->delete();

        return redirect()->route('animals.index')->with('deleted', 'Animal borrado correctamente.');
    }
}
