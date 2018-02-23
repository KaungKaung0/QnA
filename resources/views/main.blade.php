@extends ('layouts.main')

@section('main')
<div class="container">
	<div id="box1" class="box blurred-bg tinted">
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
							{{-- <button  class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
							<button  class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button> --}}
						</div>

						@foreach($a as $ans)
						
						@if($ans->q_id == $que->q_id)
						<div id="content2">


							<p>{{$ans->answer}}</p>


							<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
							<button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button>
						</div>
						@break;
						@endif
						
						@endforeach
						<form class="form-group" method="post" action="{{route('answers.store')}}">
							{{ csrf_field() }}
							<div class="form-group">
								<textarea class="form-control answer" rows="2"  name="answer" id="comment" placeholder="Answer Here"> </textarea>
								<input type="hidden" name="q_id" value="{{$que->q_id}}">
								<button type="submit" class="btn btn-secondary btn-sm submit-button fa fa-upload">Submit</button>

							</div>
						</form>						
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
								<textarea class="form-control" rows="2" cols="1" name="question" id="comment" 
								name="question" 
								placeholder="Question Here"> </textarea>
							</div>
							<button type="submit" class="btn btn-secondary btn-sm submit-button fa fa-upload">Submit</button>
						</form>

						
					</div>
					<div id="nyan_sin2">
							<br>
						</div>
				</div>
				
			</div>
		</div>
	</div>
</div>

@endsection
