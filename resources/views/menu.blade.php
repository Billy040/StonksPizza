<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stonk's Pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline" rel="stylesheet">
    @vite('resources/js/script.js')
</head>

<body class="bg-gray-100">
<header class="bg-red-600 text-white shadow-md">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('homepage') }}" class="text-2xl font-bold">Stonk's Pizza</a>

        <ul class="flex space-x-6">
            <li>
                <a href="{{ route('homepage') }}" class="hover:text-yellow-300 transition">Home</a>
            </li>
            <li>
                <a href="{{ route('menu') }}" class="hover:text-yellow-300 transition">Menu</a>
            </li>

            @auth
                <li>
                    <a href="{{ route('profile.edit') }}" class="hover:text-yellow-300 transition">
                        {{ Auth::user()->name }}
                    </a>
                </li>
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="hover:text-yellow-300 transition">
                            Logout
                        </button>
                    </form>
                </li>
            @else
                <li>
                    <a href="{{ route('login') }}" class="hover:text-yellow-300 transition">Login</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="hover:text-yellow-300 transition">Registreer</a>
                </li>
            @endauth
            <li>
                <a href="{{ route('winkelwagen') }}" class="hover:text-yellow-300 transition">Winkelwagen</a>
            </li>
        </ul>
    </nav>
</header>

<h1 class="text-4xl text-center font-bold py-3">Een selectie van onze pizza's</h1>

<main class="container mx-auto px-4 py-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        @foreach($pizzas as $pizza)
            <li class="bg-white rounded-2xl shadow-2xl overflow-hidden py-0 border border-black">
                <div class="relative">
                    <img class="rounded-lg" src="{{ asset($pizza->image) }}" alt="{{ $pizza->naam }}">
                    <button class="absolute top-4 right-4 p-2 text-gray-600 hover:text-gray-800 transition">
                        <a href="{{ route('ingredienten.edit', ['id' => $pizza->id]) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 20h9M16.5 3.5a2.121 2.121 0 113 3L7 19l-4 1 1-4 12.5-12.5z"></path>
                            </svg>
                        </a>
                    </button>
                </div>
                <div class="p-4">
                    <h2 class="text-center py-4 font-bold">{{ $pizza->naam }}</h2>
                    <p>{{ $pizza->beschrijving }}</p>
                    <p id="prijs-{{ $pizza->id }}" style="font-size:large">€{{ $pizza->prijs }}</p>

                    <select class="mt-4 w-full py-2 px-4 border border-gray-300 rounded"
                            onchange="updatePrijs({{ $pizza->prijs }}, this.value, {{ $pizza->id }})">
                        @foreach($formaten as $formaat)
                            <option value="{{ $formaat->id }}" {{ $formaat->id == 2 ? 'selected' : ''}}>{{ $formaat->formaat }}</option>
                        @endforeach
                    </select>
                    <button class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                        voeg toe aan winkelwagen
                    </button>
                </div>
            </li>
        @endforeach
    </ul>
</main>
</body>
</html>
