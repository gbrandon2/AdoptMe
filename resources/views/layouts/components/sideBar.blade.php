<nav id="sidebar">
    <div class="sidebar-header" style="text-align:center;background-image: url({{ asset('/imagenes/1586040012.jpg')}})">
        <h3>Bienvenido</h3>
        @if(Auth::check())
        <img src=" {!! asset('imagenes/'.$user->userImg) !!}" class="img-fluid rounded-circle " alt="Responsive image">
        <h6>{{ $user->name }}</h6>
        @else
        <img src=" {!! asset('imagenes/72pg') !!}" class="img-fluid rounded-circle " alt="Responsive image">
        @endif
      
        

    </div>     
    <!----<img src=" {!! asset('imagenes/7285.jpg') !!}" class="img-fluid thumbnail" alt="Responsive image">--->
    <ul class="list-unstyled components">

        <li>
            <a href="/user">Usuario</a>
        </li>

        <li>
            <a href="/upload">Publicar</a>
        </li>
        <li>
            <a href="#">Editar perfil</a>
         </li>
    </ul>
</nav>