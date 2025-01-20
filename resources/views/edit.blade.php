<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline" rel="stylesheet">
    @vite('resources/js/script.js')
</head>
<body>
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

<h2 class="text-4xl text-center font-bold py-3">{{ $pizza->naam }} bewerken</h2>

<div class="bg-white rounded-lg p-8 shadow-lg mx-auto max-w-2xl rounded">
    <ul class="space-y-4">
        @foreach($pizza->ingredienten as $ingredient)
            <li class="flex justify-between items-center text-lg">
                <p>{{ $ingredient->naam }}</p>
            </li>
        @endforeach
    </ul>
    <p class="text-center mt-6">Totaalprijs: €{{ $pizza->prijs }}</p>
</div>

<div class="bg-white rounded-lg p-8 shadow-lg mx-auto max-w-2xl mt-8">
    <h3 class="text-2xl font-bold mb-4">Alle Ingrediënten</h3>
    <ul class="space-y-4">
        @foreach($ingredienten as $ingredient)
            <li class="flex justify-between items-center text-lg">
                <p>{{ $ingredient->naam }}</p>
                <p>€{{ $ingredient->prijs }}</p>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
