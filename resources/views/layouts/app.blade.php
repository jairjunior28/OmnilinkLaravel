
<!--/**
 * Created by PhpStorm.
 * User: jairjunior
 * Date: 08/12/2017
 * Time: 11:39
 */-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>Omnilink - Auditoria de cadastro de veiculos</title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="{{ elixir('css/app.css') }}" rel="stylesheet">


</head>
<body id="app-layout">
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Navegação</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="/">
                 Auditoria de cadastro de veiculos
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                <li><a href="/">Início</a></li>
            </ul>

            <!-- Right Side Of Navbar -->
            <!--ul class="nav navbar-nav navbar-right">

               <?php /*
                    <!-- Authentication Links -->
                        @if (Auth::guest())-->
                    {{--   <li><a href="{{ url('/login') }}">Login</a></li>
                       <li><a href="{{ url('/register') }}">Register</a></li>
                       --}}
                @else
                    {{--
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                    --}}
                @endif*/
                ?>
            </ul-->
        </div>
    </div>
</nav>

@yield('content')

<!-- JavaScripts -->

</body>
</html>
