@extends('layouts.main')

@section('main')
<!-- <div class="container">
	<div id="header_profile">
		<br>
		<h1><i class="fa fa-user"></i>    My Profile</h1>
	</div>
	<div class="row wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms"">
		<div class="col-md-9 col-sm-9">
			<div class="col-md-12">

				<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div id="nyan_sin1">
						<br>
					</div>
					
					<div id="content1">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row">Name</th>
									<td>-</td>
									
									<td>{{$user}}</td>
								</tr>
								<tr>
									<th scope="row">Major</th>
									<td>-</td>
									<td></td>
								</tr>
								<tr>
									<th scope="row">Portfolio</th>
									<td>-</td>
									<td></td>
								</tr>
							</tbody>
						</table>
						<button class="btn btn-secondary btn-sm"><i class="fa fa-edit"></i>  Edit Profile</button>	
					</div>
					<div id="nyan_sin2">
						<br>
					</div>
				</div>
				
				<div id="secondheader_profile">
					<br>
					<h1><i class="fa fa-question-circle"></i>    My Questions</h1>
				</div>
				@foreach($q as $que)
				<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<table class="table">
							<tbody>
								<tr>
									<th>Q: {{$que->question}}</th>
									
								</tr>
							</tbody>
						</table>
						
					</div>

					@foreach($a as $ans)

					@if($ans->q_id == $que->q_id)
					<div id="content2">

						<table class="table">
							<tbody>
								<tr scope='row'>
									<th>{{$ans->answer}}</th>
									{{-- <th><button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button></th>
									<th><button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button></th>	 --}}				
								</tr>
							</tbody>
						</table>
						@break
						@endif
						@endforeach

						<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
						<button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button>
					</div>
					<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-secondary btn-sm blah_button">View More</a>
					<form class="form-group" method="post" action="{{route('answers.store' , ['place' => 'profile'])}}">
						{{ csrf_field() }}
						<div class="form-group">
							<textarea class="form-control answer" rows="2"  name="answer" id="comment" placeholder="  Your Answer Here"> </textarea>
							<input type="hidden" name="q_id" value="{{$que->q_id}}">
							<button type="submit" class="btn btn-secondary btn-sm submit-button fa fa-upload">Submit</button>

						</div>
					</form>	
					<div id="nyan_sin2">
						<br>
					</div>
				</div>
				@endforeach
			</div>
		</div>

		<div class="col-md-3 col-sm-off">
			<div class="box_2 wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms"">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<h2>May kyi!!</h2>

					<form method="post" action="{{route('questions.store' , ['place' => 'profile'])}}">
						{{csrf_field()}}
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
			<div class="box_2">
				<div id="nyan_sin1">
					<br>
				</div>
				<div id="content1">
					<h2>Your Status</h2>
					<table class="table">
						<tbody>
							<tr>
								<th scope="row">Your Point</th>
								<td>-</td>
								<td>23</td>
							</tr>

							<tr>
								<th scope="row">Downvote</th>
								<td>-</td>
								<td>34</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div id="nyan_sin2">
					<br>
				</div>
			</div>
		</div>
	</div>	 -->
	<!-- <div class="container">
		<div class="row">
	
			<div class="col-md-12">
				<h1>Creative User Profile <br><small>#User-Interface #User #Profile #jquery #Social #contact #accordion</small></h1>
				Contenedor
				<ul id="accordion" class="accordion">
					<li>
						<div class="col col_4 iamgurdeep-pic">
							<img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="{{("css/Kaung_Min_Khant_Off.jpg")}}">
							<div class="edit-pic">
								<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" class="fa fa-facebook"></a>
								<a href="https://www.instagram.com/gurdeeposahan/" target="_blank" class="fa fa-instagram"></a>
								<a href="https://twitter.com/gurdeeposahan1" target="_blank" class="fa fa-twitter"></a>
								<a href="https://plus.google.com/u/0/105032594920038016998" target="_blank" class="fa fa-google"></a>
	
	
	
							</div>
							<div class="username">
							<h2>{{$user}} <small><i class="fa fa-map-marker"></i> GOD</small></h2>
								<p><i class="fa fa-briefcase"></i> Web Design and Development.</p>
	
								<a href="https://web.facebook.com/iamgurdeeposahan" target="_blank" class="btn-o"> <i class="fa fa-user-plus"></i> Add Friend </a>
								<a href="https://www.instagram.com/gurdeeposahan/" target="_blank"  class="btn-o"> <i class="fa fa-plus"></i> Follow </a>
	
	
								<ul class="nav navbar-nav">
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="fa fa-ellipsis-v pull-right"></span></a>
										<ul class="dropdown-menu pull-right">
											<li><a href="#">Video Call <i class="fa fa-video-camera"></i></a></li>
											<li><a href="#">Poke <i class="fa fa-hand-o-right"></i></a></li>
											<li><a href="#">Report <i class="fa fa-bug"></i></a></li>
											<li><a href="#">Block <i class="fa fa-lock"></i></a></li>
										</ul>
									</li>
								</ul>
	
							</div>
	
						</div>
	
					</li>
					<li>
						<div class="link"><i class="fa fa-globe"></i>About<i class="fa fa-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="#"><i class="fa fa-calendar left-none"></i> Date of Birth : 03/09/1994</a></li>
							<li><a href="#">Address : INDIA,Punjab</a></li>
							<li><a href="mailto:gurdeepjawaddi94@gmail.com">Email : gurdeepjawaddi94@gmail.com</a></li>
							<li><a href="#">Phone : +91 85680-79956</a></li>
						</ul>
					</li>
					<li class="default open">
						<div class="link"><i class="fa fa-code"></i>Professional Skills<i class="fa fa-chevron-down"></i></div>
						<ul class="submenu">
							<li><a href="#"><span class="tags">Adobe Photoshop</span> <span class="tags">Corel Draw</span> <span class="tags">CSS</span> <span class="tags">Css 3</span> 
								<span class="tags">Graphic Design</span> <span class="tags">HTML</span> <span class="tags">HTML5</span> <span class="tags">JavaScript</span> 
								<span class="tags">Twitter bootstrap</span> <span class="tags">bootstrap</span> <span class="tags">User Interface Design</span> <span class="tags">Wordpress</span></li></a>
							</ul>
						</li>
						<li>
							<div class="link"><i class="fa fa-picture-o"></i>Photos <small>1,120</small><i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
								<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
								</a>
								<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
								</a>
								<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
								</a>
								<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
								</a>
	
								<a class="view-all" href="https://web.facebook.com/iamgurdeeposahan" target="_blank" >15+
								</a>
	
							</li>
						</ul>
					</li>
					<li><div class="link"><i class="fa fa-users"></i>Friends <small>1,053</small><i class="fa fa-chevron-down"></i></div>
						<ul class="submenu">
							<li class="photosgurdeep"><a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
							<a href="#"><img class="img-responsive iamgurdeeposahan" alt="iamgurdeeposahan" src="http://webncc.in/img/user/gurdeep-singh-osahan.jpg">                 
							</a>
	
							<a class="view-all" href="https://web.facebook.com/iamgurdeeposahan" target="_blank">50+
							</a>
	
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div> -->
	<div class="container">
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
												<!-- <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a> -->
												<img id='img-upload'/>
												<div id="poof">
													<div class="profile_box">
														
														<table style="height: 225px;">
															<tbody>
																<tr>
																	@if($picexit == 1)
																	<img src="{{asset("img/$profile" )}}" alt="" width="225px" height="225px">
																	@else
																	<form enctype="multipart/form-data"  action="{{route('ppupload')}}" method="POST">
																		{{csrf_field()}}
																		<td class="align-middle"><span class="btn btn-default btn-file" id="change_this">
																			<i class="fa fa-plus-circle" style="font-size:150px;"></i> <input type="file" id="imgInp" name="pp">
																		</span></td>
																		<input type="submit" style="display: none;" name="upload">
																	</form>
																	@endif
																</tr>
															</tbody>
														</table>
													</div>
												</div>
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
					<!-- <div id="secondheader_profile">
						<br>
						<h1><i class="fa fa-question-circle"></i>    My Questions</h1>
					</div>
					@foreach($q as $que)
					<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div id="nyan_sin1">
							<br>
						</div>
						<div id="content1">
							<table class="table">
								<tbody>
									<tr>
										<th>Q: {{$que->question}}</th>
					
									</tr>
								</tbody>
							</table>
					
						</div>
					
						@foreach($a as $ans)
					
						@if($ans->q_id == $que->q_id)
						<div id="content2">
					
							<table class="table">
								<tbody>
									<tr scope='row'>
										<th>{{$ans->answer}}</th>
										{{-- <th><button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button></th>
										<th><button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button></th>	 --}}				
									</tr>
								</tbody>
							</table>
							@break
							@endif
							@endforeach
					
							<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
							<button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button>
						</div>
						<a href="{{route('questions.index' , ['q_id' => $que->q_id])}}" class="btn btn-secondary btn-sm blah_button">View More</a>
						<form class="form-group" method="post" action="{{route('answers.store' , ['place' => 'profile'])}}">
							{{ csrf_field() }}
							<div class="form-group">
								<textarea class="form-control answer" rows="2"  name="answer" id="comment" placeholder="  Your Answer Here"> </textarea>
								<input type="hidden" name="q_id" value="{{$que->q_id}}">
								<button type="submit" class="btn btn-secondary btn-sm submit-button fa fa-upload">Submit</button>
					
							</div>
						</form>	
						<div id="nyan_sin2">
							<br>
						</div>
					</div>
					@endforeach -->
					@foreach($q as $que)

					<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
						<div id="nyan_sin1">
							<br>
						</div>
						<h4 class="white"><i class="fa fa-question-circle"></i>   Question</h4>
						<div id="username">
							<div class="row">
								<div id="profilephoto"></div>
								<div id="column">
									<h5>{{$user}}</h5>
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