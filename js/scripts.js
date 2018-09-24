jQuery(function($) {
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: [
      "<span class='arrow-left'></span>",
      "<span class='arrow-right'></span>"
    ],
    autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 3
      },
      1000: {
        items: 4
      }
    }
  });

  $('.faq').click(function(){
    if($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $('.faq').removeClass('active');
      $(this).addClass('active');
    }
  });
});