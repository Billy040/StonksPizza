<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medewerker Details</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-red-600 text-white shadow-md">
    @include('layouts.navbar')
</header>

<h2 class="text-4xl text-center font-bold py-3">Medewerker Details</h2>

<div class="bg-white rounded-lg p-8 shadow-lg mx-auto max-w-2xl">
    <p><strong>Voornaam:</strong> {{ $medewerker->voornaam }}</p>
    <p><strong>Achternaam:</strong> {{ $medewerker->achternaam }}</p>
    <p><strong>Email:</strong> {{ $medewerker->email }}</p>
    <a href="{{ route('medewerkers.index') }}" class="bg-blue-500 text-white py-2 px-4 rounded mt-4 inline-block">Terug naar overzicht</a>
</div>

</body>
</html>
