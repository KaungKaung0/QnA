@extends ('layouts.main')

@section('main')
<div class="container">
	<div id="header_welcome">
		<h1>Top rated questions</h1>
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
					@foreach($a as $ans)		
					@if($ans->q_id == $que->q_id)
					<div id="content2">
						<p>{{$ans->answer}}</p>
						<button  class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i></button>
						<button  class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i></button>

					</div>
					
					
					@break
					@endif
					@endforeach
				

					<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-success btn-sm">View More</a>

					<form action="{{route('answers.store')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<textarea class="form-control answer" name="answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>

							<input type="hidden" name="q_id" value="{{$que->q_id}}">
							<button type="submit" class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
						</div>
					</form>
					<div id="nyan_sin2">
						<br>
					</div>

				</div>
				@endforeach()
				
				
			</div>
		</div>
		<div class="col-md-3 col-sm-off">
			<div class="box_2">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<h2>May kyi!!</h2>
					<form action="{{route('questions.store')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<textarea class="form-control question_id" rows="5" id="comment" name="question" placeholder="Your Answer"> </textarea>
							<button type="submit" class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
						</div>
					</form>
				</div>
				<div id="nyan_sin2">
					<br>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection