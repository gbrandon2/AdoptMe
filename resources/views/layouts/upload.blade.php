<html>
@section('header')
@show


<body>
    <div class="wrapper">
        @section('sidebar')
        @show
        <div id="content" style="background:#e3e6e9
        ">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>

                    </button>
                    aqui va el header y cambiar de color
                </div>
            </nav>
            <div id="progressBar">
               <div class="row">
                   <div class="col-3" id="stepa">
                    
                 <h6 class="step">Escoger categoria</h6>
                        
                      
               </div>
               <div class="col-6 " id="stepb">
                    
                <h6 >Llenar datos</h6>
                      
                    
             </div>
               </div>
            </div>
            <div id="upload-box">
              
                <section class="box" style="background:#fff">

                    @section('categoria')
                    @show
                @section('subirPet')
                @show
                @section('subirAcc')
                @show
              
              
            </section>
        
            </div>
        </div>
    </div>

</body>
<script  src="{{ asset('js/app.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <script>
                
    function stepBack(event,pram2) {
        event.preventDefault();
        $('#'+pram2).toggleClass('notV');
      
        $('#stepb h6').toggleClass('step');
        $('#category').toggleClass('notV')
}
(function(){
 function filePreview(input){
     
  if(input.files && input.files[0]){
    
   var reader = new FileReader();
   reader.onload=function(e){
    $('.preview').html( '<img src="'+e.target.result+'" style=" width: 120px;height: 120px; margin:auto" class="img-fluid thumbnail" alt="Responsive image">');    
   }
  

   reader.readAsDataURL(input.files[0]);
 }
 }
 
 $('.f').change(function(){
    
  filePreview(this);
  
  });
 
})();

    
    
  

 </script>    
</html>