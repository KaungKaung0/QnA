@extends('layouts.main')

@section('main')
<div class="container">
	<div class="row">

		<div class="col-md-9 col-sm-9">
			@foreach($q as $que)
			<div class="col-md-12">

				
				<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">

					<div id="nyan_sin1">
						<br>
					</div>
					<h4 class="white"><i class="fa fa-question-circle"></i>   Question</h4>
					<div id="username">
						<div class="row">
							<div id="profilephoto"></div>
							<div id="column">
								<h5>Paing Hein Htet</h5>
								<h6>~~Beyond God~~</h6>
								<form action="{{route('qrate' , ['q_id' => $que->q_id])}}" method="POST">
									{{csrf_field()}}
									
									<fieldset class="rating">
										<label class="container1">
											<input  type="radio" name="rating" value="1" >
											<span <i  id="star001" class="checkmark fa fa-star change-star-color"></i></span>
										</label>

										<label class="container1">
											<input  type="radio" name="rating" value="2">
											<span <i  id="star002" class="checkmark fa fa-star change-star-color"></i></span>
										</label>

										<label class="container1">
											<input type="radio" name="rating" value="3">
											<span <i id="star003" class="checkmark fa fa-star change-star-color"></i></span>
										</label>

										<label class="container1">
											<input type="radio" name="rating" value="4">
											<span <i id="star004" class="checkmark fa fa-star change-star-color"></i></span>
										</label>

										<label class="container1">
											<input type="radio" name="rating" value="5">
											<span <i id="star005" class="checkmark fa fa-star change-star-color"></i></span>
										</label>
									</fieldset>
									<button type="submit"  id="rtsub">submit</button>
								</form>
							</div>
						</div>
					</div>
					<div id="content3">
						<p>{{$que->question}}</p>

						<div id="timedate">
							<p><i class="fa fa-clock-o"></i>    14:38    <i class="fa fa-calendar"></i>    27/4/18</p>
						</div>

					</div>
					{{-- <form action="{{route('answers.store' , ['place' => 'view'])}}" method="post">
					{{csrf_field()}}
					<div class="form-group">
						<textarea class="form-control answer" name="answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>

						<input type="hidden" name="q_id" value="{{$que->q_id}}">
						<button type="submit" class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
					</div>
				</form> --}}
				<a href="{{route('t_view')}}" class="btn btn-secondary btn-sm submit-butto">Join n Answer</a>
				<div id="nyan_sin2">
					<br>
				</div>

			</div>
			
			<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
				<div id="nyan_sin1">
					<br>
				</div>
				<h4 class="white"><i class="fa fa-lightbulb-o"></i>   Answers</h4>		
				
				<div id="content1">
					<table class="table table">
						<tbody>
							@foreach($a as $ans)
							<tr>
								@if($ans->q_id == $que->q_id)
								<td>
									
									<div id="username_table">
										<div class="row">
											<div id="profilephoto"></div>
											<div id="column">
												<h5>Soe Htet San</h5>
												<h6>~~Beyond God~~</h6>
											</div>
										</div>
									</div>
									{{$ans->answer}} <br>
									<iframe name="question" style="display: none;"></iframe>
									<form action="{{route('ansrate')}}" method="POST" target="question	">
										{{csrf_field()}}
										<input type="hidden" name="id" value="{{$ans->id}}">
										<button type="submit" class="btn btn-secondary btn-sm" name="up_vote" value="1"><i class="fa fa-thumbs-up"></i></button>
										<button type="submit" class="btn btn-secondary btn-sm" name="down_vote" value="1"><i class="fa fa-thumbs-down"></i></button>
									</form>
									<p>{{$ans->up_vote}}</p>
									<div id="timedate">
										<p><i class="fa fa-calendar"></i>{{$ans->created_at}}</p>
									</div>
								</td>
								@endif
							</tr>
							@endforeach
						</tbody>

					</table>

				</div>

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

				<form action="{{route('questions.store' , ['place' => 'view'])}}" method="post">
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
@endsection