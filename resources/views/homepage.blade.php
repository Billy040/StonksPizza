<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stonk's Pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
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
                <a href="#" class="hover:text-yellow-300 transition">Winkelwagen</a>
            </li>
            <li>
                <a href="#" class="hover:text-yellow-300 transition">Login</a>
            </li>
            <li>
                <a href="#" class="hover:text-yellow-300 transition">Register</a>
            </li>
        </ul>
    </nav>
</header>

<main class="container mx-auto px-4 py-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
        @foreach($pizzas as $pizza)
            <li class="bg-white rounded-2xl shadow-2xl overflow-hidden py-0">
                <div class="p-4">
                    <h2 class="text-center py-4 font-bold">{{ $pizza->naam }}</h2>
                    <img src="{{ asset($pizza->image) }}" alt="{{ $pizza->naam }}">
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
