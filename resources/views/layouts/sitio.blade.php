<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GreenCapital') }}</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-1.7.min.js"></script>
    <script src="{{ asset('js/anim_top.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/site.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    {{-- <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> --}}

    <!-- Styles -->
    <link href="{{ asset('css/site.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('nivo_slider/themes/default/default.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('nivo_slider/themes/light/light.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('nivo_slider/themes/dark/dark.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('nivo_slider/themes/bar/bar.css') }}" type="text/css" media="screen">
    <link rel="stylesheet" href="{{ asset('nivo_slider/nivo-slider.css') }}" type="text/css" media="screen">
	<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&amp;subset=latin,latin-ext,vietnamese" rel="stylesheet" type="text/css">

	<script type="text/javascript" src="{{ asset('/fancybox/jquery.mousewheel-3.0.4.pack.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/fancybox/jquery.fancybox-1.3.4.pack.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('fancybox/jquery.fancybox-1.3.4.css') }}" media="screen">

</head>
<body>
	<div class="baseWidth auto body_margin_bottom relative">
		@include('partials.topper_es')
		@yield('content')
	</div>
	@include('partials.footer_es')
</body>
</html>
