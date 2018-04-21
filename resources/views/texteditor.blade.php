@extends ('layouts.main')

@section('main')
<form action="{{route('main.store')}}" method="POST">
	{{csrf_field()}}
	<textarea name="gg" id="summernote" cols="80" rows="10"></textarea>
	<button type="submit" class="btn btn-secondary">Submit</button>
</form>

@endsection