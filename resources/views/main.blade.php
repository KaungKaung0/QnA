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
								<img src="http://www.gravatar.com/avatar/ade014a130559a4e4691e1267cc3433c.jpg?s=80&amp;d=mm&amp;r=g" alt="" width="50px" height="50px">
								@else
								<img src="{{asset("img/$profile_pic")}}" alt="" width="50px" height="50px">
								@endif
							</div>
							<div id="column">
								<h3>{{$user->name}}</h3>
								<h6>{{$user->role}}</h6>
								@endif
								@endforeach								
							</div>
						</div>
						<p>{!!$que->question!!}</p>
					</div>
					<div id="content3">
						

						<div id="timedate">
							<p><i class="fa fa-calendar"></i>{{$que->created_Date}} </p>
							<p><i class="fa fa-eye"></i> {{$que->viewer_count}}</p>
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
								@if(is_null($profile_pic))
								<img src="http://www.gravatar.com/avatar/ade014a130559a4e4691e1267cc3433c.jpg?s=80&amp;d=mm&amp;r=g" alt="" width="50px" height="50px">
								@else
								<img src="{{asset("img/$profile_pic" )}}" alt="" width="50px" height="50px">
								@endif
							</div>
							<div id="column">

								<h3>{{$user->name}}</h3>
								<h6>{{$user->role}}</h6>
								@endif
								@endforeach
							</div>
						</div>
						<p>{!!$ans->answer!!}</p>
					</div>
					<div id="content6">
			<p><i class="fa fa-thumbs-up"></i>{{$ans->up_vote}}</p>
						
						<div id="timedate">
							<p><i class="fa fa-calendar"></i>{{$ans->created_Date}}</p>
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
			<!-- <div class="box_2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<p><br></p>
					
					<p><br></p>
				</div>
				<div id="nyan_sin2">
					<br>
				</div>
			</div> -->
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