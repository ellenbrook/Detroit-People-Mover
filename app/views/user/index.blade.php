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
              <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> User Administration</h3>
            </div>
        <div class="panel-body">
			    <div class="table-responsive">
		        <table class="table table-bordered table-striped">
		            <thead>
		                <tr>
		                    <th class="col-sm-2">Name</th>
		                    <th class="col-sm-3">Email</th>
		                    <th class="col-sm-3">Date/Time Added</th>
		                    <th class="col-sm-1">Role</th>
		                    <th class="col-sm-3">Options</th>
		                </tr>
		            </thead>
		 
		            <tbody>
		                @foreach ($users as $user)
		                <tr>
		                    <td>{{ link_to("admin/user/{$user->id}", $user->username) }}</td>
		                    <td>{{ $user->email }}</td>
		                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
		                    <td>
		                    	@foreach($user->roles as $role)
		                    	{{ $role->name }}
		                    	@endforeach
		                    </td>
		                    <td>
		                    @include('admin.layout.partials.userbuttons')
		                    </td>
		                </tr>
		                @endforeach
		            </tbody>
		        </table>
		        {{ link_to_route('admin.user.create', 'Add User', null, ['class' => 'btn btn-success']) }}
		        <!-- End Right Side Panel !-->
		</div>
		</div> <!-- end panel wrapper -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop