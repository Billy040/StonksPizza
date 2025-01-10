<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registreer - Stonk's Pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('resources/js/script.js')
</head>

<body class="bg-gray-100">
<header class="bg-red-600 text-white shadow-md">
    <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
        <a href="{{ route('homepage') }}" class="text-2xl font-bold">Stonk's Pizza</a>

        <ul class="flex space-x-6">
            <li>
                <a href="{{ route('homepage') }}" class="hover:text-yellow-300 transition">Homepage</a>
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

<h1 class="text-4xl text-center font-bold py-3">Registreer</h1>

<main class="container mx-auto px-4 py-8">
    <div class="max-w-md mx-auto bg-white rounded-2xl shadow-2xl p-8 border border-black">
        <h2 class="text-center text-2xl font-bold mb-6">Maak een account aan</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Naam -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-bold">Naam</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-2 border border-gray-300 rounded" required autofocus>
                @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>


            <div class="mb-4">
                <label for="adres" class="block text-gray-700 font-bold">Adres</label>
                <input id="adres" type="text" name="adres" value="{{ old('adres') }}" class="w-full px-4 py-2 border border-gray-300 rounded" required>
                @error('adres') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <div class="mb-4">
                <label for="telefoonnummer" class="block text-gray-700 font-bold">Telefoonnummer</label>
                <input id="telefoonnummer" type="text" name="telefoonnummer" value="{{ old('telefoonnummer') }}" class="w-full px-4 py-2 border border-gray-300 rounded" required>
                @error('telefoonnummer') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-bold">E-mailadres</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-2 border border-gray-300 rounded" required>
                @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Wachtwoord -->
            <div class="mb-4">
                <label for="password" class="block text-gray-700 font-bold">Wachtwoord</label>
                <input id="password" type="password" name="password" class="w-full px-4 py-2 border border-gray-300 rounded" required>
                @error('password') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Confirm Wachtwoord -->
            <div class="mb-4">
                <label for="password_confirmation" class="block text-gray-700 font-bold">Bevestig Wachtwoord</label>
                <input id="password_confirmation" type="password" name="password_confirmation" class="w-full px-4 py-2 border border-gray-300 rounded" required>
                @error('password_confirmation') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
            </div>

            <!-- Submit Button -->
            <button type="submit" class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                Registreer
            </button>
        </form>

    </div>
</main>
</body>

</html>
