<header>
  <nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar navbar-clasic lineHeader row">
      <a class="navbar-brand col-md-4" href="{{ route('home') }}">Posting</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    <!-- Collect the nav links, forms, and other content for toggling -->
    @guest
      <div class="lineHeader col-md-4 col-md-offset-4 links"> <!-- /.navbar-collapse -->

          <a role="presentation"  href="{{   route('login') }}">{{ __('Login') }}
          </a>

          <a role="presentation" href="{{ route('register') }}">{{ __('Register') }}</a>

    </div>

    @else
      <div class="collapse navbar-collapse col-md-4 col-md-offset-4" id="bs-example-navbar-collapse-1"> <!-- /.navbar-collapse -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="float-rihgt nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mi Perfil</a>
          <a class="dropdown-item" href="#">Ver posts</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="{{ url('/logout') }}"
            onclick="event.preventDefault();
             document.getElementById('logout-form').submit();">
              Cerrar sesión
          </a>
          <form id="logout-form" action="{{ url('/logout')
          }}"
          method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </div>
      </li>
    </ul>
    @endguest
    </div>
  </div><!-- /.container-fluid -->
</nav>
</header>
