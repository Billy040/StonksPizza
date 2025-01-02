<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('homepage') }}">Home</a></li>
            <li>Winkelwagen</li>
            <li>Login</li>
            <li>Register</li>
        </ul>
    </nav>
</header>


<ul>
    @foreach($pizzas as $pizza)
        <li>
            <h2>{{ $pizza->naam }}</h2>
            <p>{{ $pizza->beschrijving }}</p>
            <p>{{ $pizza->prijs }}</p>
            <img src="{{ asset($pizza->image) }}" alt="{{ $pizza->naam }}">
            <button>Add to cart</button>
        </li>
    @endforeach
</ul>
</body>
</html>
