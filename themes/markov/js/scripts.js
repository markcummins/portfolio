(function ($, root, undefined) {
	
//	$(function () {
//		
//		myParaxify = paraxify('.paraxify');
//	});	
    
    $(document).ready(function(){
        
        $('#btn-animate-pfolio').click( function(){
            $('.header-wrapper .btn').hide();
            $('.nav').addClass('zoomInDown');  
            $('.header').addClass('flipOutX');
        });   
        
        setTimeout( function(){
            $("#btn-animate-pfolio").fadeTo("slow",1);
        }, 600);  
        
        setTimeout( function(){
            $("#btn-animate-blog").fadeTo("slow",1);
        }, 900);
                
    });

})(jQuery, this);
