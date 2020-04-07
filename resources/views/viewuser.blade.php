@extends('layouts.viewuser')

@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Perfil de usuario</h3>
    </div>
    <img class="rounded-circle " alt="100x100" src="{!! asset('images/perfil.jpeg') !!}" data-holder-rendered="true">
    <ul class="list-unstyled components">

        <li>
            <a href="#">Usuario</a>
        </li>

        <li>
            <a href="#">Publicar</a>
        </li>
        <li>
            <a href="#">Editar perfil</a>
         </li>
    </ul>
</nav>
@endsection

@section('navbar')
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Accesories</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
        </li>
    </ul>
</div>
@endsection