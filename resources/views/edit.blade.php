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
        @include('layouts.navbar')
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
