<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judge;
use App\Http\Requests\JudgeRequest;


class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judges = Judge::latest()->paginate(5);
        return view('judges.index', compact('judges'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $judges = new Judge();
        return view('judges.create', compact('judges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JudgeRequest $request)
    {
        Judge::create($request->validated());
        return redirect()->route('judges.index')->with('success', 'El Juez creado con exito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $judges = Judge::find($id);
        return view('judges.show', compact('judges'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $judges = Judge::find($id);
        return view('judges.edit', compact('judges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JudgeRequest $request, int $id)
    {
        $judges = Judge::find($id);
        $judges->update($request->validated());

        return redirect()->route('judges.index')->with('updated', 'Juez actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $judges = Judge::find($id);
        $judges->delete();

        return redirect()->route('judges.index')->with('deleted', 'Juez eliminado exitosamente.');
    }


}
