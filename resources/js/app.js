require('./bootstrap');

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active')
    });
    
});

    
$('#imgIn').change(function(){
    var ainput=document.getElementById('imgIn');
    alert('algo');
});

$(document).ready(function () {
    $('#Masc').on('click', function () {
       $('#mascota').toggleClass('notV');
       $('#stepb h6').toggleClass('step');
       $('#category').toggleClass('notV')
     
    });
    
});


$(document).ready(function () {
    $('#Acc').on('click', function cambiarS() {
       $('#subirAcce').toggleClass('notV');
     
       $('#stepb h6').toggleClass('step');
       $('#category').toggleClass('notV')
     
    });
    
});




