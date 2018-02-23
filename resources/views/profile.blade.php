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
					<h1><i class="fa fa-question-circle"></i>    My QnA</h1>
				</div>
				<div id="box">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<p>I want to know how to attach icons to buttons in bootstrap</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>


					</div>
					<div id="content2">
						<p>Go google, Lol!</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>
					</div>
					<div class="form-group">
						<textarea class="form-control answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>
						<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
					</div>
					<div id="nyan_sin2">
						<br>
					</div>

				</div>
				<div id="box">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<p>I want to know how to attach icons to buttons in bootstrap</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>


					</div>
					<div id="content2">
						<p>Go google, Lol!</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>
					</div>
					<div class="form-group">
						<textarea class="form-control answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>
						<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
					</div>
					<div id="nyan_sin2">
						<br>
					</div>

				</div>
				<div id="secondheader_profile">
					<br>
					<h1><i class="fa fa-heart"></i>    Favourite QnA</h1>
				</div>
				<div id="box">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<p>I want to know how to attach icons to buttons in bootstrap</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>


					</div>
					<div id="content2">
						<p>Go google, Lol!</p>
						<button class="btn btn-success btn-sm"><i class="fa fa-thumbs-up"></i> Upvote</button>
						<button class="btn btn-danger btn-sm"><i class="fa fa-thumbs-down"></i> Downvote</button>
					</div>
					<div class="form-group">
						<textarea class="form-control answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>
						<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
					</div>
					<div id="nyan_sin2">
						<br>
					</div>

				</div>
			</div>
		</div>
		<div class="col-md-3 col-sm-off">
				<div class="box_2">
					<div id="nyan_sin1">
						<br>
					</div>
					<div id="content1">
						<h2>May kyi!!</h2>

						<div class="form-group">
							<textarea class="form-control answer" rows="5" id="comment" placeholder="Your Answer"> </textarea>
							<button class="btn btn-secondary btn-sm submit-button"><i class="fa fa-upload"></i> Submit</button>
						</div>
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
									<th scope="row">Upvote</th>
									<td>-</td>
									<td>236</td>
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