<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/@heroicons/react/outline" rel="stylesheet">
    @vite('resources/js/script.js')
</head>
<body>
    <header class="bg-red-600 text-white shadow-md">
        @include('layouts.navbar')
    </header>
    

<section class="relative bg-gray-100">
    <img src="https://img.pikbest.com/wp/202344/cooking-delicious-top-view-of-pizza-on-a-textured-gray-background-concept_9925164.jpg!w700wp" class="w-full h-[calc(100vh-4rem)] object-cover">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center">
        <h1 class="text-white text-4xl font-bold shadow-lg"><Welkom></Welkom>Welkom op Stonk's Pizza</h1>
        <p class="text-white text-2xl shadow-lg">Bestel hier de lekkerste pizza's van authentieke Italiaanse smaak.</p>
        <button class="bg-red-600 text-white rounded-full hover:bg-red-700 py-4 px-8 mt-8 shadow-lg font-semibold text-lg transition-all transform hover:scale-105">
            <a href="{{ route('menu') }}">
                Bekijk het menu
            </a>
        </button>
    </div>
</section>


</body>
</html>
