<html>
    @section('header')
    @show
    <body style="background-color:#e3e6e9"> 
        <div class="wrapper">
            @include("layouts.components.navbarUser")
            @yield("navBarUser")
        <div class="row" style="font-family: Quicksand, sans-serif">
            @include("layouts.components.sidebar")
            @yield("sideBar")
         
        <div id="content" style="background:#e3e6e9;font-family: Quicksand, sans-serif
        ">
        
           <div
           class="post" style="margin-left:15px;margin-top:30px">
           @section('content')
           @show
        </div> 
      
       
        </div>
        </div>  
    </body>
    <script  src="{{ asset('js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</html>