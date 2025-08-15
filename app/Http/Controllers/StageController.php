<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stage;
use App\Http\Requests\StageRequest;

class StageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stages = Stage::latest()->paginate(5);
        return view('stages.index', compact('stages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $stages = new Stage();
        return view('stages.create', compact('stages'));
    }

    /**
     * Store a newly created resource in storage.
     */
public function store(StageRequest $request)
{
    $data = $request->validated();

    if ($request->hasFile('file')) {
        $file = $request->file('file');
        $filePath = $file->store('stages', 'public');
        $data['file'] = $filePath;
        $data['original_name'] = $file->getClientOriginalName(); // <-- guarda el nombre original
    }

    Stage::create($data);

    return redirect()->route('stages.index')->with('success', 'Etapa creada exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $stages = Stage::find($id);
        return view('stages.show', compact('stages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $stages = Stage::find($id);
        return view('stages.edit', compact('stages'));
    }

    /**
     * Update the specified resource in storage.
     */
public function update(StageRequest $request, int $id)
{
    $stages = Stage::find($id);
    $data = $request->validated();

    // Si suben un nuevo archivo, reemplaza el archivo anterior
    if ($request->hasFile('file')) {
        // Opcional: Elimina el archivo anterior si existe
        if ($stages->file && \Storage::disk('public')->exists($stages->file)) {
            \Storage::disk('public')->delete($stages->file);
        }

        $file = $request->file('file');
        $filePath = $file->store('stages', 'public');
        $data['file'] = $filePath;
        // Guarda también el nombre original del archivo
        $data['original_name'] = $file->getClientOriginalName();
    }

    $stages->update($data);

    return redirect()->route('stages.index')->with('updated', 'Etapa actualizada exitosamente.');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $stages = Stage::find($id);
        // Opcional: puedes borrar el archivo del storage aquí si quieres
        // Storage::disk('public')->delete($stages->file);

        $stages->delete();

        return redirect()->route('stages.index')->with('deleted', 'Etapa eliminada exitosamente.');
    }
}
