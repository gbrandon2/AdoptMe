<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf=8">
        <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css" />  
        <!-- animate CSS -->
        <link rel="stylesheet" href="css/animate.css" />
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css" />
        <!-- themify CSS -->
        <link rel="stylesheet" href="css/themify-icons.css" />
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="css/flaticon.css" />
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="css/magnific-popup.css" />
        <!-- style CSS -->
        <link rel="stylesheet" href="css/style.css" />
        <style>
            /*
            .NavBar {
                font-family: Futura, "Trebuchet MS", Arial, sans-serif;
                 background-color: #e3f2fd;
                } */
                
        </style>
    </head>
    <body>
        <div class="NavBar">
            @include("layouts.components.navbar")
            @yield("navBar")
        </div>

        <div class="Container">
            @yield("container")
            
        </div>

        <div class="Footer">
            @include("layouts.components.footer")
            @yield("footer")
            
        </div>
        <!-- jquery -->
        <script src="js/jquery-1.12.1.min.js"></script>
        <!-- popper js -->
        <script src="js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <!-- waypoints js -->
        <script src="js/waypoints.min.js"></script>
        <!-- easing js -->
        <script src="js/jquery.magnific-popup.js"></script>
        <!-- particles js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- custom js -->
        <script src="js/custom.js"></script>
    </body>
</html>