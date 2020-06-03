@extends('layouts.evtInfo')


@section('header')
<head>
 
    <!--- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!---Estilo pagina---->
    <link rel="stylesheet" href="css/style.css" />
    <link href="{{asset('css/info.css')}}" rel="stylesheet">
    <!---FontAwesome--->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
@endsection

@section('content')
<div class="content">
    <div class="row" >
        <div class="col" style="text-align:center">
    
            <h1>{{ $ev->TitulEvt }}</h1>
            <img src={{ asset('Imagenes/'.$ev->imagEvt)}} class="img-fluid" alt="Responsive image" style="height:400px;width:auto;">
        </div>
      <div class="col" style="text-align:justify">
    
          <div id="action">
                
                <h5>Informacion</h5>
            </div>
     
    </div>
    </div>
    <div class="row">
        <div class="col">
            <hr>
            <h3>Informacion</h3>
            <ul>
                <li><h5>Fecha</h5>{{ $ev->evtDate }}</li>
                <li>
                
                    <h5>Direccion/lugar</h5>{{ $ev->dirEvt }}
                </li>
            </ul>
            
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col">
          
            <h3>Descripcion</h3>
            {{ $ev->descripcionEvt }}
            
            <hr>
            <h3>Recent posts</h3>
        </div>
        
    </div>
    
    <div class="row">
        
    
        @foreach($evt as $ev2 )
       
        <div class="card-group">
            <div class="card">
                <img img class="card-img-top img-fluid" src={{ asset('Imagenes/'.$ev2->imagEvt)}} style="width:298px;height:auto;">
               
                <h5><a href={{ "/evtInfo?id=".$ev2->id }}>{{ $ev2->TitulEvt }}</a></h5>
                
             
               <p class="card-text" style="height:100px;">{{ $ev2->descripcionEvt }}
                <div class="card-footer">
                    <small class="text-muted">Publicado por {{ $ev2->emailEvt}}</small>
                </div>
            </div>
        </div>
        
    @endforeach
    </div>
    <br>
    
    </div>
@endsection