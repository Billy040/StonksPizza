<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class WinkelwagenController extends Controller
{
    public function index()
    {
        return view('winkelwagen');
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
}
