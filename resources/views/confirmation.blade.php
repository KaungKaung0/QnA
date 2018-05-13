<!DOCTYPE html>
<html lang="en">
<head>
	@include('layouts.head')
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
	@include('flash::message')
	<!-- <form action="{{route('mailconf.confirm')}}" method="post">
		{{csrf_field()}}
	
		<div class="input-group mb-3">
			<div class="input-group-prepend">
				<span class="input-group-text" id="">Confirmation code</span>
				<input type="text" class="form-control" placeholder="Type Here" name="confirmation">
				<button type="submit" class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
			</div>
		</div>
	</form> -->
	<p>
		<br>
		<br>
		<br>
	</p>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-5 col-xs-12">
				<div  id = "login_shadow" class="card card-default">
					<div class="card-header login_color">
						<h2>
							Confirm Email
						</h2>
					</div>
					<div class="card-body">
						<form action="{{route('mailconf.confirm')}}" method="post">
							{{csrf_field()}}
							<div class="form-group">
								<label for="confirmation_code" class="col-md-4 control-label">Please Confirm your email</label>
								<div class="col-md-6">
									<input id="confirmation_code" type="text" class="form-control" placeholder="Type the confirmation code here" name="confirmation" required>
									
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									<button type="submit" class="btn login_color"><i class="fa fa-upload"></i>
										Submit
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- <p>Don't have account ?</p>
	<a href="{{route('resign')}}">Sign in here</a> -->
	@include('layouts.foot-scripts')
</body>
</html>