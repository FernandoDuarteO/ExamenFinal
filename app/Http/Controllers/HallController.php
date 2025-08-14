<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hall;
use App\Http\Requests\HallRequest;

use App\Models\Judge;

class HallController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halls = Hall::with('judge')->paginate(5);
        return view('halls.index', compact('halls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $halls = new Hall();
        $judges = Judge::all();
        return view('halls.create', compact('halls', 'judges'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(HallRequest $request)
    {
        Hall::create($request->validated());
        return redirect()->route('halls.index')->with('success', 'Sala creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $halls = Hall::find($id);
        $judges =Judge::all();
        return view('halls.show', compact('halls', 'judges'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $halls = Hall::find($id);
        $judges = Judge::all();
        return view('halls.edit', compact('halls', 'judges'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(HallRequest $request, int $id)
    {
        $halls = Hall::find($id);
        $halls->update($request->validated());
        return redirect()->route('halls.index')->with('updated', 'Sala actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $halls = Hall::find($id);
        $halls->delete();
        return redirect()->route('halls.index')->with('deleted', 'Sala eliminida con éxito.');
    }
}
