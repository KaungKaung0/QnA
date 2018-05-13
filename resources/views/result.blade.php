@extends('layouts.main')
@section('main')
@if($found ==1)
@foreach($question as $que)
<div class="container">
	<div class="row">
		<div class="col-md-12">
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
				<div id="content3">
					<p>{{$que->question}}</p>

					<div id="timedate">
						<p><i class="fa fa-calendar"></i>{{$que->created_at}} </p>
					</div>

				</div>
					<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-secondary btn-sm blah_button">Join</a>
				
			</div>
		</div>
	</div>

	@endforeach

	@else
	<h3>Not FOund</h3>
	@endif
	@endsection