@extends('admin.layouts.master')

@section('content')
	
	<form action="{{route('admin.articles.store')}}" method="post">
		{!!csrf_field()!!}
		<div class="input-group">
			<input type="text" name="title" class="form-control">
		</div>

		<button type="submit">Create</button>
	</form>
@endsection