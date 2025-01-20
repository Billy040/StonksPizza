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
                <a href="{{ route('winkelwagen.index') }}" class="hover:text-yellow-300 transition">Winkelwagen</a>
            </li>
        </ul>
    </nav>
</header>

<main class="container mx-auto px-4 py-8">
    <h1 class="text-4xl text-center font-bold py-3">Uw Winkelwagen</h1>

    @if(session('winkelwagen'))
        <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
            @foreach(session('winkelwagen') as $id => $details)
                <li class="bg-white rounded-2xl shadow-2xl overflow-hidden py-0 border border-black">
                    <div class="p-4">
                        <h2 class="text-center py-4 font-bold">{{ $details['naam'] }}</h2>
                        <p>{{ $details['beschrijving'] }}</p>
                        <p style="font-size:large">€{{ $details['prijs'] }}</p>
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
</main>
</body>
</html>
