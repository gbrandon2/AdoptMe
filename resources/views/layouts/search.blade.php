<html>
    <head>
    @section('header')
    @show
</head>
    <body>
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