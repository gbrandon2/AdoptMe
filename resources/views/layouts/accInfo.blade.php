<html>
    @section('header')
    @show
    <div class="row" style="margin-left: 0px;margin-right:0px;">
        <div class="col" style="padding-left: 0px;padding-right:0px ;margin-bottom:10px">
          @include("layouts.components.navbar")
          @yield("navBar")
      </div>
      </div>
      <body style="background-color:#e3e6e9;font-family: Quicksand, sans-serif">
    
        @section('content')
        @show
      
    </body>
</html>