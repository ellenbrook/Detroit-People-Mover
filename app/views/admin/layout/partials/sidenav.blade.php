<div class="list-group">
  <span class="nav-header active">
    People Mover Options
  </span>
  <a href="#" class="list-group-item">Add Stop</a>
  <a href="#" class="list-group-item">Edit Stop</a>
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

<div class="list-group">
  <span class="nav-header active">
    Premium Listing Options
  </span>
  <a href="#" class="list-group-item">Add Premium Member</a>
  <a href="#" class="list-group-item">Edit Member Status</a>
  <a href="#" class="list-group-item">View All Premium Members</a>
</div>