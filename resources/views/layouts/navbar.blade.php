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
                    <button type="submit" class="hover:text-yellow-300 transition">Logout</button>
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
