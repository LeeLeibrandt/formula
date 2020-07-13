//NAV BAR ANIMATE
var nav = document.getElementById('nav');

window.onscroll = function(){
    
    if(window.pageYOffset > 50){
        nav.style.background = "#fff";
        nav.style.boxShadow = "0px 10px 10px #fff";
    }else{
        nav.style.background = "transparent";   
        nav.style.boxShadow = "none";    
    }
}

//cards 
(function($) {
    "use strict";

    // manual carousel controls
    $('.next').click(function(){ $('.carousel').carousel('next');return false; });
    $('.prev').click(function(){ $('.carousel').carousel('prev');return false; });
    
})(jQuery);
