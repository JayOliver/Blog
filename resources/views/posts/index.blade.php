@extends('main')

@section('title', '| All Posts')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Posts</h1>
		</div>
	
		<div class="col-md-2">
			<a href="{{ route('posts.create') }}" class="btn btn-success btn-lg btn-block btn-h1-spacing">Create Post</a>
		</div>
		<div class="col-md-12">
			<hr>
		</div>
	</div>

	<div class="col-md-12">
		<table class="table">
			<thead>
				<th>#</th>
				<th>Title</th>
				<th>Name</th>
				<th>Body</th>
				<th>Created At</th>
				<th>Action</th>
			</thead>

			<tbody>
				
				@foreach($posts as $post)

				<tr>
					<th>{{ $post->id }}</th>
					<td>{{ substr($post->title, 0, 50) }}{{ strlen($post->title) > 50 ?".." : "" }}</td>
					<td>{{ $post->name }}</td>
					<td>{{ substr($post->body, 0, 50) }}{{ strlen($post->body) > 50 ? "..." : "" }}</td>
					<td>{{ date('M j, Y', strtotime($post->created_at)) }}</td>
					<td> 
					{{Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])}}
						<a href="{{ route('posts.show', $post->id) }}" class="btn btn-default btn-sm btn-info">View</a> <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-default btn-sm btn-success">Edit</a> 	{{Form::submit('Delete', ['class' => 'btn btn-danger btn-sm'])}}
					{{Form::close()}}
					</td>
				</tr>

				@endforeach

			</tbody>
		</table>

		<div class="text-center">
			{{$posts->links()}}
		</div>
	</div>

	


@endsection