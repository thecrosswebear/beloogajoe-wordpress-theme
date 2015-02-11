var main = function(){
    
    
    /* fonctions pour enlever les attributs inline de WORDPRESS */
    $('img').removeAttr('style');
    $('a').removeAttr('style');
    /********************************************/
    
    
    $('h2').hover(function(){
        $(this).toggleClass('mauve');
        //$(this).animate({width: '400px'},1000);
        
        console.log('je toggle mauve');
    });
    
    $('h2').click(function(){
        
        $(this).animate({top: '40px'},1000);
        console.log('je click');
    });
    
    /*$('a').animate({top: '+=40px'},1000);
    $('#page-wrap').animate({left: '+=40px'},1000);
    */
    
    //$('h1').animate({ width: "300px"},4000);
    /*$('h1').css('padding-bottom', '100px');*/
    
    
    
    
    
    
    $('h1').hover(function(){
        
         //$(this).animate({ width: "400px" });
        
        console.log('h1 animate');
    });
    
    
    
   
    
    
    
    
    
    
    
    

    
    
    
    
};





$(document).ready(main);

/*
$(document).ready(function(){
    
    
    
});



var main = function() {
  $(".like-button").click(function() {
    $(this).toggleClass("active");
  });
};

$(document).ready(main);
*/