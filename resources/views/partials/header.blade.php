<header>
<nav class="navbar navbar-clasic">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home">Posting</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1"> <!-- /.navbar-collapse -->
    @guest
      <ul class="nav nav-pills pull-right">
        <li role="presentation"> <a class="nav" href="{{ route('login') }}">{{ __('Login') }}</a> </li>
        <li role="presentation"> <a class="nav" href="{{ route('register') }}">{{ __('Register') }}</a> </li>
      </ul>
    @else
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">{{ Auth::user()->name }} <span class="caret"></span></a>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
          <li><a href="#">Mi Perfil</a></li>
          <li><a href="#">Ver Posts</a></li>
          <li role="separator" class="divider"></li>
          <li><a href="#">Cerrar sesión</a></li>
        </ul>
      </li>
    </ul>
    @endguest
    </div>
  </div><!-- /.container-fluid -->
</nav>
</header>
