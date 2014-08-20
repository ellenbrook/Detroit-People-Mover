@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Edit Transit Stop</h3>
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
		    {{ Form::model($transitStop, ['method'=>'PATCH', 'route' => ['admin.transitstop.update', $transitStop->id]]) }}
		    <div class='form-group'>
		        {{ Form::label('transit_line_id', 'Belongs to') }}
		        {{ Form::select('transit_line_id', $types, $transitStop->transitLine->first()->id, ['class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::label('name', 'Transit Stop Name') }}
		        {{ Form::text('name', null, ['placeholder' => 'e.g., "People Mover" or "M-1 Rail"', 'class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::submit('Save Changes', ['class' => 'btn btn-primary']) }}
		    </div>
		    {{ Form::close() }}
		    <!-- End Right Side Panel !-->
			</div>
	</div> <!-- Panel wrapper !-->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop