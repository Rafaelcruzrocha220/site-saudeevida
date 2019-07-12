(function($) {

    $(".btn-up").on("click", function() { 
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    
    $("#btn-home").on("click", function() { 
        window.scrollTo({ top: $("#home").offset().top, behavior: 'smooth' });
    });

    $("#btn-news").on("click", function(){
        window.scrollTo({ top: $("#newsletter").offset().top, behavior: 'smooth' });
    })
    
    $("#btn-eventos").on("click", function(){
        window.scrollTo({ top: $("#eventos").offset().top, behavior: 'smooth' });
    })

    $("#btn-contact").on("click",function(){
        window.scrollTo({ top: $("#contact").offset().top, behavior: 'smooth' });
    })

})( jQuery );