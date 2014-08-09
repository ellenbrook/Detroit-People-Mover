@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
      	<!-- Begin right side panel !-->
			<h1><span class="glyphicon glyphicon-user"></span> User Administration</h1>
		    <div class="table-responsive">
	        <table class="table table-bordered table-striped">
	            <thead>
	                <tr>
	                    <th>Name</th>
	                    <th>Email</th>
	                    <th>Date/Time Added</th>
	                    <th>Options</th>
	                </tr>
	            </thead>
	 
	            <tbody>
	                @foreach ($users as $user)
	                <tr>
	                    <td>{{ $user->username }}</td>
	                    <td>{{ $user->email }}</td>
	                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
	                    <td>
	               		<a href="/user/{{ $user->id }}/edit" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
	                   	{{ Form::open(['url' => '/user/' . $user->id, 'method' => 'DELETE']) }}
                        {{ Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {{ Form::close() }}
	                    </td>
	                </tr>
	                @endforeach
	            </tbody>
	        </table>
	        <a href="/user/create" class="btn btn-success">Add User</a>
	        <!-- End Right Side Panel !-->
		</div>
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop