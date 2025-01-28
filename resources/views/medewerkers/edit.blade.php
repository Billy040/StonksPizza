<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medewerker Bewerken</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-red-600 text-white shadow-md">
    @include('layouts.navbar')
</header>

<h2 class="text-4xl text-center font-bold py-3">Medewerker Bewerken</h2>

<div class="bg-white rounded-lg p-8 shadow-lg mx-auto max-w-2xl">
    <form action="{{ route('medewerkers.update', $medewerker) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="voornaam" class="block">Voornaam</label>
            <input type="text" id="voornaam" name="voornaam" value="{{ $medewerker->voornaam }}" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="achternaam" class="block">Achternaam</label>
            <input type="text" id="achternaam" name="achternaam" value="{{ $medewerker->achternaam }}" class="w-full border rounded p-2" required>
        </div>
        <div class="mb-4">
            <label for="email" class="block">Email</label>
            <input type="email" id="email" name="email" value="{{ $medewerker->email }}" class="w-full border rounded p-2" required>
        </div>
        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Opslaan</button>
    </form>
</div>

</body>
</html>
