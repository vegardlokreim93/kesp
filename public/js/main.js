$(document).ready(function() {



//Function to hide/show hidden-menu
    $( "#activate-hidden" ).on("click",  function() {
            event.preventDefault();
            $("#hidden-menu").toggle();
            var height = $("#hidden-menu").outerHeight(); //Get the height of hidden menu, to adjust body
            
            if ($('#hidden-menu').hidden()) {

                $("#content").css('margin-top', '0px');
                

            }else{
                $("#content").css('margin-top', '-'+height+'px');
            }
     
    });
    
}); 