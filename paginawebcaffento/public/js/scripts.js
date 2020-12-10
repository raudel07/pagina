/*jQuery('document').ready(function($) {
  var menuBtn = $('.menu-icon'),
    menu = $('.navigation ul');

  menuBtn.click(function() {

    if(menu.hasClass('show')){
        menu.removeClass('show');
    }else {
      menu.addClass('show');
    }

  });
});*/
/*jQuery('document').ready(function($){
  $(window).scroll(function(){
    var barra = $(window).scrollTop();
    var posicion = barra * 0.05;

    $('body').css({
       'background-position': '0 ' + posicion + 'px'
    });
  });
});
jQuery('document').ready(function($){
  var btnvermas=$('.btnvermas'),
  carta =$('.carta-todo');


  btnvermas.click(function(){
    if(carta.hasClass('girar')){
      carta.removeClass('girar');
    }else {
      carta.addClass('girar');
    }
  });
});*/
/*jQuery('document').ready(function($){
  var btnvermas=$('.btnvermas'),
  frente=document.getElementById('.frente');

  btnvermas.click(function(){
  if (frente.css('z-index':'1')) {
    'z-index':'0';
    //frente.styles.z-index = '0';
  }else {
    'z-index':'1';
  }
});
});*/
$(function () {
    $(window).scroll(function () {
        var winTop = $(window).scrollTop();
        if (winTop >= 30) {
            $("body").addClass("sticky-header");
        } else {
            $("body").removeClass("sticky-header");
        }
    });
});
jQuery("document").ready(function ($) {
    var menuBtn = $(".menu-icon"),
        menu = $(".navigation ul");

    menuBtn.click(function () {
        if (menu.hasClass("show")) {
            menu.removeClass("show");
        } else {
            menu.addClass("show");
        }
    });
});
jQuery("document").ready(function ($) {
    $(window).scroll(function () {
        var barra = $(window).scrollTop();
        var posicion = barra * 0.005;

        $("body").css({
            "background-position": "0 " + posicion + "px",
        });
    });
});

var elementTop = $('.navv').offset().top;
$(window).scroll(function(){
    if($(window).scrollTop()>= elementTop){
        $('body').addClass('nav_fixed');   
    }else{
        $('body').removeClass('nav_fixed');
    }
});
$('.btn_menu').on('click',function(){
  $('.navv').toggleClass('nav-toggle');
});


