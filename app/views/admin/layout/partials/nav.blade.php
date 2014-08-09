<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">DPM Administrative Panel</a>
    </div>
      <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome Back {{ Auth::user()->username }}<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li>{{ HTML::linkAction('SessionsController@destroy', "Logout") }}</li>
              </ul>
            </li>
      </ul>
  </div>
</nav>