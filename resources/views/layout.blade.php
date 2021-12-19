<!DOCTYPE HTML>
<html lang='ja'>
<head>
    <meta charset='UTF-8'>
    <link rel="stylesheet" href="../../../css/layout.css">
    <title>GdT</title>
</head>
<body>
    <header>
    <div class='header-container'>
        
            <a href="{{ route('posts.index') }}" class="btn">Home</a>
        
        @guest
        
            <a href="{{ route('register') }}" class="btn">Sign up</a>
        
        
            <a href="{{ route('login') }}" class="btn">Sign in</a>
        
        @endguest
        
        @auth
        
            <a class="btn" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                    {{ __('Sign out') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="btn">
               @csrf
            </form>
        
        @endauth

        @yield('header')
    </div>
    </header>
    @yield('content')
    
</body>
</html>