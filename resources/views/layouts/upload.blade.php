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
                <form action="upload" method="POST">
                <section class="box" style="background:#fff">

                    @section('categoria')
                    @show
                @section('subirAcc')
                @show
               
               
            </section>
            <form>
            </div>
        </div>
    </div>

</body>
<script  src="{{ asset('js/app.js') }}"></script>
  <script>
                
    function stepBack(event){
        event.preventDefault();
          $('#inner-box').toggleClass('notV');
       $('#end').toggleClass('notV');
       $('#stepb h6').toggleClass('step');
       $('#category').toggleClass('notV')
    }
                </script>    
</html>