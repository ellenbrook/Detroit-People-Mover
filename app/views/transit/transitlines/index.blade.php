@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<!-- Begin right side panel !-->
      	<div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Transit Line Administration</h3>
            </div>
        <div class="panel-body">
					<!-- Display success alert if posted -->
	      			@if(Session::get('flash_message'))
						<div class="alert alert-success" role="alert">
							{{ Session::get('flash_message') }}
						</div>
					@endif
					<!-- End success display -->
			    <div class="table-responsive">
		        <table class="table table-bordered table-striped">
		            <thead>
		                <tr>
		                    <th class="col-sm-4">Transit Line</th>
		                    <th class="col-sm-4">Stops</th>
		                    <th class="col-sm-4">Options</th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                @foreach ($transitlines as $transitline)
		                <tr>
		                    <td>{{ link_to("admin/transitline/{$transitline->id}", $transitline->name) }}</td>
		                    <td>
		                    	NUMBER
		                    </td>
		                    <td>
		                    	@include('admin.layout.partials.transitlinebuttons')
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        <div class="add-form">
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
				</div>

		        <a href="#" class="btn btn-success show-add-form">Add Transit Line</a>
		        <a href="#" class="btn pull-right hide-add-form">hide</a>
		        <!-- End Right Side Panel !-->
		</div>
		</div> <!-- end panel wrapper -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop