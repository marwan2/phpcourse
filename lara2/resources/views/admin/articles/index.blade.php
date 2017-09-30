@extends('admin.layouts.master')

@section('content')
	
	<a href="{{url('admin/articles/create')}}">Create new article</a>
	<ul>
	@foreach($articles as $article)
		<li>{{$article->title}}
			<br>Category: {{$article->category->title or 'not found'}}
		</li>
	@endforeach
	</ul>


@endsection