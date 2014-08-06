@extends('admin.layout.base')

@section('content')
  <div class="jumbotron">
    <h1>Detroit People Mover</h1>
    <p>Quick information for DetroitPeopleMover.net. Use the navigation at the top for other pages.</p>
    <div class="btn-group btn-group-justified">
      <div class="btn-group">
         <button class="btn btn-primary btn-lg" role="button">View Stats</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-primary btn-lg" role="button">Add/Update Listings</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-primary btn-lg" role="button">View Premium Members</button>
      </div>
    </div>
  </div> <!-- jumbotron !-->

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
                </ul>
                <!--Stats Panel End!-->
                </div>
              </div>
            <!-- end panel !-->
          </div>
          <div class="col-md-6">
               <!-- panel !-->
              <div class="panel panel-default .col-xs-6 ">
                <div class="panel-heading">
                  <h3 class="panel-title">
                    <span class="glyphicon glyphicon-user"></span> Premium Members</h3>
                </div>
                <div class="panel-body">
                  Currently no premium members.
                </div>
              </div>
              <!-- end panel !-->
          </div>

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
              </div>
            <!-- end panel !-->
          </div>
          <div class="col-md-6">
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
          </div>
      </div>
@stop