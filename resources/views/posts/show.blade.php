@extends('main')

@section('title', '|List of Post')

@section('content')

@include('partials.message')

	<div class="row">
		<div class="col-md-8">
			<h1>{{ $post->title }}</h1>

			<h3> {{ $post->name }} </h3>

			<p class="lead">{{ $post->body }}</p>
		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Updated At</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				</dl>

				<hr>

				<div class="row">
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.edit', 'Edit', array($post->id), array('class' => 'btn btn-success btn-block'))}}	
					</div>
					<div class="col-sm-6">
						{{Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE'])}}
						{{Form::submit('Delete', ['class' => 'btn btn-danger btn-block'])}}
						{{Form::close()}}
					</div>
					<div class="col-sm-6">
						{{ Html::linkRoute('posts.index', '<< See all Posts', [$post->id], ['class' => 'btn btn-info btn-block btn-index'])}}
					</div>
				</div>
			</div>
		</div>
	</div>
	
@endsection