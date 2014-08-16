@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title"><span class="glyphicon glyphicon-road"></span> Add Transit Line</h3>
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
		    {{ Form::model($transit, ['method'=>'PATCH', 'route' => ['admin.transit.update', $transit->id]]) }}
		    <div class='form-group'>
		        {{ Form::label('name', 'Transit Line Name') }}
		        {{ Form::text('name', null, ['placeholder' => 'e.g., "People Mover" or "M-1 Rail"', 'class' => 'form-control']) }}
		    </div>
		    <div class='form-group'>
		        {{ Form::submit('Update Transit Line', ['class' => 'btn btn-primary']) }}
		    </div>
		    {{ Form::close() }}
		    <!-- End Right Side Panel !-->
			</div>
	</div> <!-- Panel wrapper !-->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop