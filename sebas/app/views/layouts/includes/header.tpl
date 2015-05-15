<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><img src="http://blog.adstage.io/wp-content/uploads/2014/07/facebook-logo.png" height="40" width="130"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div  class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" data-provide="typeahead" data-source='[{$friends}]' class="form-control" placeholder="Search Persons & Places">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></a></li>
        <li>
            <a href="{url('profile')}" >
                <img width='30' height="30" src="{url('/assets/img/profile')}/{Auth::user()->id}.jpg">
            </a>
        </li>
        <li>
            <a>{Auth::user()->nombre}</a>
        </li>
        <li>
            <a href="#"><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></a>
        </li>
        <li>
            <a href="#"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Settings<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="{url('profile/logout')}">                    
                    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>Salir</a>
            </li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>