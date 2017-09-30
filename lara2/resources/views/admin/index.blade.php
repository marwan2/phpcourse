@extends('layouts.app')

@section('content')
	
	<h1>
		Admin page only 
		<br>
		Welcome, {{Auth::user()->name}}
	</h1>
@endsection