<header>
    <p><a href="{{ route('index') }}">Main page</a></p>
    @guest
    <div>
        <p><a href="{{ route('auth.register') }}">Register</a></p>
        <p><a href="{{ route('auth.login') }}">Login</a></p>
    </div>
    @endguest
</header>
