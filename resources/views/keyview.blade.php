<!DOCTYPE html>
<html lang="en">

<head>
	@include('layouts.head')
</head>

<body>
	<div class="container">
		<div class="row justify-content-md-center align-items-center"> 
			@foreach($key as $keys)
			<div class="key">
				{{$keys->public}}
			</div>
			<div class="key">
				{{$keys->private}}
			</div>
			@endforeach
		</div>

	</div>
</body>