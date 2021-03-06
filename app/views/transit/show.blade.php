@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
	    <div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title">{{ $transit->name }}</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center">
                	<h1 class="profile-icon"><span class="glyphicon glyphicon-road"></span></h1>
                </div>
               <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <th>Transit Line Created:</th>
                        <td>{{ $transit->created_at }}</td>
                      </tr>
                      <tr>
                        <th>Transit Line Updated</th>
                        <td>{{ $transit->updated_at }}</td>
                      </tr>
                      <tr>
                        <th>Lines</th>
                        <td>
                          {{ $transitLineNames }}
                        </td>
                      </tr>
                     <tr>
                     	<th></th>
                     	<td>
                		@include('admin.layout.partials.transitbuttons')
                     	</td>
                     </tr>
                    </tbody>
                  </table>
            </div> 	
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop