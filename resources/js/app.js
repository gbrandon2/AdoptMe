require('./bootstrap');

$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active')
    });
    
});
$('#stepBack').click(function(event) {
  
    event.preventDefault();
  
});
    



$(document).ready(function () {
    $('#Acc').on('click', function cambiarS() {
       $('#inner-box').toggleClass('notV');
       $('#end').toggleClass('notV');
       $('#stepb h6').toggleClass('step');
       $('#category').toggleClass('notV')
     
    });
    
});




