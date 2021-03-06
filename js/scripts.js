$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

/* MENU FIJO EN PANTALLA*/
$(document).ready(function(){

    $(window).scroll(function(){
        scroll=$(window).scrollTop();
        if(scroll > 100){
            $(".menu").css({"position":"fixed"});
            $(".menu").css({"width":"100%"});
            $(".menu").css({"top":"0"});
            $(".menu").css({"background":"#fff"});
            $(".menu a").css({"color":"#000"});
            $(".logo").css({"color":"#000"});
            $(".menu").css({"box-shadow":"rgba(70, 66, 66, 0.5) 6px 1px 8px"});
            $(".menu").css({"z-index":"10"});
        }else{
            $(".menu").css({"position":"relative"});
            $(".menu").css({"background":"transparent"});
            $(".menu").css({"box-shadow":"0 0 0"});
            $(".menu a").css({"color":"#fff"});
            $(".logo").css({"color":"#fff"});
        }
    })
})
