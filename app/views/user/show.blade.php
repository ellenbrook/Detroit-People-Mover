@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
	    <div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title">{{ $user->username }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                	<h1 class="profile-icon"><span class="glyphicon glyphicon-user"></span></h1>
                </div>
               <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <th>Role:</th>
                        <td>
                        	DPM 
					  		@foreach($user->roles as $role)
				                {{  Str::title($role->name) }}
				            @endforeach
                        </td>
                      </tr>
                      <tr>
                        <th>Profile Created:</th>
                        <td>{{ $user->created_at }}</td>
                      </tr>
                      <tr>
                        <th>Profile Updated</th>
                        <td>{{ $user->updated_at }}</td>
                      </tr>
                      <tr>
                        <th>Business</th>
                        <td>{{ $user->business_name }}</td>
                      </tr>
                      <tr>
                        <th>Email</th>
                        <td><a href="mailto:{{ $user->email }}">{{ $user->email }}</a></td>
                      </tr>
                      <tr>
                        <th>Phone Number</th>
                        <td>{{ $user->area_code }}-{{ $user->phone_number }}</td>   
                      </tr>
                     <tr>
                     	<th></th>
                     	<td>
                		@include('admin.layout.partials.userbuttons')
                     	</td>
                     </tr>
                    </tbody>
                  </table>
            </div> 	
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop