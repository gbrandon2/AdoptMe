@extends('layouts.acessory')
@section('header')
<header>
   
    <!--- Boostrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <!---FontAwesome--->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</header>
    @endsection

@section('content')
<div>
<form action="/search" method="get">
    <div class="row">
     <div class="col-10">   
    <input type="text" name="search" class="form-control" >
</div>
   <span class="form-group-btn">
        <button type="submit" class="btn btn-primary">Search</button>
   </span>
</div>
</form>

@foreach($acc as $acce)

<div class="card" style="max-heigth: 18rem;">
    <div class="card-header">
        @if($acce->posttype==2)
        <h5><a href={{ "/accesoryinfo?id=".$acce->id }}>{{ $acce->titul }}</a></h5>
        @else
        <h5><a href={{ "/serivceinfo?id=".$acce->id }}>{{ $acce->titul }}</a></h5>
        @endif
    </div>
    <div class="card-body">
    <div class="row">
        <div class="col-sm-2">
            <img src={{ asset('Imagenes/'.$acce->imag)}} class="img-fluid" alt="Responsive image" style="height:auto;width:350px;">

        </div>
        <div class="col-sm-8">
      
      <p class="card-text">{{ $acce->descripcion }}</p>
    </div>
    
    </div>
    </div>
  </div>
  <br>
  

    

@endforeach
</div>
@endsection