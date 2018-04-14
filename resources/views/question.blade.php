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
					<div id="content1">
						<p>{{$que->question}}</p>
					</div>
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
				
				<div id="box" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms">
					<div id="nyan_sin1">
						<br>
					</div>
							
				
					<div id="content1">
						<table class="table table">
							<tbody>
							@foreach($a as $ans)
								<tr>
								@if($ans->q_id == $que->q_id)
									<td>{{$ans->answer}} <br> <button id = "success" class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i> </button>
										<button id="danger" class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-down"></i></button>
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

					<div class="form-group">
						<textarea class="form-control question_id" rows="5" id="comment" placeholder="Your Answer"> </textarea>
						<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
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