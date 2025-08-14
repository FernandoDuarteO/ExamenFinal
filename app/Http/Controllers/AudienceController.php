<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audience;
use App\Http\Requests\AudienceRequest;

use App\Models\Hall;

class AudienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $audiences = Audience::with('hall')->paginate(5);
        return view('audiences.index', compact('audiences'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $audiences = new Audience();
        $halls = Hall::all();
        return view('audiences.create', compact('audiences', 'halls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AudienceRequest $request)
    {
        Audience::create($request->validated());
        return redirect()->route('audiences.index')->with('success', 'Audiencia creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $audiences = Audience::find($id);
        $halls =Hall::all();
        return view('audiences.show', compact('audiences', 'halls'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $audiences = Audience::find($id);
        $halls = Hall::all();
        return view('audiences.edit', compact('audiences', 'halls'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AudienceRequest $request, int $id)
    {
        $audiences = Audience::find($id);
        $audiences->update($request->validated());
        return redirect()->route('audiences.index')->with('updated', 'Audiencia actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $audiences = Audience::find($id);
        $audiences->delete();
        return redirect()->route('audiences.index')->with('deleted', 'Audiencia eliminida con éxito.');
    }
}
