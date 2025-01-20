    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>Login - Stonk's Pizza</title>
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

    <h1 class="text-4xl text-center font-bold py-3">Login</h1>

    <main class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-2xl shadow-2xl p-8 border border-black">
            <h2 class="text-center text-2xl font-bold mb-6">Log in op je account</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold">E-mailadres</label>
                    <input id="email" type="email" name="email" value="{{ old('email') }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded" required>
                    @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold">Wachtwoord</label>
                    <input id="password" type="password" name="password"
                           class="w-full px-4 py-2 border border-gray-300 rounded" required>
                    @error('password')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit"
                        class="mt-4 bg-red-600 text-white py-2 px-4 rounded hover:bg-red-700 transition w-full">
                    Log in
                </button>

                <!-- Register Link -->
                <p class="mt-4 text-center text-gray-700">
                    Nog geen account? <a href="{{ route('register') }}" class="text-red-600 hover:underline">Registreer hier</a>.
                </p>
            </form>
        </div>
    </main>
    </body>

    </html>
