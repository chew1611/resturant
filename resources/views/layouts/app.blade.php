<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <base href="/public">
    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>

.nav-item{
    color:antiquewhite
}
body{
    font-family: 18px;
}
.logo{
    width: 6%;
              position:absolute;top:0;
              left:12px;
              right:auto
}
@media only screen and (max-width: 500px) {
 .logo {
  width: 25%;
  height: auto;
}
}
</style>
</head>
<body>
    <div id="app" style="">
        <nav class="navbar 
        shadow-sm p-3 mb-5 bg-body rounded
        navbar-expand-md navbar-light "
        style="">
            <div class="container">
               
                <a class="navbar-brand lobster-regular" href="{{ url('/') }}">
              <img src="img/logo.png" class="logo">
                </a>
              
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"
                    style="font-size: 18px;">
                    <li class="nav-item">
                                    <a class="nav-link" 
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif"
                                    href="http://localhost:8000/">Home</a>
                                </li>

                    <li class="nav-item">
                                    <a class="nav-link" href="articles/mmfood"
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif"
                                    >Menu</a>
                                </li>

                                <li class="nav-item">
                                    <a 
                                    href="articles/order"
                                    class="nav-link" 
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif"
                                >Orders</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href=""
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif"
                                    >About</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" 
                                    
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif"
                                    href="">Content</a>
                                </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto" style="float: right;
                    font-size:18px">


                
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item" style="float: right;">
                                    <a 
                                    
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif;
                                    float:right"
                                    class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" 
                                    
                                    style="color:#466D1D;font-family:'Times New Roman', Times, serif;
                                    float:right"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
