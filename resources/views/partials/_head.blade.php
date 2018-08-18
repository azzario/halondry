<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="_token" content="{{ csrf_token() }}">
<title>Laundry - @yield('title')</title>
@include('partials._style')
@yield('styles')

<!--Custom Font-->
@include('partials._fonts')
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->