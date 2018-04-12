<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ajax.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/animes.css') }}" rel="stylesheet">


	<style>
	
	
	html, body {
	  height: 100%;
	  }

	  #wrap {
	    min-height: 100%;
		}

		#main {
		  overflow:auto;
		    padding-bottom:150px; /* this needs to be bigger than footer height*/
			}

			.footer {
			  position: relative;
			    margin-top: -150px; /* negative value of footer height */
				  height: 150px;
				    clear:both;
					  padding-top:20px;
					  } 

	a{
		color:#aaaaaa;

	}
	
	a:hover{
		color:black;
		text-decoration:none;
	}
	
	</style>

</head>
<body>
    <div id="wrap">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }} </a>
				<ul class="navbar-nav mr-auto"><li><a class="nav-link" href="{{ url('/animes') }}">{{ __('Animes') }}</a></li></ul>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
						<li><a class="nav-link" href="{{ url('/emision') }}">{{ __('Emision') }}</a></li>
						<li><a class="nav-link" href="{{ url('/personajes') }}">{{ __('Personajes') }}</a></li>
						<li><a class="nav-link" href="{{ url('/aleatorio') }}">{{ __('Aleatorio') }}</a></li>
					</ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
						<form class="form-inline" action="{{ url('/busqueda') }}" method="get">
							<input class="form-control" type="text" name="search" placeholder="{{ __('Buscar animes...')}}">
						</form>
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
							
								<!-- Dropdown Menu-->

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/user') . '/' . Auth::user()->name }} ">{{ __('Perfil') }}</a>
									@if(Auth::user()->name === 'ShuviDola')
                                    <a class="dropdown-item" href="{{ url('/administrar') }}">{{ __('Administrar') }}</a>
									@endif
									<a class="dropdown-item" href="{{ url('/pendientes') }}">{{ __('Pendientes') }}</a>
									<a class="dropdown-item" href="{{ url('/terminadas') }}">{{ __('Terminadas') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div id="main">
            @yield('filter')
            @yield('content')
        </div>

    </div>
	
	<footer class='footer' style='background-color:white'>
		<div class="container text-center">
			<div class="row">
				<div class="col-3">
					<a href=""><h4><b>{{ __('Animes')}}</b></h4></a>
				</div>
				<div class="col-3">
					<a href=""><h4><b>{{ __('Emision')}}</b></h4></a>
				</div>
				<div class="col-3">
					<a href=""><h4><b>{{ __('Personajes')}}</b></h4></a>
				</div>
				<div class="col-3">
					<a href=""><h4><b>{{ __('Aleatorio')}}</b></h4></a>
				</div>
			</div>
			<h5 class='mt-3' style='color:#aaaaaa'><b>Los videos mostrados en esta página no se encuentran en nuestros servidores</b></h5>
		</div>
	</footer>

</body>
</html>
