<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ambulanz 3.0') }}</title>

    <!-- Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli:400,300" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('fonts/themify.ttf') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <div class="sidebar-wrapper">
        <!-- <div class="wrapper">
        <div class="sidebar" data-background-color="white" data-active-color="danger">
            <div class="sidebar-wrapper"> -->
            <div class="logo">
                <a href="{{ url('/') }}" class="simple-text">
                    <img src="{{ asset('img/logo_484x310.gif') }}" alt="Ambulanz 3.0">
                </a>
            </div>
            <ul class="nav">
                @role('admin')
                <li class="nav-item">
                    <a href="{{ route('patients.index') }}" class="nav-link"><i class="ti-files"></i>Patienten</a>
                </li>
                @else
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="ti-files"></i>Meine Befunde</a>
                </li>
                <li><a href="{{ route('patientdata.show') }}"><i class="ti-clipboard"></i>Patientendaten</a></li>
                <li><a href="{{ route('anamnesis.show') }}"><i class="ti-pencil-alt"></i>Anamneseformular</a></li>
                <li><a href="{{ route('dataupload.show') }}"><i class="ti-export"></i>Befund hochladen</a></li>
                @endrole
            </ul>

        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">

            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        @yield('heading')
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    <i class="ti-user"></i>
                                    {{ Auth::user()->email }} <span class="caret"></span>
                                </a>


                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">Meine Daten</a>
                                    </li>
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
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                @if (isset($errors) && count($errors) > 0)
                    <div class="alert alert-danger">
                        <p>There were errors with your input!</p>
                        <ul>
                            @foreach($errors->all() as $message) 
                                <li>{{ $message }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @yield('content')
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <!-- <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav> -->
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made by Robin Sohal</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <script src="{{ asset('js/app.js') }}"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="{{ asset('js/bootstrap-checkbox-radio.js') }}"></script>

    <!--  Charts Plugin -->
    <script src="{{ asset('js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('js/bootstrap-notify.js') }}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="{{ asset('js/paper-dashboard.js') }}"></script>

</html>
