<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	@include('flash::message')
	<form action="{{route('mailconf.confirm')}}" method="post">
		{{csrf_field()}}

		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="">Confirmation code</span>
				<input type="text" class="form-control" placeholder="Type Here" name="confirmation">
				<button type="submit" class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
			</div>
		</div>
	</form>
	<p>Don't have account ?</p>
	<a href="{{route('resign')}}">Sign in here</a>
	@include('layouts.foot-scripts')
</body>
</html>