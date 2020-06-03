<html>
@section('header')
@show


<body style="background-color:#e3e6e9">
    <div class="wrapper" >
      @include("layouts.components.navbarUser")
            @yield("navBarUser")
        <div class="row" style="font-family: Quicksand, sans-serif">
           
        <div id="content" style="background:#e3e6e9;font-family: Quicksand, sans-serif
        ">
           @include("layouts.components.sidebar")
           @yield("sideBar")
            
            <div id="progressBar">
               <div class="row" style="padding-top:20px">
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
                @section('subirServ')
                @show
                @section('subirEv')
                @show
              
            </section>
        
            </div>
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