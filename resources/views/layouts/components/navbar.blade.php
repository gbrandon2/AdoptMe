<div class="main_menu">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <img src="{{asset('imagenes/AdoptMe.png')}}" width="auto" height="38" class="d-inline-block align-top" alt="">
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="true"
            aria-label="Toggle navigation"
            >
            <i class="ti-menu"></i>
            </button>

            <div
            class="collapse navbar-collapse justify-content-center"
            id="navbarSupportedContent"
            >
          <ul class="navbar-nav">
          <li class="nav-item active">
            @if(Auth::check())
            <a class="nav-link" href="/user">{{ Auth::user()->name }}</a>
           
            @else
            <a class="nav-link" href="home">Inicio</a>
            @endif
             
          </li>
         
      
          <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false"
          >
            Servicios
          </a>
        <div
          class="dropdown-menu"
          aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="/search"
          style="color:white" >Mascotas</a
        >
        <a class="dropdown-item" href="/accesorio"
        style="color:white" >Accesorios</a
      >
      <a class="dropdown-item" href="/servicio"
      style="color:white" >Servicios</a
    >
        <a class="dropdown-item" href="/evento"
        style="color:white" >Eventos</a
        >
         </div>
          </li>
            <li class="nav-item">
                <a href="about" class="nav-link">Acerca de nosotros</a>
              </li>
              
              <li class="nav-item">
                @if(Auth::check())
                <a href="" class="btn_1 d-none d-md-inline-block"  onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">{{ __('Cerrar sesion') }}</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                 </form>
                
                @else
                <a href="/login" class="btn_1 d-none d-md-inline-block">Iniciar Sesión</a>
                @endif
                  
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</div> 
