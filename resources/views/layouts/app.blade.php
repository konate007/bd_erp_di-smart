<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/css/skins/_all-skins.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/_all.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/css/select2.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.7.14/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.css')}}">

    <!-- Theme style -->
    <!--<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}}">-->

    

    @yield('css')
</head>

<body class="skin-blue sidebar-mini">
@if (!Auth::guest())
    <div class="wrapper">
        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <!--
            <a href="#" class="logo">
                <b>InfyOm</b>
            </a>
            -->

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- User Account Menu -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                             role="button" aria-expanded="false" aria-haspopup="true">
                              <i class="fa fa-bell">
                                {{ count(Auth::user()->unreadNotifications) }}
                              </i>
                            </a>
                            
                            <ul class="dropdown-menu">
                                 <li>{{ count(Auth::user()->unreadNotifications)}} notification(s) pour {{Auth::user()->nom }} </li>                                 
                            </ul>
                        </li>
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="data:image/png;base64,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"
                                     class="user-image" alt="User Image"/>
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs">{{ Auth::user()->nom }}</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                   <img src="data:image/png;base64,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"
                                         class="img-circle" alt="User Image"/>
                                    <p>
                                        {{ Auth::user()->nom }}
                                        <small>Membre depuis {{ Auth::user()->created_at->format('M. Y') }}</small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                   
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    
                                    <div class="pull-right">
                                        <a href="{{ url('/logout') }}" class="btn btn-default btn-flat"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Deconnexion
                                        </a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- Main Footer -->
        <footer class="main-footer" style="max-height: 100px;text-align: center">
            <strong>Copyright © 2016 <a href="#">Company</a>.</strong>Tous droits reservés.
        </footer>

    </div>
@else
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    InfyOm Generator
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/login') }}">Se conecter</a></li>
                    <li><a href="{{ url('/register') }}">S'inscrire</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    @endif

    <!-- jQuery 3.1.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.3/js/adminlte.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>

    <script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('dist/js/demo.js')}}"></script>

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

    <!-- PAGE PLUGINS -->

    <!-- ChartJS -->
    <script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

    <!-- PAGE SCRIPTS -->
    <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script>
    @stack('scripts')
</body>
</html>