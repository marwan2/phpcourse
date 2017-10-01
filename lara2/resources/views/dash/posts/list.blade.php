<table class="table table-striped table-hover post_table">
	<thead>
		<tr>
			<th>Name</th><th>Email</th>
			<th>Mobile</th>
		</tr>
	</thead>
	<tbody>
		@foreach($posts as $post)
			@include('dash.posts.snippet', ['post'=>$post])
		@endforeach
	</tbody>
</table>