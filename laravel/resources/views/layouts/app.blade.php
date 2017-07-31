<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"/>
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 

</head>
<body>
    <div class="header" id="home1">
        <div class="container">

            <div class="w3l_logo">
            <img src="img/slide-image-1.jpg" alt="" width="270" height="70">
                <h1><a href="/laravel/public">Syscom<span>   A la vanguardia en Tecnologia.</span></a></h1>
            </div>

    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->                            

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/mostrarArticulo')}}">Todos los Articulos</a></li>
                                <li><a href="{{ url('/camaras')}}">Camaras</a></li>
                                <li><a href="{{ url('/red')}}">Redes</a></li>
                                <li><a href="{{ url('/energia')}}">Energia</a></li>
                            </ul>
                        </li>
                        <li>
                        <a href="{{url('/carrito')}}">
                             Mi carrito
                            <span class="circle-shopping-cart">
                                 {{$productsCount}}
                            </span>
                        </a>
                        </li>
                        

                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>


                        @else
                                                @if (Auth::user()->role == 1)
                            <li><a href="{{url('admin')}}">Inicio</a></li>
                                                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/consultarUsuarios')}}">Ver usuarios</a></li>
                                <li><a href="{{ url('/registrarUsuarios')}}">registrar usarios</a></li>
                                <li><a href="{{ url('/registrarAdmin')}}">registrar admin</a></li>
                            </ul>
                        </li>
    
                                <li><a href="{{ url('/products')}}">Inventario</a></li>
                                 <li><a href="{{ url('/articulos')}}" target="_blank">Enviar Promociones</a></li>
                                @else

                                
                        @endif
									<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
 
    <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3_footer_grids">
                <div class="col-md-3 w3_footer_grid">
                    <h3>Contact</h3>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                    <ul class="address">
                        <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>1234k Avenue, 4th block, <span>New York City.</span></li>
                        <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
                        <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 567</li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Information</h3>
                    <ul class="info"> 
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="mail.html">Contact Us</a></li>
                        <li><a href="codes.html">Short Codes</a></li>
                        <li><a href="faq.html">FAQ's</a></li>
                        <li><a href="products.html">Special Products</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Category</h3>
                    <ul class="info"> 
                        <li><a href="products.html">Mobiles</a></li>
                        <li><a href="products1.html">Laptops</a></li>
                        <li><a href="products.html">Purifiers</a></li>
                        <li><a href="products1.html">Wearables</a></li>
                        <li><a href="products2.html">Kitchen</a></li>
                    </ul>
                </div>
                <div class="col-md-3 w3_footer_grid">
                    <h3>Profile</h3>
                    <ul class="info"> 
                        <li><a href="index.html">Home</a></li>
                        <li><a href="products.html">Today's Deals</a></li>
                    </ul>
                    <h4>Follow Us</h4>
                    <div class="agileits_social_button">
                        <ul>
                            <li><a href="#" class="facebook"> </a></li>
                            <li><a href="#" class="twitter"> </a></li>
                            <li><a href="#" class="google"> </a></li>
                            <li><a href="#" class="pinterest"> </a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="footer-copy">
            <div class="footer-copy1">
                <div class="footer-copy-pos">
                    <a href="#home1" class="scroll"><img src="images/arrow.png" alt=" " class="img-responsive" /></a>
                </div>
            </div>
            <div class="container">
                <p>&copy; 2017 Electronic Store. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
            </div>
        </div>
    </div>
    <!-- //footer --> 
</body>
</html>
