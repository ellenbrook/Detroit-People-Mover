@extends('admin.layout.base')

@section('content')
    <div class="row">
      <div class="col-md-3">
@include('admin.layout.partials.sidenav')
      </div>
      <div class="col-md-9">
        <div class="row">
          <div class="col-md-6">
            <!-- panel !-->
            <div class="panel panel-default ">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <span class="glyphicon glyphicon-stats"></span> Site Stats</h3>
              </div>
              <div class="panel-body">
                <!-- Stats Panel !-->
                <ul class="list-group">
                  <li class="list-group-item">
                    <span class="badge">14</span>
                    Visitors this month
                  </li>
                  <li class="list-group-item">
                    <span class="badge">10</span>
                    Record users
                  </li>
                  <li class="list-group-item">
                    <span class="badge">2</span>
                    Average time spent on site
                  </li>
                </ul> <!--Stats Panel End!-->
              </div>
            </div>
            <!-- end panel !-->
            <!-- panel !-->
              <div class="panel panel-default .col-xs-6 ">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <span class="glyphicon glyphicon-user"></span> Premium Members</h3>
                </div>
                <div class="panel-body">
                  Currently no premium members.
                </div>
              </div><!-- end panel !-->
          </div> <!-- col-6 one -->
          <div class="col-md-6">
              <!-- panel !-->
              <div class="panel panel-default ">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <span class="glyphicon glyphicon-wrench"></span> Known Issues</h3>
                </div>
                <div class="panel-body">
                  No current issues.
                </div>
              </div> <!-- end panel !-->

              <!-- panel !-->
              <div class="panel panel-default .col-xs-6 ">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <span class="glyphicon glyphicon-usd"></span> Estimated Income</h3>
                </div>
                <div class="panel-body">
                  Estimated income for month: $0.
                </div>
              </div>
              <!-- end panel !-->
          </div> <!-- col-6 two -->
        </div> <!-- Inner Row -->
      </div> <!-- md-9 -->
    </div> <!--Row!-->
@stop