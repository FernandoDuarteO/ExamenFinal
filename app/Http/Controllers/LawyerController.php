<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lawyer;
use App\Http\Requests\LawyerRequest;

class LawyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $lawyers = Lawyer::latest()->paginate(5);
        return view('lawyers.index', compact('lawyers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $lawyers = new Lawyer();
        return view('lawyers.create', compact('lawyers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LawyerRequest $request)
    {
        Lawyer::create($request->validated());
        return redirect()->route('lawyers.index')->with('success', 'Abogado creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $lawyers = Lawyer::find($id);
        return view('lawyers.show', compact('lawyers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $lawyers = Lawyer::find($id);
        return view('lawyers.edit', compact('lawyers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LawyerRequest $request, int $id)
    {
        $lawyers = Lawyer::find($id);
        $lawyers->update($request->validated());

        return redirect()->route('lawyers.index')->with('updated', 'Abogado actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $lawyers = Lawyer::find($id);
        $lawyers->delete();

        return redirect()->route('lawyers.index')->with('deleted', 'Abogado eliminado exitosamente.');
    }
}
