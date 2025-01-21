<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile - Stonk's Pizza</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline" rel="stylesheet">
    @vite('resources/js/script.js')
</head>

<body class="bg-gray-100">
<!-- Header -->
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

<!-- Main Content -->
<main class="bg-gray-100 py-12">
    <div class="container mx-auto px-4">
        <h2 class="text-center text-4xl font-bold text-gray-800 mb-6">Profiel bewerken</h2>
        <div class="grid gap-6 sm:grid-cols-1 md:grid-cols-3">
            <!-- Update Profile Information -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200">
                <h3 class="text-2xl font-bold mb-4 text-red-600">Profielinformatie</h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Update Password -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200">
                <h3 class="text-2xl font-bold mb-4 text-red-600">Wachtwoord wijzigen</h3>
                @include('profile.partials.update-password-form')
            </div>

            <!-- Delete User -->
            <div class="bg-white rounded-2xl shadow-xl p-8 border border-gray-200">
                <h3 class="text-2xl font-bold mb-4 text-red-600">Account verwijderen</h3>
                @include('profile.partials.delete-user-form')
            </div>
        </div>
    </div>
</main>
</body>

</html>
