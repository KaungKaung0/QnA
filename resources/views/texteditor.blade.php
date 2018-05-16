@extends ('layouts.main')

@section('main')

<div id="container">
	<div id="box">
		<div id="nyan_sin1">
			<br>
		</div>
		<div id="content1">
			<div id="t_editor">
				@if($try == "question")
				<form action="{{route('questions.store')}}" method="POST">
					{{csrf_field()}}
					
					<textarea name="question" id="summernote" cols="80" rows="80"></textarea>
					<button type="submit" class="btn btn-secondary">Submit</button>
				</form>	
				@else
				<form action="{{route('answers.store' , ['q_id' => $q_id , 'place' =>"view"])}}" method="POST">
					
					{{csrf_field()}}
					<textarea name="answer" id="summernote" cols="80" rows="80"></textarea>
					<button type="submit" class="btn btn-secondary">Submit</button>
				</form>	
				@endif
				
			</div>
		</div>
		<div id="nyan_sin2">
			<br>
		</div>
	</div>

	@endsection