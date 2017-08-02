@extends('main')

@section('title', '| Create Post')

@section('content')
		
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3>Create Post</h3>
				</div>
			</div>
			<div class="panel-body">
				{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '']) !!}
				    {{ Form::label('title', 'Title:') }}
				    {{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				    {{ Form::label('name', 'Name:') }}
				    {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'minlength' => '5')) }}

				    {{ Form::label('body', 'Message:') }}
				    {{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				    {{ Form::submit('Create ', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 10px')) }}
				{!! Form::close() !!}	
			</div>
		</div>
	</div>
		
@section('scripts')

@endsection