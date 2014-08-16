<div class="list-group">
  <span class="nav-header active">
    Transit Options
  </span>
  {{ HTML::linkAction('TransitController@index', 'Types', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('TransitLineController@index', 'Lines', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('TransitStopsController@index', 'Stops', '' , array('class' => 'list-group-item')) }}
</div>

<div class="list-group">
  <span class="nav-header active">
    Attraction Options
  </span>
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