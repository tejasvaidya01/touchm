/**/
jQuery(document).ready(function(){
  $(".flexnav").flexNav();
  function custom_window_resize() {
    //var isMobile = /Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent);
    if ($(window).width() < 768) {
      $('.header_logo2').each(function() {
        $(this).insertAfter($(this).parent().find('.header_logo1'));
      });
      $('.header_logo1').removeClass('two');
      $('.header_logo1').addClass('six');
      $('.header_logo2').removeClass('two');
      $('.header_logo2').addClass('six');
      $('.header_title').removeClass('eight');
      $('.header_title').addClass('twelve');
    } else {
      $('.header_logo2').each(function() {
        $(this).insertAfter($(this).parent().find('.header_title'));
      });
      $('.header_logo1').removeClass('six');
      $('.header_logo1').addClass('two');
      $('.header_logo2').removeClass('six');
      $('.header_logo2').addClass('two');
      $('.header_title').removeClass('twelve');
      $('.header_title').addClass('eight');
    }
  }

  custom_window_resize();
  $(window).resize(function() {
    custom_window_resize();
  });
  
});