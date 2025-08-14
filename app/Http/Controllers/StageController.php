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
        Stage::create($request->validated());
        return redirect()->route('stages.index')->with('success', 'Etapa creado exitosamente.');
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
        $stages->update($request->validated());

        return redirect()->route('stages.index')->with('updated', 'Etapa actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $stages = Stage::find($id);
        $stages->delete();

        return redirect()->route('stages.index')->with('deleted', 'Etapa eliminado exitosamente.');
    }
}
