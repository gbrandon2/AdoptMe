<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#082B49; width:100% ;position: fixed;z-index:999 ">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                 <button type="button" id="sidebarCollapse" class="btn btn-white" style="color:white">
                     <i class="fas fa-align-left"></i>

                </button>
                <img src="{{asset('imagenes/AdoptMe.png')}}" width="auto" height="38" class="d-inline-block align-top" alt="">
            </div>
        </div>
        
        <div
        class="collapse navbar-collapse justify-content-center"
        id="navbarSupportedContent"
        >
      <ul class="navbar-nav">

        <div class="navBar">

         <li class="nav-item active">
            <a class="nav-link" href="home" style="color:white">Inicio</a>
         </li>
     
  
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle"
            href="#"
            id="navbarDropdown"
            role="button"
            data-toggle="dropdown"
            aria-haspopup="true"
            aria-expanded="false" style="color:white">
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
        <a href="about" class="nav-link"  style="color:white">Acerca de nosotros</a>
          </li>
          <li class="nav-item">
            
              <a href="" class="btn_1 d-none d-md-inline-block"  onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
 {{ __('Cerrar sesion') }}
</a>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
          </li>
        </div>
        </ul>
      
      </div> 
   </div>
</nav>