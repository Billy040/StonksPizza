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

    <div class="flex flex-col lg:flex-row gap-8">
        <div class="lg:w-1/2">
            <form method="POST" action="{{ route('winkelwagen.bestellen') }}">
                @csrf
                <div class="mb-4">
                    <label for="naam" class="block">Naam</label>
                    <input type="text" id="naam" name="naam" class="w-full border border-gray-300 rounded p-2
                        @error('naam') border-red-500 @enderror"
                           value="{{ old('naam', Auth::check() ? Auth::user()->name : '') }}">
                    @error('naam')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block">Email</label>
                    <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded p-2
                        @error('email') border-red-500 @enderror"
                           value="{{ old('email', Auth::check() ? Auth::user()->email : '') }}">
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="telefoonnummer" class="block">Telefoonnummer</label>
                    <input type="tel" id="telefoonnummer" name="telefoonnummer" class="w-full border border-gray-300 rounded p-2
                        @error('telefoonnummer') border-red-500 @enderror"
                           value="{{ old('telefoonnummer', Auth::check() ? Auth::user()->telefoonnummer : '') }}">
                    @error('telefoonnummer')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="adres" class="block">Adres</label>
                    <input type="text" id="adres" name="adres" class="w-full border border-gray-300 rounded p-2
                        @error('adres') border-red-500 @enderror"
                           value="{{ old('adres', Auth::check() ? Auth::user()->adres : '') }}">
                    @error('adres')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="postcode" class="block">Postcode</label>
                    <input type="text" id="postcode" name="postcode" class="w-full border border-gray-300 rounded p-2
                        @error('postcode') border-red-500 @enderror"
                           value="{{ old('postcode', Auth::check() ? Auth::user()->postcode : '') }}">
                    @error('postcode')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                        Bestellen
                    </button>
                </div>
            </form>
        </div>

        <div class="lg:w-1/2">
            @if(session('winkelwagen'))
                <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-300 p-4">
                    <h2 class="text-lg font-bold mb-4">Winkelwagen</h2>
                    <ul class="text-sm text-gray-700">
                        @foreach(session('winkelwagen') as $id => $details)
                            <li class="border-b pb-2 mb-2">
                                <p><strong>{{ $details['naam'] }}</strong></p>
                                <p>{{ $details['beschrijving'] }}</p>
                                <p>Formaat: {{ $details['size'] }}</p>
                                <p>Aantal: {{ $details['aantal'] }}</p>
                                <p>Prijs: €{{ number_format($details['prijs'], 2, ',', '.') }}</p>
                                <form method="POST" action="{{ route('winkelwagen.verwijderen', $id) }}" class="mt-2">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-600 text-white py-1 px-2 rounded hover:bg-red-700 transition">
                                        Verwijder
                                    </button>
                                </form>
                            </li>
                        @endforeach
                    </ul>
                    <p class="text-center mt-4 text-xl font-bold">Totaalprijs: €{{ number_format($totaalBedrag, 2, ',', '.') }}</p>
                    <form method="POST" action="{{ route('winkelwagen.legen') }}" class="mt-4">
                        @csrf
                        <button type="submit" class="bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                            Leeg Winkelwagen
                        </button>
                    </form>
                </div>
            @else
                <p class="text-center">Uw winkelwagen is leeg.</p>
            @endif
        </div>
    </div>
</main>
</body>
</html>
