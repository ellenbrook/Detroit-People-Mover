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
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Attraction Administration</h3>
            </div>
        <div class="panel-body">
			    <div class="table-responsive">
		        <table class="table table-bordered table-striped">
		            <thead>
		                <tr>
		                    <th class="col-sm-2">Name</th>
		                    <th class="col-sm-4">Closest Stop</th>
		                    <th class="col-sm-3">Tags</th>
		                    <th class="col-sm-3">Options</th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                 @foreach ($attractions as $attraction)
		                <tr>
		                    <td>{{ link_to("admin/attraction/{$attraction->id}", $attraction->name) }}</td>
		                    <td>
		                    	{{ $attraction->transitStop->first()->transitLine->first()->name }} 
		                    	/
		                    	{{ $attraction->transitStop->first()->name }}
		                    </td>
		                    <td>
		                    	Tags
		                   	</td>
		                    <td>
		                    	@include('admin.layout.partials.attractionbuttons')
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        <div class="add-form">
				    {{ Form::open(['role' => 'form', 'route' => 'admin.attraction.store']) }}
				    <div class="form-group">
				    	{{ Form::label('transitStop', 'Closest stop') }}
				    	{{ Form::select('transitStop',['Name' => "place"],'name', ['class' => 'form-control']) }}
				   	</div>
				    <div class='form-group'>
				        {{ Form::label('name', 'Name of Attraction') }}
				        {{ Form::text('name', null, ['placeholder' => 'e.g., "Comerica Park" or "Anchor Bar"', 'class' => 'form-control']) }}
				    </div>
				    <div class='form-group'>
				        {{ Form::submit('Add Attraction', ['class' => 'btn btn-primary']) }}
				    </div>
				    {{ Form::close() }}
				</div>

		        <a href="#" class="btn btn-success show-add-form">Add Attraction</a>
		        <a href="#" class="btn pull-right hide-add-form">hide</a>
		        <!-- End Right Side Panel !-->
		</div>
		</div> <!-- end panel wrapper -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop