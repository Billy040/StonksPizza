<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Medewerkers lijst</title>
    @vite('resources/css/app.css')
</head>
<body>
<header class="bg-red-600 text-white shadow-md">
    @include('layouts.navbar')
</header>

<h2 class="text-4xl text-center font-bold py-3">Medewerkers Lijst</h2>

<div class="bg-white rounded-lg p-8 shadow-lg mx-auto max-w-2xl">
    <a href="{{ route('medewerkers.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded mb-4 inline-block">
        Nieuwe Medewerker Toevoegen
    </a>
    <table class="w-full border-collapse border border-gray-200">
        <thead>
            <tr>
                <th class="border border-gray-300 px-4 py-2">Voornaam</th>
                <th class="border border-gray-300 px-4 py-2">Achternaam</th>
                <th class="border border-gray-300 px-4 py-2">Email</th>
                <th class="border border-gray-300 px-4 py-2">Acties</th>
            </tr>
        </thead>
        <tbody>
            @foreach($medewerkers as $medewerker)
                <tr>
                    <td class="border border-gray-300 px-4 py-2">{{ $medewerker->voornaam }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $medewerker->achternaam }}</td>
                    <td class="border border-gray-300 px-4 py-2">{{ $medewerker->email }}</td>
                    <td class="border border-gray-300 px-4 py-2">
                        <a href="{{ route('medewerkers.edit', $medewerker) }}" class="text-blue-500">Bewerken</a>
                        <form action="{{ route('medewerkers.destroy', $medewerker) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
