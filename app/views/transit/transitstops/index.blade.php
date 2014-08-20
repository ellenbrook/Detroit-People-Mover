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
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Transit Stops Administration</h3>
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
		                    <th class="col-sm-3">Transit Stop</th>
		                    <th class="col-sm-1">Attractions</th>
		                    <th class="col-sm-3">Belongs to</th>
		                    <th class="col-sm-4">Options</th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                @foreach ($transitstops as $transitstop)
		                <tr>
		                    <td>
		                    	{{ link_to("admin/transitstop/{$transitstop->id}", $transitstop->name) }}
		                    <td>
		                    	{{ $transitstop->attraction->count() }}
		                    </td>
		                     <td>
		                     	{{ $transitstop->transitLine->first()->name }}
		                     </td>
		                    <td>
		                    	@include('admin.layout.partials.transitstopbuttons')
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        <div class="add-form">
				{{ Form::open(['role' => 'form', 'route' => 'admin.transitstop.store']) }}
				    <div class='form-group'>
				        {{ Form::label('line_id', 'Stop for line') }}
				         {{ Form::select('line_id', $typesOfTransitLines, $transitstop->transitLine->first()->name, ['class' => 'form-control']) }}
				    </div>
				    <div class='form-group'>
				        {{ Form::label('name', 'Stop Name') }}
				        {{ Form::text('name', null, ['placeholder' => 'e.g., "Fort / Cass" or "Grand Circus Park"', 'class' => 'form-control']) }}
				        {{ $errors->first('name') }}
				    </div>
				    <div class='form-group'>
				        {{ Form::submit('Add Transit Stop', ['class' => 'btn btn-primary']) }}
				    </div>
				{{ Form::close() }}
				</div>

		        <a href="#" class="btn btn-success show-add-form">Add Transit Stop</a>
		        <a href="#" class="btn pull-right hide-add-form">hide</a>
		        <!-- End Right Side Panel !-->
		</div>
		</div> <!-- end panel wrapper -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop