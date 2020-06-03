<html>
    <head>
    @section('header')
    @show
    
</head>
    <body style="background: #e3e6e9">
      <div class="row" style="margin-left: 0px;margin-right:0px;">
          <div class="col" style="padding-left: 0px;padding-right:0px ;margin-bottom:10px">
            @include("layouts.components.navbar")
            @yield("navBar")
        </div>
        </div>

        <div class=row style="
        margin-right: 0px;
    ">
            <div class="col-2">
                @section('Filter')
                @show
            </div>
            <div class="col-8">
                @section('Content')
                @show
            </div>
        </div>
    </body>
</html>