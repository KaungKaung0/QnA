<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.head')
</head>

<body>
	

		@include('layouts.nav')
		@yield('main')
		@include('layouts.foot-scripts')
	</body>
	</html>