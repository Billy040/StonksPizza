<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\KlantRequest;
use App\Models\Klant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class KlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'adres' => 'required|string|max:100',
            'telefoonnummer' => 'required|string|size:10|regex:/[0-9]{10}/|unique:users',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|min:8|max:100|confirmed',
        ], [
            'name.required' => 'De naam is verplicht.',
            'adres.required' => 'Het adres is verplicht.',
            'telefoonnummer.required' => 'Het telefoonnummer is verplicht.',
            'telefoonnummer.size' => 'Het telefoonnummer moet exact 10 cijfers zijn.',
            'email.required' => 'Het e-mailadres is verplicht.',
            'email.unique' => 'Dit e-mailadres is al geregistreerd.',
            'password.required' => 'Het wachtwoord is verplicht.',
            'password.min' => 'Het wachtwoord moet minimaal 8 tekens lang zijn.',
            'password.confirmed' => 'De wachtwoorden komen niet overeen.',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'adres' => $request->adres,
            'telefoonnummer' => $request->telefoonnummer,
        ]);

        return redirect()->route('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
