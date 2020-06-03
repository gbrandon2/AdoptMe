@extends('layouts.petInfo')
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

                <h1>{{ $pet->titulo }}</h1>
                <img src={{ asset('Imagenes/'.$pet->imagen)}} class="img-fluid" alt="Responsive image" style="height:400px;width:auto;">
            </div>
          <div class="col" style="text-align:justify">

              <!--  <div id="action">
                    <button type="button"  data-toggle="modal" data-target="#exampleModal"class="btn btn-info">Info</button>
                    <h5>Esta siendo cuidado por:  {{ $pet->email_master }} </h5>
                </div>-->
          <div id="emails">
                <div class="card" style="width: 18rem;">
   <ul class="list-group list-group-flush">
    @foreach($emails as $email)
      
    <li class="list-group-item">{{ $email->email_user }}
      <button type="button"  data-toggle="modal" data-target="#exampleModal{{ $email->id }}"class="btn btn-info">Info</button></li>
    @endforeach
   </ul>
 </div>
</div>       
            </div>  
        </div>
        <div class="row">
            <div class="col">
                <hr>
                <h3>Informacion</h3>
                <ul>
                    <li><h5>edad</h5>{{ $pet->edad }}</li>
                    <li>
                    
                        <h5>Peso</h5>{{ $pet->peso }}
                    </li>
                </ul>
                
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col">
              
                <h3>Descripcion</h3>
                {{ $pet->description }}
                
                <hr>
                <h3>Recent posts</h3>
            </div>
            
        </div>
        
        <div class="row">
            
        
            @foreach($pets as $pet2 )
           
            <div class="card-group">
                <div class="card">
                    <img img class="card-img-top img-fluid" src={{ asset('Imagenes/'.$pet2->imagen)}} style="width:298px;height:auto;">
                   <h5 class="card-tittle"> <a href={{ "/Petinfo?id=".$pet2->id }}>{{ $pet2->titulo }}</a></h5>
                   <p class="card-text" style="height:100px;">{{ $pet->description }}
                    <div class="card-footer">
                        <small class="text-muted">Publicado por {{ $pet2->email_master }}</small>
                    </div>
                </div>
            </div>
            
        @endforeach
        </div>
        <br>
    
    </div>
@endsection
@section('Participantes')
    @foreach($emails as $email)
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $email->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Respuestas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <ul>
               <li><h1>Respuesta 1</h1>{{ $email->respuesta1 }} </li>
               <li><h1>Respuesta 2</h1>{{ $email->respuesta2 }} </li>
               <li><h1>Respuesta 3</h1>{{ $email->respuesta3 }} </li>
               <li><h1>Respuesta 4</h1>{{ $email->respuesta4 }} </li>
               <li><h1>Respuesta 5</h1>{{ $email->respuesta5 }} </li>
               <li><h1>Respuesta 6</h1>{{ $email->respuesta6 }} </li>
               <li><h1>Respuesta 7</h1>{{ $email->respuesta7 }} </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
 
            <a href="/newOwner/{{ $pet->id }}/{{ $email->email_user }}"class="btn btn-primary">Ver detalles</a>
          
        
          </div>
        </div>
      </div>
    </div>
    @endforeach
@endsection
@section("encuesta")

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="margin-left: 15%;
    margin-right: 10%; ">
      <div class="modal-content" style="width:1000px;height:500px;overflow-y: scroll; ">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Encuesta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="saveSurvey/{{ $pet->id }}" method="POST">
            @csrf 
            <h4>Pregunta 1</h4>
            <fieldset class="pregunta1" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta1" id="radioP11" value="pr1resp1" required ><label class="form-check-label" for="radioP11">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta1" id="radioP21" value="pr1resp2" ><label class="form-check-label" for="radioP21">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta1" id="radioP31" value="pr1resp2" ><label class="form-check-label" for="radioP31">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
           <h4>Pregunta 2</h4>
            <fieldset class="pregunta2" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta2" id="radioP12" value="pr2resp1" required ><label class="form-check-label" for="radioP12">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta2" id="radioP22" value="pr2resp2" ><label class="form-check-label" for="radioP22">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta2" id="radioP32" value="pr2resp3" ><label class="form-check-label" for="radioP32">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
            <h4>Pregunta 3</h4>
            <fieldset class="pregunta3" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta3" id="radioP13" value="pr3resp1" required ><label class="form-check-label" for="radioP13">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta3" id="radioP23" value="pr3resp2" ><label class="form-check-label" for="radioP23">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta3" id="radioP33" value="pr3resp3" ><label class="form-check-label" for="radioP33">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
            <h4>Pregunta 4</h4>
            <fieldset class="pregunta4" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta4" id="radioP14" value="pr4resp1" required><label class="form-check-label" for="radioP14">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta4" id="radioP24" value="pr4resp2" ><label class="form-check-label" for="radioP24">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta4" id="radioP34" value="pr4resp3" ><label class="form-check-label" for="radioP34">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
            <h4>Pregunta 5</h4>
            <fieldset class="pregunta5" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta5" id="radioP15" value="pr5resp1" required><label class="form-check-label" for="radioP15">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta5" id="radioP25" value="pr5resp2" ><label class="form-check-label" for="radioP25">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta5" id="radioP35" value="pr5resp3" ><label class="form-check-label" for="radioP35">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
            
            
            <h4>Pregunta 6</h4>
            <fieldset class="pregunta6" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta6" id="radioP16" value="pr6resp1" required><label class="form-check-label" for="radioP16">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta6" id="radioP26" value="pr6resp2" ><label class="form-check-label" for="radioP26">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta6" id="radioP36" value="pr6resp3" ><label class="form-check-label" for="radioP36">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
            <h4>Pregunta 7</h4>
            <fieldset class="pregunta7" >
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta7" id="radioP17" value="pr7resp1" required><label class="form-check-label" for="radioP17">Respuesta 1</label></div>
               <div class="row">
               <div class="col-sm-10">
               <div class="form-check"><input class="form-check-input" type="radio" name="pregunta7" id="radioP27" value="pr7resp2" ><label class="form-check-label" for="radioP27">Respuesta 1</label></div>
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-check"><input class="form-check-input" type="radio" name="pregunta7" id="radioP37" value="pr7resp3" ><label class="form-check-label" for="radioP37">Respuesta 1</label></div>
                  </div>
               </div>
            </fieldset>
             
              <button class="btn btn-primary" type="submit">Button</button>
          </form>
        </div>
        
      </div>
    </div>
  </div>
@endsection