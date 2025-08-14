<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LegalCase;
use App\Http\Requests\LegalCaseRequest;

use App\Models\Audience;
use App\Models\Hall;
use App\Models\Stage;
use App\Models\Customer;
use App\Models\Lawyer;

class LegalCaseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $legalCases = LegalCase::with('legalCases','audience', 'hall', 'stage', 'customer', 'lawyer')->paginate(5);
        return view('legalCases.index', compact('legalCases'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $legalCases = new LegalCase();
        $audiences = Audience::all();
        $halls = Hall::all();
        $stages = Stage::all();
        $customers = Customer::all();
        $lawyers = Lawyer::all();
        return view('legalCases.create', compact('legalCases', 'audiences', 'halls', 'stages', 'customers', 'lawyers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LegalCaseRequest $request)
    {
        LegalCase::create($request->validated());
        return redirect()->route('legalCases.index')->with('success', 'Caso Legal creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $legalCases = LegalCase::find($id);
        $audiences = Audience::all();
        $halls = Hall::all();
        $stages = Stage::all();
        $customers = Customer::all();
        $lawyers = Lawyer::all();
        return view('legalCases.show', compact('legalCases', 'audiences', 'halls', 'stages', 'customers', 'lawyers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $legalCases = LegalCase::find($id);
        $audiences = Audience::all();
        $halls = Hall::all();
        $stages = Stage::all();
        $customers = Customer::all();
        $lawyers = Lawyer::all();
        return view('legalCases.edit', compact('legalCases', 'audiences', 'halls', 'stages', 'customers', 'lawyers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LegalCaseRequest $request, int $id)
    {
        $legalCases = LegalCase::find($id);
        $legalCases->update($request->validated());
        return redirect()->route('legalCases.index')->with('updated', 'Caso Legal actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $legalCases = LegalCase::find($id);
        $legalCases->delete();
        return redirect()->route('legalCases.index')->with('deleted', 'Caso Legal eliminida con éxito.');
    }
}
