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
      	<!-- Begin right side panel !-->	 
		    {{ Form::open(['role' => 'form', 'route' => 'admin.transitline.store']) }}
		    <div class='form-group'>
		        {{ Form::label('transit_id', 'Type of Transit Line') }}
		        {{ Form::select('transit_id', $types, '', ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::label('name', 'Transit Line Name') }}
		        {{ Form::text('name', null, ['placeholder' => 'e.g., "People Mover" or "M-1 Rail"', 'class' => 'form-control']) }}
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