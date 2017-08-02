@extends('main')

@section('title', '|HomePage')

@section('content')

	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-info">
				 <div class="panel-heading">
				 	<h1>Welcome to my Blog</h1>
				 </div>
				 <div class="panel-body">
					 <p class="lead">Thank you for visiting in my page wish you like it. This blog is build in with laravel framework in php. Please read my popular post. :)</p>
					<p><a class="btn btn-info btn-lg pull pull-right" href="{{route('posts.index')}}" role="button">List Post</a></p>
				 </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			
			@foreach($posts as $post)
				
			<div class="post">
				<h1>{{$post->title}}</h1>
				<hr>
				<h3>{{$post->name}}</h3>
				<p>{{substr($post->body, 0, 200)}}{{strlen($post->body) > 50 ? "..." : ""}}</p>
				{{Html::linkRoute('posts.show', 'Read More', [$post->id], ['class' => 'btn btn-info'])}}
			</div>

			<hr>	

			@endforeach

		</div>

		<div class="col-md-3 col-md-offset-1">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h4>SideBar</h4>
				</div>
				<div class="panel-body">
					<p>This is the article for SideBar</p>
				</div>
			</div>
		</div>
	</div>

@endsection