<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.head')
</head>

<body class="hidden-sn mdb-skin">


	@include('layouts.nav')
	<main>
		@yield("main")
	</main>
	@include('layouts.foot-scripts')
</body>
</html>