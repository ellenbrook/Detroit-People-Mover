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
	    <h1><span class="glyphicon glyphicon-user"></span> Add User</h1>
	 
	    {{ Form::open(['role' => 'form', 'route' => 'user.store']) }}
	    <div class='form-group'>
	        {{ Form::label('username', 'First Name') }}
	        {{ Form::text('username', null, ['placeholder' => 'First Name', 'class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('email', 'Email') }}
	        {{ Form::text('email', null, ['placeholder' => 'Last Name', 'class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('role', 'Role') }}
	        {{ Form::select('role', $roles, "member", ['class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::label('password', 'Password') }}
	        {{ Form::text('password', null, ['placeholder' => 'Password', 'class' => 'form-control']) }}
	    </div>
	    <div class='form-group'>
	        {{ Form::submit('Create User', ['class' => 'btn btn-primary']) }}
	    </div>
	    {{ Form::close() }}
	    <!-- End Right Side Panel !-->
		</div>
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop