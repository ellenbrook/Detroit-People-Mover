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
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Transit Type Administration</h3>
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
		                    <th class="col-sm-4">Transit Line Type</th>
		                    <th class="col-sm-4">Lines</th>
		                    <th class="col-sm-4">Options</th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                @foreach ($transits as $transit)
		                <tr>
		                    <td>{{ link_to("admin/transit/{$transit->id}", $transit->name) }}</td>
		                    <td>
		                    	Thing
		                    </td>
		                    <td>
		                    	@include('admin.layout.partials.transitbuttons')
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        {{ link_to_route('admin.transit.create', 'Add Transit Line', null, ['class' => 'btn btn-success']) }}
		        <!-- End Right Side Panel !-->
		</div>
		</div> <!-- end panel wrapper -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop