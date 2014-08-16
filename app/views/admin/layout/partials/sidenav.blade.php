<div class="list-group">
  <span class="nav-header active">
    Transit Options
  </span>
  {{ HTML::linkAction('TransitController@create', 'Add Transit Line', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('TransitController@index', 'All Transit Lines', '' , array('class' => 'list-group-item')) }}
</div>
<div class="list-group">
  <span class="nav-header active">
    Transit Stop Options
  </span>
  {{ HTML::linkAction('TransitStopsController@create', 'Add Transit Stop', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('TransitStopsController@index', 'All Transit Stops', '' , array('class' => 'list-group-item')) }}
</div>

<div class="list-group">
  <span class="nav-header active">
    Attraction Options
  </span>
  <a href="#" class="list-group-item">Add Attraction</a>
  <a href="#" class="list-group-item">All Attractions</a>
  <a href="#" class="list-group-item">Add Tags</a>
  <a href="#" class="list-group-item">All Tags</a>
</div>

<div class="list-group">
  <span class="nav-header active">
    User Options
  </span>
  {{ HTML::linkAction('UserController@create', 'Add User', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('UserController@update', 'Edit User', '' , array('class' => 'list-group-item')) }}
</div>