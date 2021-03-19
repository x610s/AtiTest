<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand bg-dark rounded px-2 text-white" href="{{route('home')}}">
      Contaduría Page
    </a>
 
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('home')}}">Inicio</a>
        </li>
    
        <li class="nav-item">
          <a class="nav-link" href="/pricing">Pricing</a>
        </li>
        @auth
        
        @if (auth()->user()->isAdmin())
        <li class="nav-item">
          <a class="nav-link" href="{{route('admin.index')}}">Panel administrador</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link" href="#">Panel de control</a>
        </li>
        @endif
        <div class="btn-group">
          <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            {{auth()->user()->name}}
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('usuario.show',auth()->user()->id)}}">Perfil</a>
            <a class="dropdown-item"
               onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                 Cerrar sesión
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
          </div>
        </div>
        @else
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Registrate</a>
        </li>
        @endauth

      </ul>
    </div>
  </nav>