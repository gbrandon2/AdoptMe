@extends('layouts.user')

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

@section('content')
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">   <div class="row">
            
        
    @foreach($pets as $pet2 )
   
    <div class="card-group">
        <div class="card">
            <img img class="card-img-top img-fluid" src={{ asset('Imagenes/'.$pet2->imagen)}} style="width:298px;height:auto;">
           <h5 class="card-tittle"> <a href={{ "/Petinfo?id=".$pet2->id }}>{{ $pet2->titulo }}</a></h5>
           <p class="card-text" style="height:100px;">{{ $pet2->description }}
            <div class="card-footer">
                <small class="text-muted">Publicado por {{ $pet2->email_master }}</small>
            </div>
        </div>
    </div>
    
@endforeach
</div>
</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
    <div class="row">
            
        
      @foreach($accesories as $pet2 )
     
      <div class="card-group">
          <div class="card">
              <img img class="card-img-top img-fluid" src={{ asset('Imagenes/'.$pet2->imag)}} style="width:298px;height:auto;">
             <h5 class="card-tittle"> <a href={{ "/Petinfo?id=".$pet2->id }}>{{ $pet2->titul }}</a></h5>
             <p class="card-text" style="height:100px;">{{ $pet2->descripcion }}
              <div class="card-footer">
                  <small class="text-muted">Publicado por {{ $pet2->email}}</small>
              </div>
          </div>
      </div>
      
  @endforeach
  </div>
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
@endsection