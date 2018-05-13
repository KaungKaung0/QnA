@extends('layouts.main')

@section('main')

<div class="container">

	<div id="box">
		<div id="nyan_sin1">
			<br>
		</div>
		<h1><i class="fa fa-user"></i>My Profile</h1>
		<div class="row">
			<div class="col-md-3">
				<div class="image-container-apyin">
					<div class="image-container-atwin">
						@if(is_null($profile_pic))
						<form enctype="multipart/form-data"  action="{{route('ppupload')}}" method="POST">
							{{csrf_field()}}
							<td class="align-middle"><span class="btn btn-default btn-file" id="change_this">
								<i class="fa fa-plus-circle" style="font-size:200px;"></i> <input type="file" id="imgInp" name="pp">
							</span></td>
							<input type="submit" style="display: none;" name="upload">
						</form>
						@else
						<img src="{{asset("img/$profile_pic" )}}" alt="" width="200px" height="200px">
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div id="content1">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row">User Name</th>
								<td>-</td>
								<td>{{$user}}</td>
							</tr>
							<tr>
								<th scope="row">Role</th>
								<td>-</td>
								<td>{{$role}}</td>
							</tr>
							<tr>
								<th scope="row">Portfolio</th>
								<td>-</td>
								<td>Studying 2nd year Computer Science at University of Yangon. </td>
							</tr>
						</tbody>
					</table>
					@if(!is_null($profile_pic))
					<a href="{{route('ppdelete')}}" id="ppdelete" class="btn btn-danger" name="edit">Edit Profile Picture </a>
					@endif
				</div>
			</div>
		</div>
		<div id="nyan_sin2">
			<br>
		</div>
	</div>


	<div class="row">
		<!-- Modal -->
		<div class="col-md-6">
			<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">

						<div class="modal-body">
							<div class="container-fluid">
								<div class="row">
									<div class="col-md-12">
										<center>
											<h3 class="media-heading">{{$user}}<small>Beyond God</small></h3>
											<span><strong>Knows about: </strong></span>
											<a href="" class="damn"><span class="label label-warning color-anayahtr">HTML</span></a>
											<a href="" class="damn"><span class="label label-info color-anayahtr">CSS</span></a>
											<a href="" class="damn"><span class="label label-info color-anayahtr">Javascript</span></a>
											<a href="" class="damn"><span class="label label-success color-anayahtr">PHP</span></a>
											<a href="" class="damn"><span class="label label-success color-anayahtr">Testing</span></a>
										</center>
										<hr>
										<center>
											<p class="text-left"><strong>Bio: </strong><br>
											Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
											<br>
										</center>
									</div>
								</div>
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>

		<div class="col-md-6">

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
						</div>
						@endif
						@endforeach	
						
					</div>
					<div id="content3">
						<p>{{$que->question}}</p>

						<div id="timedate">
							<p><i class="fa fa-calendar"></i>{{$que->created_at}}</p>
						</div>

					</div>
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
						<img src="{{asset("img/$profile_pic")}}" alt="" width="50px" height="50px">
						@endif
					</div>
					<div id="column">

						<h3>{{$user->name}}</h3>
						<h6>{{$user->role}}</h6>
					</div>
					@endif
					@endforeach
				</div>
				<div id="content6">
					<p>{!!$ans->answer!!}</p>
						<!-- <button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
							<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-down"></i></button> -->
							<div id="timedate">
								<p><i class="fa fa-calendar"></i>{{$ans->created_at}}</p>
							</div>
						</div>

						<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-secondary btn-sm blah_button">Join</a>



						@break
						@endif
						@endforeach
						@endforeach


					</div>
				</div>
			</div>


			@endsection 