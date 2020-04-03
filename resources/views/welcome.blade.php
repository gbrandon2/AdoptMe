@extends('layouts.upload')
@
@section('header')
<!DOCTYPE html>

<head>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!--- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!---Estilo sidebar---->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <!---FontAwesome--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
@endsection

<!---sideBar-->

@section('sidebar')
<nav id="sidebar">
    <div class="sidebar-header">
        <h3>Nombre de usuario</h3>


    </div>
    <!---            <img src=" {!! asset('imagenes/7285.jpg') !!}" class="img-fluid rounded-circle " alt="Responsive image">--->
    <img src=" {!! asset('imagenes/7285.jpg') !!}" class="img-fluid thumbnail" alt="Responsive image">
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
<section class="box">
                        <section class="inner-box">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Categoria elegida</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>

                            <label for="f" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>
                                <p>Agregar foto</p>
                            </label>
                            <input required id="f" type="file" name="img">
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Titulo" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Barrio" aria-label="Username" aria-describedby="basic-addon1">
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
                                    <input type="text" class="form-control" placeholder="Peso" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group col-sm-3">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-weight"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Edad" aria-label="Username" aria-describedby="basic-addon1">
                                </div>


                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-2">
                                    <label class="col-sm-2 col-form-label" style="text-align: right; color: #999; font-weight: bold;">Especie</label>
                                </div>
                                <div class="col-sm-10">
                                    <select required class="form-control" name="city" id="">
                                        <option value="Barranquilla">Perro</option>
                                        <option value="Bogota">Gato</option>
                                        <option value="cali">Otro</option>

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
                        <div class="end">
    
        <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
        <a href="subir.php"> volver</a>
      
      
    </div>
                    </section>
@endsection
<!---Subir Accesorios--->
@section('subirAcc')

                        <section id="inner-box" class="notV">
                            <h5><strong>Categoria</strong> </h5>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb" style="height: 50px">

                                    <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
                                    <li class="breadcrumb-item active" aria-current="page">Categoria elegida</li>
                                    <input name="cate" type="hidden">
                                </ol>
                            </nav>

                            <label for="f" class="h"> <i class="fas fa-camera" style="font-size:3em"></i>
                                <p>Agregar foto</p>
                            </label>
                            <input required id="f" type="file" name="img">
                            <div class="form-group row">
                                <div class="input-group col-sm-8">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-paw"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Titulo" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-map-signs"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Barrio" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                            </div>
                            <div class="form-group row">
                            
                                <div class="input-group col-sm-5">
                                    <div class="input-group-prepend ">
                                        <span class="input-group-text ic" id="basic-addon1"><i class="fas fa-money-bill-wave-alt"></i></span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Precio" aria-label="Username" aria-describedby="basic-addon1">
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
                        <div id="end"class="notV">
    
        <button type="submit" name="sub" class="btn btn-info" >Continuar</button>
        <a href="" id="stepBack" onclick="stepBack(event)"> volver</a>
      
      
    </div>
              
@endsection

<!---Elegir categoria--->
@section('categoria')
    
      <section id="category">
                <h3 align="center" style="color:#76c04e;padding:10px"><strong>Escoja la categoria</strong> </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="height: 50px">

                        <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->

                        <input name="cate" type="hidden">
                    </ol>
                </nav>
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
                        <div class="categoriaBox">

                            <img src="https://image.flaticon.com/icons/svg/2258/2258569.svg" class="img-fluid" alt="Responsive image">
                            <h4 align="center">Evento</h4>

                        </div>
                    </div>
                </div>



            </section>
           
            

@endsection

<!-- Page Content -->

