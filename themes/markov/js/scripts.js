(function ($, root, undefined) {
$(document).ready(function(){
    	
    $(function() {
        $(".bg-holder").parallaxScroll({friction: 0.5,direction: "vertical"});
    });
    
//        $('#btn-animate-pfolio').click( function(){
//            
//            $('.header .btn').hide();   //HIDE BUTTONS
//            $('.header').addClass('flipOutX').fadeOut("slow", function(){ 
//                $('.nav').fadeIn().addClass('zoomInDown');   //SHOW NAV
//                $('.portfolio').fadeIn().addClass('zoomInDown');   //SHOW NAV
//            });  //HIDE HEADER THINGY
//            $("body").css("background-image", "none");
//            
//        });   
        
    setTimeout( function(){
        $("#btn-animate-pfolio").fadeTo("slow",1).addClass('lightSpeedIn');
    }, 600);  

    setTimeout( function(){
        $("#btn-animate-blog").fadeTo("slow",1).addClass('lightSpeedIn');
    }, 1100);

});
})(jQuery, this);
