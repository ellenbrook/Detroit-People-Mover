@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Add Transit Line</h3>
            </div>
        <div class="panel-body">		 
		    {{ Form::open(['role' => 'form', 'route' => 'admin.transit.store']) }}
		    <div class='form-group'>
		        {{ Form::label('name', 'Type of Transit Line') }}
		        {{ Form::text('name', null, ['placeholder' => 'e.g., "Monorail" or "High Speed Bus"', 'class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::submit('Add Transit Line', ['class' => 'btn btn-primary']) }}
		    </div>
		    {{ Form::close() }}
		    <!-- End Right Side Panel !-->
			</div>
	</div> <!-- Panel wrapper !-->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop