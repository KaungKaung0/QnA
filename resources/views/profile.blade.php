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
						@if($picexit == 1)
						<img src="{{asset("img/$profile" )}}" alt="" width="200px" height="200px">

						
 
						@else
						<form enctype="multipart/form-data"  action="{{route('ppupload')}}" method="POST">
							{{csrf_field()}}
							<td class="align-middle"><span class="btn btn-default btn-file" id="change_this">
								<i class="fa fa-plus-circle" style="font-size:200px;"></i> <input type="file" id="imgInp" name="pp">
							</span></td>
							<input type="submit" style="display: none;" name="upload">
						</form>
						@endif
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div id="content1">
					<table class="table">
						<tbody>
							<tr>
								<th scope="row">Developer Name</th>
								<td>-</td>
								<td>Kaung Khant Thu</td>
							</tr>
							<tr>
								<th scope="row">Role</th>
								<td>-</td>
								<td>Project Manager</td>
							</tr>
							<tr>
								<th scope="row">Portfolio</th>
								<td>-</td>
								<td>Studying 2nd year Computer Science at University of Yangon. </td>
							</tr>
						</tbody>
					</table>
					@if($picexit == 1)
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
								<img src="{{asset("img/$profile_pic" )}}" alt="" width="50px" height="50px">
							</div>
							<h5>{{$user->name}}</h5>
								@endif
								@endforeach	
							<h6>~~Beyond God~~</h6>
							<fieldset class="rating">
								<input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
								<input type="radio" id="star4half" name="rating" value="4 and a half" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
								<input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
								<input type="radio" id="star3half" name="rating" value="3 and a half" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
								<input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
								<input type="radio" id="star2half" name="rating" value="2 and a half" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
								<input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
								<input type="radio" id="star1half" name="rating" value="1 and a half" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
								<input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
								<input type="radio" id="starhalf" name="rating" value="half" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
							</fieldset>
						</div>
					</div>
				</div>
				<div id="content3">
					<p>{{$que->question}}</p>

					<div id="timedate">
						<p><i class="fa fa-clock-o"></i>    14:38    <i class="fa fa-calendar"></i>    27/4/18</p>
					</div>

				</div>
				<h4 class="white"><i class="fa fa-lightbulb-o"></i>   Top Rated Answer</h4>
				@foreach($a as $ans)		
				@if($ans->q_id == $que->q_id)
				<div id="username">
					<div class="row">
						<div id="profilephoto"></div>
						<div id="column">
							<h5>Soe Htet San</h5>
							<h6>~~Beyond God~~</h6>
						</div>
					</div>
				</div>
				<div id="content6">
					<p>{{$ans->answer}}</p>
						<!-- <button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
							<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-down"></i></button> -->
							<div id="timedate">
								<p><i class="fa fa-clock-o"></i>    14:38    <i class="fa fa-calendar"></i>    27/4/18</p>
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