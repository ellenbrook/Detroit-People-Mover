<div class="list-group">
  <span class="nav-header active">
    Transit Options
  </span>
  {{ HTML::linkAction('TransitController@create', 'Add Transit Line', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('TransitController@index', 'All Transit Lines', '' , array('class' => 'list-group-item')) }}
  <a href="#" class="list-group-item">Add Listing</a>
  <a href="#" class="list-group-item">Edit Listing</a>
  <a href="#" class="list-group-item">Show All Listings</a>
  <a href="#" class="list-group-item">Add Category</a>
  <a href="#" class="list-group-item">Edit Category</a>
  <a href="#" class="list-group-item">Show All Categories</a>
</div>

<div class="list-group">
  <span class="nav-header active">
    User Options
  </span>
  {{ HTML::linkAction('UserController@create', 'Add User', '' , array('class' => 'list-group-item')) }}
  {{ HTML::linkAction('UserController@update', 'Edit User', '' , array('class' => 'list-group-item')) }}
</div>