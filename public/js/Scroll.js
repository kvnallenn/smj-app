$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 50) {
          $(".navbar").css("background" , "#2D3748");
        }
  
        else{
            $(".navbar").css("background" , "");  	
        }
    })
  })