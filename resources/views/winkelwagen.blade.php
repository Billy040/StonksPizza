<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winkelwagen - Stonk's Pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline" rel="stylesheet">
    @vite('resources/js/script.js')
</head>

<body class="bg-gray-100">
    <header class="bg-red-600 text-white shadow-md">
        @include('layouts.navbar')
    </header>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl text-center font-bold py-3">Uw Winkelwagen</h1>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
            <form>
                @csrf
                <div class="mb-4">
                    <label for="naam" class="block">Naam</label>
                    <input type="text" id="naam" name="naam" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div class="mb-4">
                    <label for="telefoonnummer" class="block">Telefoonnummer</label>
                    <input type="tel" id="telefoonnummer" name="telefoonnummer" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div class="mb-4">
                    <label for="adres" class="block">Adres</label>
                    <input type="text" id="adres" name="adres" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div class="mb-4">
                    <label for="postcode" class="block">Postcode</label>
                    <input type="text" id="postcode" name="postcode" class="w-full border border-gray-300 rounded p-2">
                </div>
                <div class="mb-4">
                    <label for="opmerkingen" class="block">Opmerkingen</label>
                    <textarea id="opmerkingen" name="opmerkingen" class="w-full border border-gray-300 rounded p-2"></textarea>
                </div>
                <div>
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                        Bestellen
                    </button>
                </div>
            </form>
        </div>

        <div>
            @if(session('winkelwagen'))
                <ul class="grid grid-cols-1 gap-4">
                    @foreach(session('winkelwagen') as $id => $details)
                        <li class="bg-white rounded-2xl shadow-2xl overflow-hidden py-0 border border-black">
                            <div class="p-4">
                                <h2 class="text-center py-4 font-bold">{{ $details['naam'] }}</h2>
                                <p>{{ $details['beschrijving'] }}</p>
                                <p style="font-size:large">€{{ $details['prijs'] }}</p>
                                <p>Size: {{ $details['size'] }}</p>
                                <p>Aantal: {{ $details['aantal'] }}</p>
                                <form method="POST" action="{{ route('winkelwagen.verwijderen', $id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                                        Verwijder
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endforeach
                </ul>
                <form method="POST" action="{{ route('winkelwagen.legen') }}">
                    @csrf
                    <button type="submit" class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                        Winkelwagen Leegmaken
                    </button>
                </form>
            @else
                <p class="text-center">Uw winkelwagen is leeg.</p>
            @endif
        </div>
    </div>
</main>
</body>
</html>
