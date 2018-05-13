@extends ('layouts.main')

@section('main')
<div class="blur_container">
	
	<div class ="blur_control">
		<div class="col-md-7 offset-md-2">
			<div class="box_3">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content5">
					<h2 class="white"><br>Be a part of our environment. Ask Now!!!</h2>
					<form action="{{route('questions.store')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<textarea class="form-control question_id_main" rows="5" id="comment" name="question" placeholder="Your Answer"> </textarea>
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

<div class="container">
	

	
	<div id="header_welcome">
		<h2><i class="fa fa-star"></i>   Top-rated Topics</h2>
	</div>
	<div class="row">

		<div class="col-md-9 col-sm-9">
			
			<div class="col-md-12">
				
				@foreach($q as $que)
				
				
				<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div id="nyan_sin1">
						<br>
					</div>
					<h4 class="white"><i class="fa fa-question-circle"></i>   Question</h4>
					<div id="username">
						<div class="row">
							@foreach($u as $user)
							@if($user->id == $que->user_id)
							@php
							$profile_pic=$user->profile_pic;
							@endphp
							<div id="profilephoto">
								@if(is_null($profile_pic))
								<img src="" alt="" width="50px" height="50px">
								@else
								<img src="{{asset("img/$profile_pic" )}}" alt="" width="50px" height="50px">
								@endif
							</div>
							<div id="column">
								<h3>{{$user->name}}</h3>
								@endif
								@endforeach
								<h6>~~Beyond God~~</h6>

								

							</div>
						</div>
					</div>
					<div id="content3">
						<p>{{$que->question}}</p>

						<div id="timedate">
							<p><i class="fa fa-calendar"></i>{{$que->created_at}} </p>
						</div>

					</div>
					<h4 class="white"><i class="fa fa-lightbulb-o"></i>   Top Rated Answer</h4>
					@foreach($a as $ans)		
					@if($ans->q_id == $que->q_id)
					<div id="username">
						<div class="row">
							@foreach($u as $user)
							@if($user->id == $ans->user_id)
							@php
							$profile_pic = $user->profile_pic;
							@endphp
							<div id="profilephoto">
								<img src="{{asset("img/$profile_pic" )}}" alt="" width="50px" height="50px">
							</div>
							<div id="column">
								
								<h3>{{$user->name}}</h3>
								@endif
								@endforeach
								<h6>~~Beyond God~~</h6>
							</div>
						</div>
					</div>
					<div id="content6">
						<p>{{$ans->answer}}</p>
						<iframe name="main" style="display: none;"></iframe>
						<form action="{{route('ansrate' , ['place' => "main"])}}" method="POST" target="main ">
							{{csrf_field()}}
							<input type="hidden" name="id" value="{{$ans->id}}">
							<button type="submit" class="btn btn-secondary btn-sm" name="up_vote" value="1"><i class="fa fa-thumbs-up"></i></button>
							<button type="submit" class="btn btn-secondary btn-sm" name="down_vote" value="1"><i class="fa fa-thumbs-down"></i></button>
						</form>
						<p>{{$ans->up_vote}}</p>
						<div id="timedate">
							<p><i class="fa fa-calendar"></i>{{$ans->created_at}}</p>
						</div>
					</div>


					@break
					@endif
					@endforeach


					<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-secondary btn-sm blah_button">Join</a>

					<form action="{{route('answers.store')}}" method="post">
						{{csrf_field()}}
						<div class="form-group">
							<textarea class="form-control answer" name="answer" id="comment" placeholder="Your Answer" style="width: 98%; height: 100px; "> </textarea>

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
			<div class="box_2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<p><br></p>
					<form action="{{route('search')}}" method="post">
						{{csrf_field()}}
						<input type="text" name="search" width="50%">
						<button class="btn btn-submit" type="submit"><i class="fa fa-search"></i></button>
					</form>
					<p><br></p>
				</div>
				<div id="nyan_sin2">
					<br>
				</div>
			</div>
			<div class="box_2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<p><br></p>
					<h2 class="may_kyi">Advertise Here</h2>
					<p><br></p>
				</div>
				<div id="nyan_sin2">
					<br>
				</div>
			</div>

		</div>
	</div>
</div>



@endsection