<html>
    @section('header')
    @show
    @if(\Session::has('success'))
    <script>
      $(document).ready(function(){
       
          $('.toast').toast('show');
        ;
      });
      </script>
    @endif
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
      <div class="toast" style="position: absolute; top: 0; right: 0;">
        <div class="toast-header">
          <i class="fas fa-check-circle" style="color: chartreuse"></i>
  
          <strong class="mr-auto" style="color: chartreuse">Alerta</strong>
         
          <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="toast-body">
         Se ha guardado correctamente sus respuestas
        </div>
    </div>
    <div role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-autohide="true" >
    
    </div>
    
    <body style="background-color:#e3e6e9">
        @section('content')
        @show
        @section('Participantes')
        @show   
    </body>
   
   
 
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>