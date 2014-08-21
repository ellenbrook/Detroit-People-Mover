@extends('admin.layout.base')

@section('content')
 <div class="row">
      <div class="col-md-3">
		@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
	    <div class="panel panel-info">
            <div class="nav-header">
              <h3 class="panel-title">{{ $attraction->name }}</h3>
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
                        <td>{{ $attraction->created_at }}</td>
                      </tr>
                      <tr>
                        <th>Transit Line Updated</th>
                        <td>{{ $attraction->updated_at }}</td>
                      </tr>
                      <tr>
                        <th>Belongs to</th>
                        <td>
                          {{ $attraction->transitStop->first()->transitLine->first()->name }} 
                          /
                          {{ $attraction->transitStop->first()->name }}
                        </td>
                      </tr>
                     <tr>
                     	<th></th>
                     	<td>
                		    @include('admin.layout.partials.attractionbuttons')
                     	</td>
                     </tr>
                    </tbody>
                  </table>
            </div> 	
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop