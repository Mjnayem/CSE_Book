(function($){
    
    var x=0;
    var y=0;
    var z=0;
    var banner = $("#main");
    banner.css('backgroundPosition',x + 'px' + ' ' + y +'px');
    
    window.setInterval(function(){
        
        banner.css("backgroundPosition",x+ 'px' + ' ' + y +'px');
        y--;
        
    },80);
       
})(jQuery);