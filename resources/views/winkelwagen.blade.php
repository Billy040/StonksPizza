<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Winkelwagen</title>
    <script src="https://cdn.tailwindcss.com"></script>

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

<h1 class="text-3xl font-bold text-center py-3">Uw winkelwagen</h1>



</body>
</html>

