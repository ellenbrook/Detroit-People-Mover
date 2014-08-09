@extends('admin.layout.base')

@section('content')
@if(Session::get('flash_message'))
	<div class="alert alert-danger" role="alert">
		{{ Session::get('flash_message') }}
	</div>
@endif
<div class="jumbotron">
{{ Form::open(array('route' => 'sessions.store', 'class' => 'form-horizontal')) }}
<div class="form-group">
	{{ Form::label('email', 'Email:', array('class' => 'control-label')) }}
	{{ Form::text('email', '', array('class'=>'form-control')) }}
</div>
<div class="form-group">
	{{ Form::label('password', 'Password:', array('class' => 'control-label')) }}
	{{ Form::password('password', array('class'=>'form-control')) }}
</div>
<div class="form-group">
	{{ Form::submit('Login', array('class' => 'btn btn-default')) }}
</div>
{{ Form::close() }}
</div>
@stop