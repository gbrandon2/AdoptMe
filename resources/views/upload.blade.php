@extends('layouts.upload')
@section('header')

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!---Estilo sidebar---->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!---FontAwesome--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
@endsection

<!---sideBar-->

@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header" style="text-align:center;background-image: url({{ asset('/imagenes/1586040012.jpg')}})">
        <h3>Bienvenido</h3>
        <img src=" {!! asset('imagenes/7285.jpg') !!}" class="img-fluid rounded-circle " alt="Responsive image">
        <h6>Usuario</h6>

    </div>     
    <!----<img src=" {!! asset('imagenes/7285.jpg') !!}" class="img-fluid thumbnail" alt="Responsive image">--->
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
<!---Subir mascotas-->
@section('subirPet')
<div id="mascota" class="notV">
    <form action="{{ route('addPet') }}" method="POST" enctype="multipart/form-data">
    @csrf 
                        <section id="inner-box">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Mascota</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>
                            <div class="row">
                                <div class="col-sm-2">
                                <label for="f" class="h"> <i class="fas fa-camera" style="font-size:3em"></i><p>Agregar foto</p></label>

                                <input  id="f" type="file" name="img" class="f" >
                                </div>
                                <div class="col-sm-8 preview">
                           
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text"  name="tit" class="form-control" placeholder="Titulo"  aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input  required type="text" name="lugar" class="form-control" placeholder="Barrio" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Adicional</label>
                                </div>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-weight"></i></span>
                                    </div>
                                    <input required required type="text" name="peso" class="form-control" placeholder="Peso"  aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-weight"></i></span>
                                    </div>
                                    <input  required type="text" name="edad" class="form-control" placeholder="Edad" aria-label="Username" aria-describedby="basic-addon1">
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Especie</label>
                                </div>
                                <div class="col-sm-10">
                                    <select required class="form-control" name="especie" id="">
                                        <option value="Perro">Perro</option>
                                        <option value="Gato">Gato</option>
                                        <option value="Otro">Otro</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                            <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Descripcion</label>
                                </div>
                                
                               
                                <div class="col-sm-10">
                                    <textarea required class="form-control" name="descrip" id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                        </section>
                        <div id="end">
    
                            <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
                            <a href="" id="stepBack" onclick="stepBack(event,'mascota')"> volver</a>
                          
                          
                        </div>
                              
                    
                    </form>     
</div>
                    @endsection
<!---Subir Accesorios--->
@section('subirAcc')
<div id="subirAcce" class="notV">
    <form action="{{ route('addAcc') }}" method="POST" enctype="multipart/form-data">
    @csrf 
                        <section id="inner-box">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>

                           <div class="row">
                                    <div class="col-sm-2">
                                        <label for="f2" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>
                                        <p>Agregar foto</p>
                                        </label>

                                        <input required id="f2" type="file" name="ima" class="f" >
                                    </div>
                                    <div class="col-sm-8 preview">
                           
                                    </div>
                            </div> 
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Titulo"  name="titulo" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Barrio" required name="barrio" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group row">
                            
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-money-bill-wave-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Precio" required name="precio" aria-describedby="basic-addon1">
                                </div>


                            </div>
                           
                            <div class="form-group row">
                            <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Descripcion</label>
                                </div>
                                
                               
                                <div class="col-sm-10">
                                    <textarea required class="form-control" name="descrip"  id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                        </section>
                        <div id="end">
    
                            <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
                            <a href="" id="stepBack" onclick="stepBack(event,'subirAcce')"> volver</a>
                          
                          
                        </div>
                              
    </form>
      
    </div>
              
@endsection
@section('subirServ')
<div id="subirServ" class="notV">
    <form action="{{ route('addEv') }}" method="POST" enctype="multipart/form-data">
    @csrf 
                        <section id="inner-box">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>

                           <div class="row">
                                    <div class="col-sm-2">
                                        <label for="f3" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>
                                        <p>Agregar foto</p>
                                        </label>

                                        <input required id="f3" type="file" name="im" class="f" >
                                    </div>
                                    <div class="col-sm-8 preview">
                           
                                    </div>
                            </div> 
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Titulo"  name="titul" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Barri" required name="lugar" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group row">
                            
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-money-bill-wave-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Precio" required name="preci" aria-describedby="basic-addon1">
                                </div>


                            </div>
                           
                            <div class="form-group row">
                            <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Descripcion</label>
                                </div>
                                
                               
                                <div class="col-sm-10">
                                    <textarea required class="form-control" name="descri"  id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                        </section>
                        <div id="end">
    
                            <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
                            <a href="" id="stepBack" onclick="stepBack(event,'subirServ')"> volver</a>
                          
                          
                        </div>
                              
        </form>
      
    </div>
              
@endsection

@section('subirEv')
<div id="subirEv" class="notV">
    <form action="{{ route('addEv') }}" method="POST" enctype="multipart/form-data">
    @csrf 
                        <section id="inner-box">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Accesorios</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>

                           <div class="row">
                                    <div class="col-sm-2">
                                        <label for="f4" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>
                                        <p>Agregar foto</p>
                                        </label>

                                        <input required id="f4" type="file" name="imEvt" class="f" >
                                    </div>
                                    <div class="col-sm-8 preview">
                           
                                    </div>
                            </div> 
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Titulo"  name="titulEvt" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Direccion" required name="DirEvt" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group row">
                                
                                    
                                    
                                   
                                   
                                   
                                <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Fecha</label>
                                </div>
                                <div class="col-sm-3">
                                    <input type='date' placeholder="Fecha" name="date" class="form-control" id='datepicker' />
                                  
                                </div>

                            </div>
                         
                           
                            <div class="form-group row">
                            <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Descripcion</label>
                                </div>
                                
                               
                                <div class="col-sm-10">
                                    <textarea required class="form-control" name="descEvt"  id="" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                        </section>
                        <div id="end">
    
                            <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
                            <a href="" id="stepBack" onclick="stepBack(event,'subirServ')"> volver</a>
                          
                          
                        </div>
                              
        </form>
      
    </div>
              

@endsection
<!---Elegir categoria--->
@section('categoria')
    
      <section id="category">
                <h3 align="center" style="color:#53c9bb;padding:10px"><strong>Escoja la categoria</strong> </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="height: 50px">

                        <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->

                        <input name="cate" type="hidden">
                    </ol>
                </nav>
                @if(Auth::check())
                
                <div class="row" style="padding:20px;">
                    <div class="col-sm " id="serv">
                        <div class="categoriaBox" onclick="">
                            <img src=" https://image.flaticon.com/icons/svg/2699/2699926.svg" class="img-fluid" alt="Responsive image">
                           <h4 align="center">Servicio</h4>
                        </div>

                    </div>
                    <div class="col-sm">
                        <div class="categoriaBox" id="Masc">
                            <img src="https://image.flaticon.com/icons/svg/1167/1167628.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Mascota</h4>
                        </div>
                    </div>
                    @if(Auth::user()->userType==0)
                    <div class="col-sm">
                        <div class="categoriaBox" id="Acc">
                            <img src=" https://image.flaticon.com/icons/svg/1688/1688063.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Accesorio</h4>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="categoriaBox" id="Ev">

                            <img src="https://image.flaticon.com/icons/svg/2258/2258569.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Evento</h4>

                        </div>
                    </div>
                    @endif
                </div>

                 @else   
                 
                <div class="row" style="padding:20px;">
                    <div class="col-sm " id="serv">
                        <div class="categoriaBox" onclick="">
                            <img src=" https://image.flaticon.com/icons/svg/2699/2699926.svg" class="img-fluid" alt="Responsive image">
                           <h4 align="center">Servicio</h4>
                        </div>

                    </div>
                    <div class="col-sm">
                        <div class="categoriaBox" id="Masc">
                            <img src="https://image.flaticon.com/icons/svg/1167/1167628.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Mascota</h4>
                        </div>
                    </div>
                   
                    <div class="col-sm">
                        <div class="categoriaBox" id="Acc">
                            <img src=" https://image.flaticon.com/icons/svg/1688/1688063.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Accesorio</h4>
                        </div>
                    </div>
                    <div class="col-sm">
                        <div class="categoriaBox" id="Ev">

                            <img src="https://image.flaticon.com/icons/svg/2258/2258569.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Evento</h4>

                        </div>
                    </div>
                
                </div>
                @endif
            </section>
           
            

@endsection

<!-- Page Content -->

