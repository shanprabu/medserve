<!doctype html>
<html lang="en">
    <head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> @yield('title', ' :: MedServe ::') </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

	<!-- CSS Files -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
        <link href="{{ asset('assets/css/material-kit.css') }}" rel="stylesheet"/>
    </head>
    <body>
        @include('layout.navbar')
        <div class="wrapper">
            <div class="header">
                @yield('header')
            </div>
            <div class="main">
                <div class="container">
                @yield('body')
                </div>
            </div>
            @include('layout.footer')
        </div>        
    </body>
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/material.min.js') }}"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('assets/js/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
    <script src="{{ asset('assets/js/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
    <script src="{{ asset('assets/js/material-kit.js') }}" type="text/javascript"></script>
</html>