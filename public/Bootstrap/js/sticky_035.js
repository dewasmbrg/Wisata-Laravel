/*
Nama File : sticky_035.class
NIM : 11320035
Kelas : 31TI2
*/

jQuery(document).ready(function(){
  var navOffset = jQuery("nav").offset().top;

  jQuery("nav").wrap('<div class="nav-placeholder"></div>');
  JQuery(".nav-placeholder").height(jQuery("nav").outerHeight());

  jQuery("nav").wrapInner('<div class="nav-inner"></div>');
  jQuery("nav").wrapInner('<div class="nav-inner-most"></div>');

  jQuery(window).scroll(function(){
    var scrollPos = jQuery(window).scrollTop();
    jQuery(".status").html(scrollPos);

    if(scrollPos >= navOffst){
      jQuery("nav").addClass("fixed");
    }else{
      jQuery("nav").removeClass("fixed");
    }
  });
});
