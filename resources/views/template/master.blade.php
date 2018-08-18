
<!DOCTYPE html>
<html>
<head>
	@include('partials._head')
</head>
<body>
	{{-- Navbar --}}
	@include('partials._navbar')
	{{-- End Navbar --}}

	{{-- Sidebar --}}
	@include('partials._sidebar')
	{{-- End Sidebar --}}
		
	@yield('content')
	
	@include('partials._script')
	@yield('scripts')
		
</body>
</html>