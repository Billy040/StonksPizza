<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>status</title>
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


<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Order Status</h1>
    <h2 class="text-xl mb-2">Order ID: {{ $bestelling->id }}</h2>
    <p><strong>Status:</strong> {{ $bestelling->status->status }}</p>
    <p><strong>Telefoonnummer:</strong> {{ $bestelling->telefoonnummer }}</p>
    <p><strong>Adres:</strong> {{ $bestelling->adres }}</p>
    <p><strong>Postcode:</strong> {{ $bestelling->postcode }}</p>
    <p><strong>Totaal Bedrag:</strong> €{{ number_format($bestelling->totaalBedrag, 2) }}</p>

    <h3 class="text-2xl font-bold mt-6 mb-4">Uw bestelling</h3>
    <ul class="list-disc pl-5">
        @foreach($bestelling->pizzas as $pizza)
            <li class="mb-4">
                <p><strong>Pizza:</strong> {{ $pizza->naam }}</p>
                <p><strong>Formaat:</strong> {{ $pizza->pivot->formaat }}</p>
                <p><strong>Aantal:</strong> {{ $pizza->pivot->aantal }}</p>
                <p><strong>Prijs:</strong> €{{ number_format($pizza->pivot->prijs, 2) }}</p>
            </li>
        @endforeach
    </ul>
</div>


</body>
</html>
