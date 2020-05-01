( function($) {

  // bxslider
  $('.bxslider').bxSlider({
    infiniteLoop: true,
    touchEnabled: false,
    controls: false,
   });

   $('.clientsslider').bxSlider({
     slideWidth: 300,
     minSlides: 2,
     maxSlides: 50,
     slideMargin: 10,
     pager: false,
     infiniteLoop: true,
     controls: true,
     touchEnabled: false,
    });



  /**
   * Match Height (Including Safari onload fix)
   */
  function startMatchHeight() {
    $('.matchheight').matchHeight();
    $('.headmatch').matchHeight();
  }
  window.onload = startMatchHeight;

  // fancybox
  $(document).ready(function() {
  		$(".fancybox").fancybox();
  	});

} ) (jQuery);

window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#31404E",
      "text": "#AAAEB2"
    },
    "button": {
      "background": "#14191F"
    }
  },
  "theme": "edgeless",
  "position": "bottom",
  "static": true,
  "content": {
    "message": "This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies.",
    "dismiss": "Close This",
    "link": "Find out more",
    "href": "data-policy"
  }
});
