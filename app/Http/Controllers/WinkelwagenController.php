<?php

namespace App\Http\Controllers;

use App\Models\Bestelling;
use App\Models\Pizza;
use Illuminate\Http\Request;

class WinkelwagenController extends Controller
{
    public function index()
    {
        $winkelwagen = session()->get('winkelwagen', []);
        $totaalBedrag = 0;

        foreach ($winkelwagen as $item) {
            $totaalBedrag += $item['prijs'] * $item['aantal'];
        }

        session()->get('totaalBedrag', $totaalBedrag);

        return view('winkelwagen', ['winkelwagen' => $winkelwagen, 'totaalBedrag' => $totaalBedrag]);
    }

    public function VoegAanWinkelwagen(Request $request, $id)
    {
        $pizza = Pizza::findOrFail($id);

        if (!$pizza) {
            return redirect()->back()->with('error', 'Pizza niet gevonden.');
        }

        $sizeName = $request->input('size_name');
        $sizeId = $request->input('size');
        $calculatedPrice = $request->input('calculated_price');

        $winkelwagen = session()->get('winkelwagen', []);

        if (isset($winkelwagen[$id])) {
            $winkelwagen[$id]['aantal']++;
        } else {
            $winkelwagen[$id] = [
                "naam" => $pizza->naam,
                "aantal" => 1,
                "beschrijving" => $pizza->beschrijving,
                "prijs" => $calculatedPrice,
                "afbeelding" => $pizza->afbeelding,
                "size" => $sizeName,
                "size_id" => $sizeId
            ];
        }

        session()->put('winkelwagen', $winkelwagen);

        return redirect()->back()->with('success', 'Pizza is toegevoegd aan de winkelwagen');
    }

    public function VerwijderItem($id)
    {
        $winkelwagen = session()->get('winkelwagen');

        if (isset($winkelwagen[$id])) {
            unset($winkelwagen[$id]);
            session()->put('winkelwagen', $winkelwagen);
        }

        return redirect()->back()->with('success', 'Item is verwijderd uit de winkelwagen');
    }

    public function LeegWinkelwagen()
    {
        session()->forget('winkelwagen');
        return redirect()->back()->with('success', 'Winkelwagen is geleegd');
    }
    public function bestellen(Request $request)
    {
        $validated = $request->validate([
            'naam' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'telefoonnummer' => 'required|string|max:20',
            'adres' => 'required|string|max:255',
            'postcode' => 'required|string|max:6', 'regex:/^[0-9]{4}[A-Z]{2}$/',
        ]);

        $winkelwagen = session()->get('winkelwagen', []);
        if (empty($winkelwagen)) {
            return redirect()->back()->withErrors(['error' => 'Uw winkelwagen is leeg.']);
        }

        $totaalBedrag = 0;
        foreach ($winkelwagen as $item) {
            $totaalBedrag += $item['prijs'] * $item['aantal'];
        }

        $bestelling = Bestelling::create([
            'user_id' => auth()->id(),
            'status_id' => 1,
            'telefoonnummer' => $validated['telefoonnummer'],
            'adres' => $validated['adres'],
            'postcode' => $validated['postcode'],
            'totaalBedrag' => $totaalBedrag,
        ]);

        foreach ($winkelwagen as $id => $details) {
            $bestelling->pizzas()->attach($id, [
                'formaat_id' => $details['size_id'],
                'aantal' => $details['aantal'],
                'telefoonnummer' => $validated['telefoonnummer'],
                'prijs' => $details['prijs'],
            ]);
        }

        session()->forget('winkelwagen');


        return redirect()->route('bestelling.status', ['id' => $bestelling->id])
            ->with('success', 'Uw bestelling is geplaatst.');
    }




}
