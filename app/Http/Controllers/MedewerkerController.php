<?php

namespace App\Http\Controllers;

use App\Models\Medewerker;
use Illuminate\Http\Request;

class MedewerkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medewerkers = Medewerker::all();
        return view('medewerkers.index', compact('medewerkers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medewerkers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|unique:medewerkers',         
        ]);

        Medewerker::create($validated);

        return redirect()->route('medewerkers.index')->with('success', 'Medewerker toegevoegd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medewerker = Medewerker::findOrFail($id);
        return view('medewerkers.show', compact('medewerker'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medewerker = Medewerker::findOrFail($id);
        return view('medewerkers.edit', compact('medewerker'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'voornaam' => 'required|string|max:255',
            'achternaam' => 'required|string|max:255',
            'email' => 'required|email|unique:medewerkers',         
        ]);

        $medewerker = Medewerker::findOrFail($id);
        $medewerker->update($validated);
        
        return redirect()->route('medewerkers.index')->with('success', 'Medewerker bijgewerkt!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Medewerker::destroy($id);
        return redirect()->route('medewerkers.index')->with('success', 'Medewerker verwijderd!');
    }
}
