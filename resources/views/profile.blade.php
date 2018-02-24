@extends('layouts.main')

@section('main')
<div class="container">
	<div id="header_profile">
		<br>
		<h1><i class="fa fa-user"></i>    My Profile</h1>
	</div>
	<div class="row">
		<div class="col-md-9 col-sm-9">
			<div class="col-md-12">
				<div id="box">
					<div id="nyan_sin1">
						<br>
					</div>

					<div id="content1">
						<table class="table">
							<tbody>
								<tr>
									<th scope="row">Name</th>
									<td>-</td>
									<td>Paing Hein Htet</td>
								</tr>
								<tr>
									<th scope="row">Major</th>
									<td>-</td>
									<td></td>
								</tr>
								<tr>
									<th scope="row">Portfolio</th>
									<td>-</td>
									<td>I am studying Computer Science at University of Yangon. I am single.</td>
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
				<div id="box">
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

							<button  class="btn btn-secondary btn-sm"><i class="fa fa-thumbs-up"></i></button>
							<button  class="btn btn-dark btn-sm"><i class="fa fa-thumbs-down"></i></button>
					</div>
						@endif
						@endforeach
					<form class="form-group" method="post" action="{{route('answers.store')}}">
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
		<div class="box_2">
			<div id="nyan_sin1">
				<br>
			</div>
			<div id="content1">
				<h2>May kyi!!</h2>

				<form method="post" action="{{route('questions.store')}}">
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
							<th scope="row">Your Kudo</th>
							<td>-</td>
							<td>{{$point}}</td>
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
</div>	
@endsection