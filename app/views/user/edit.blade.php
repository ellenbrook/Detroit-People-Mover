@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Edit User {{ $user->username }}</h3>
            </div>
        <div class="panel-body">
	      	<!-- Begin right side panel !-->
		      	<!-- Success and error checking -->
				    @if ($errors->has())
				        @foreach ($errors->all() as $error)
				            <div class='bg-danger alert'>{{ $error }}</div>
				        @endforeach
				    @endif
				<!-- End checking -->
		    {{ Form::model($user, ['method'=>'PATCH', 'route' => ['admin.user.update', $user->id]]) }}
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
		    <div class="col-md-3">
			    <div class='form-group'>
			        {{ Form::label('area_code', 'Area Code') }}
			        {{ Form::text('area_code', null, ['placeholder' => 'Area Code', 'class' => 'form-control']) }}
			    </div>
			</div>
		    <div class="col-md-9">
			    <div class='form-group'>
			        {{ Form::label('phone_number', 'Phone Number') }}
			        {{ Form::text('phone_number', null, ['placeholder' => 'Phone Number', 'class' => 'form-control']) }}
			    </div>
			</div>
		    <div class='form-group'>
		        {{ Form::label('business_name', 'Business Name') }}
		        {{ Form::text('business_name', null, ['placeholder' => 'Business Name', 'class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::label('password', 'Password') }}
		        {{ Form::password('password',  ['placeholder' => 'Password', 'class' => 'form-control']) }}
		    </div>
		   	<div class='form-group'>
		        {{ Form::label('password_confirmation', 'Password Confirm') }}
		        {{ Form::password('password_confirmation',  ['placeholder' => 'Password Confirm', 'class' => 'form-control']) }}
		    </div>
		     <div class='form-group'>
		        {{ Form::submit('Save Changes', ['class' => 'btn btn-primary']) }}
		    </div>
		    {{ Form::close() }}
		    <!-- End Right Side Panel !-->
			</div>
		</div> <!-- panel wrapper !-->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop