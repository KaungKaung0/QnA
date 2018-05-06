@extends ('layouts.main')

@section('main')
<!-- <form action="{{route('main.store')}}" method="POST">
	{{csrf_field()}}
	<textarea name="gg" id="summernote" cols="80" rows="10"></textarea>
	<button type="submit" class="btn btn-secondary">Submit</button>
</form> -->
<div id="container">
	<div id="box">
		<div id="nyan_sin1">
			<br>
		</div>
		<div id="content1">
			<div id="t_editor">
				<form action="{{route('main.store')}}" method="POST">
					{{csrf_field()}}
					<textarea name="gg" id="summernote" cols="80" rows="80"></textarea>
					<button type="submit" class="btn btn-secondary">Submit</button>
				</form>	
			</div>
		</div>
		<div id="nyan_sin2">
			<br>
		</div>
	</div>

	@endsection