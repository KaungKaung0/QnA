@extends('layouts.main')
@section('main')
@if($found ==1)
@foreach($question as $q)
	<h3>{{$q->question}}</h3>
	
@endforeach
@else
<h3>Not FOund</h3>
@endif
@endsection