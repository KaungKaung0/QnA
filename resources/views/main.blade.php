@extends ('layouts.main')

@section('main')
<div class="container">
	<div id="box1" class="box blurred-bg tinted">
			<!-- <div class="content">
				<h1>Blurred Background</h1>
				<h2>By <a href="http://ariona.net" rel="follow" target="_blank">Ariona, Rian</a></h2>
				<p>Drag this box to move around</p>
				<p class="related">See also: <a href="https://codepen.io/ariona/details/LVZLGP/" target="_blank">Staged Dropdown Animation</a></p>  
			</div>
		</div> -->
		<div id="header_welcome">
			<br>
			<h1><i class="fa fa-star"></i>   Top rated questions</h1>
		</div>
		<div class="row">



			<div class="col-md-9 col-sm-9">
				
				<div class="col-md-12">
					@foreach($q as $que)
					<div id="box">
						<div id="nyan_sin1">
							<br>
						</div>
						<div id="content1">
							<p>{{$que->question}}</p>
							<button  class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
							<button  class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>


						</div>
						<div id="content2">
							<p>Go google, Lol!</p>
							<button  class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
							<button  class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>
						</div>
						<div class="form-group">
							<textarea class="form-control answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>
							<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
						</div>
						<div id="nyan_sin2">
							<br>
						</div>

					</div>
					@endforeach
					{{-- here --}}
				</div>
			</div>
			<div class="col-md-3 col-sm-off">
				<div class="box_2">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<h2>May kyi!!</h2>
						<form method="post" action="{{route('questions.store')}}">
							
							<div class="form-group">
								<textarea class="form-control" rows="5" cols="2" name="question" id="question" placeholder="Question Here"> </textarea>

								<button type="submit" class="btn btn-secondary btn-sm submit-button fa fa-upload">Submit</button>
								{{ csrf_field() }}
							</form>
						</div>
						
					</div>

					<div id="nyan_sin2">
						<br>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endsection
