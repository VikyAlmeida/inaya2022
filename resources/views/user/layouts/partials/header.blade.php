<header class="header" id="jump">
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="../../images/Logo.png" alt="" width="260" /></a> </div>
        <div class="collapse navbar-collapse hidden-xs">
          <a href="https://weather.com/es-ES/tiempo/hoy/l/37.21,-7.40?par=google" style="position:absolute; margin-top:1em;margin-left:10em;">
            <label id="ubicacion"></label> a <label id="temperatura-valor"> </label><img id="icono-animado" src="" alt="" height="128" width="128">
          </a>
          <ul class="nav navbar-nav navbar-right" style="margin-top: 3.4em; display:inline">
              <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/locales')}}">Locales</a></li>
              <li><a href="{{url('/como-llegar')}}">Como llegar</a></li>
              <li><a href="{{url('/eventos')}}">Eventos</a></li>
              @if (Route::has('login'))
                @auth
                  @if(auth()->user()->type == 'customer' && auth()->user()->customer->status == 'accepted')
                    <li>
                      <a type="button"style="cursor:pointer"  data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/customer/misLocales') }}">Mis locales</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                  @elseif(auth()->user()->type == 'admin')
                    <li>
                      <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/home') }}">Zona administracion</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                    @else
                    <li>
                      <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                  @endif
                @else
                    <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                @endauth
              @endif
          </ul>
        </div>
        <div class="collapse navbar-responsive-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{url('/')}}">Home</a></li>
              <li><a href="{{url('/locales')}}">Locales</a></li>
              <li><a href="{{url('/como-llegar')}}">Como llegar</a></li>
              <li><a href="{{url('/eventos')}}">Eventos</a></li>
              @if (Route::has('login'))
                @auth
                  @if(auth()->user()->type == 'customer' && auth()->user()->customer->status == 'accepted')
                    <li>
                      <a type="button"style="cursor:pointer"  data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/customer/misLocales') }}">Mis locales</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                  @elseif(auth()->user()->type == 'admin')
                    <li>
                      <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/home') }}">Zona administracion</a></li>
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                    @else
                    <li>
                      <a type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{auth()->user()->name}}
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ url('profile/editar') }}">Configuracion</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                          <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                              {{ __('Log out') }}
                          </a>

                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>
                        </li>
                      </ul>
                    </li>
                  @endif
                @else
                    <li><a href="{{ route('login') }}">Iniciar sesion</a></li>
                @endauth
              @endif
          </ul>
        </div>
      </div>
    </nav>
  </header>