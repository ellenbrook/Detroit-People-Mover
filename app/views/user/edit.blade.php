@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<!-- Begin right side panel !-->
	      	<!-- Success and error checking -->
			    @if ($errors->has())
			        @foreach ($errors->all() as $error)
			            <div class='bg-danger alert'>{{ $error }}</div>
			        @endforeach
			    @endif
			<!-- End checking -->
	    <h1><span class="glyphicon glyphicon-user"></span> Edit User {{ $user->username }} ({{ $currentRole->name}})</h1>
	 
	    {{ Form::model($user, ['method'=>'PATCH', 'route' => ['user.update', $user->id]]) }}
	    <div class='form-group'>
	        {{ Form::label('username', 'First Name') }}
	        {{ Form::text('username', null, ['placeholder' => 'First Name', 'class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('email', 'Email') }}
	        {{ Form::text('email', null , ['placeholder' => 'Last Name', 'class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('role', 'Role') }}
	        {{ Form::select('role', $roles , $currentRole->id , ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::submit('Edit User', ['class' => 'btn btn-primary']) }}
	    </div>
	    {{ Form::close() }}
	    <!-- End Right Side Panel !-->
		</div>
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop