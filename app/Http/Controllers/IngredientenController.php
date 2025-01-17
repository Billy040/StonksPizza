<?php

namespace App\Http\Controllers;

use App\Models\Ingredienten;
use App\Models\Pizza;
use Illuminate\Http\Request;

class IngredientenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ingredienten $ingredienten)
    {

        $ingredienten = Ingredienten::all();
        $pizzas  = Pizza::with('ingredienten');

        return view('edit', compact('ingredienten', 'pizzas'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application
    {
        $ingredienten = Ingredienten::all();
        $pizza = Pizza::with('ingredienten')->findOrFail($id);

        return view('edit', compact('pizza', 'ingredienten'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredienten $ingredienten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredienten $ingredienten)
    {
        //
    }
}
