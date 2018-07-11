<header>
  <nav class="navbar navbar-expand navbar-light">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar navbar-clasic lineHeader">
      <a class="navbar-brand" href="{{ route('home') }}">Posting</a>


    <!-- Collect the nav links, forms, and other content for toggling -->
    @guest
      <div class="lineHeader navbar-brand"> <!-- /.navbar-collapse -->

          <a role="presentation"  href="{{   route('login') }}">{{ __('Login') }}
          </a>

          <a role="presentation" href="{{ route('register') }}">{{ __('Register') }}</a>

    </div>

    @else
      <div class="navbar-brand" id="bs-example-navbar-collapse-1"> <!-- /.navbar-collapse -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="float-rihgt nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          {{ Auth::user()->name }}
        </a>
        <div class="dropdown-menu"  aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Mi Perfil</a>
          <a class="dropdown-item" href="/posteos">Ver posts</a>
          <a class="dropdown-item" href="/front/relations">Contactos</a>
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
