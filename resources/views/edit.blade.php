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
            <li>
                <a href="{{ route('login') }}" class="hover:text-yellow-300 transition">Login</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="hover:text-yellow-300 transition">Registreer</a>
            </li>
            <li>
                <a href="{{ route('winkelwagen') }}" class="hover:text-yellow-300 transition">Winkelwagen</a>
            </li>
        </ul>
    </nav>
</header>

<h2 class="text-4xl text-center font-bold py-3">Ingredienten</h2>

<div class="bg-white rounded-lg p-8 shadow-md mx-auto max-w-2xl">
    <ul class="space-y-4">
        @foreach($pizza->ingredienten as $ingredient)
            <li class="flex justify-between items-center text-lg">
                <span>{{ $ingredient->naam }}</span>
                <span>{{ $ingredienten->prijs }}</span>
            </li>
        @endforeach
    </ul>
</div>

</body>
</html>
