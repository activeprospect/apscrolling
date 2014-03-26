jQuery(document).ready(function($) {

  var isMobile = {
    Android: function() {
      return navigator.userAgent.match(/Android/i);
    },
    BlackBerry: function() {
      return navigator.userAgent.match(/BlackBerry/i);
    },
    iOS: function() {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
    },
    Opera: function() {
      return navigator.userAgent.match(/Opera Mini/i);
    },
    Windows: function() {
      return navigator.userAgent.match(/IEMobile/i);
    },
    any: function() {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
    }
  };

  if (isMobile.any()) $('div, img').removeClass('notViewed animBlock');
  if( isMobile.any()) $('.menu-primary-container ul li').addClass('mobilepad'); 
  if( isMobile.any()) $('.client-testimonial').css('font-size', '15px'); 

  $('.page-id-644 #menu-item-363,.page-id-666 #menu-item-363, .page-id-754 #menu-item-363, .page-id-756 #menu-item-363, .page-id-542 .menu-item-888, .page-id-156 .menu-item-888, .page-id-540 .menu-item-888, .page-id-569 .menu-item-888').addClass('current-menu-item');
  $('#post-6 .container, #post-644 .container, #post-666 .container, #post-756 .container, #post-754 .container').removeClass('container');
  $('#post-6 .product, #post-644 section, #post-666 section, #post-756 section, #post-754 section').wrapInner('<div class="container"></div>');



  // Smooth Scroll to Contact Us
  $(function() {
    $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });


  // Load scrolling animations
  $(function() {
    var $blocks = $('.animBlock.notViewed');
    var $window = $(window);
    $window.on('scroll', function(e) {
      $blocks.each(function(i, elem) {
        if ($(this).hasClass('viewed')) return;
        scrollToview($(this));
      });
    });
  });

  function scrollToview(elem) {
    var docViewTop = $(window).scrollTop();
    var docViewBottom = docViewTop + $(window).height();
    var elemOffset = 0;

    if (elem.data('offset') != undefined) {
      elemOffset = elem.data('offset');
    }
    var elemTop = $(elem).offset().top;
    var elemBottom = elemTop + $(elem).height();

    if (elemOffset != 0) { // offset is updated on scrolling direction
      if (docViewTop - elemTop >= 0) {
        // scrolling from bottom up
        elemTop = $(elem).offset().top + elemOffset;
      } else {
        // scrolling top to bottom
        elemBottom = elemTop + $(elem).height() - elemOffset
      }
    }

    if ((elemBottom <= docViewBottom) && (elemTop >= docViewTop)) {
      // once an element is visible swap classes
      $(elem).removeClass('notViewed').addClass('viewed');

      var animElemsLeft = $('.animBlock.notViewed').length;
      if (animElemsLeft == 0) {
        // with no animated elements left debind the scroll event
        $(window).off('scroll');
      }
    }
  }


  //Testimonials Carosuel
  $('#testimonials').carouFredSel({
    auto: true,
    pagination: {
      container: '#mainpager2'
    },
//     prev: {
//        button  : "#msprev"
// },
// next: {
//        button  : "#msnext"
// },
    infinite: true,
    mousewheel: true,
    delay: 3000,
    timeoutDuration: 5000,
    items: {
      visible: 1,
      height: 300
    },
    scroll: {
      easing: 'quadratic',
      fx: "fade",
      duration: 1200,
      pauseOnHover: true
    },
    swipe: {
      onMouse: true,
      onTouch: true
    },
    onBefore: function() {
      $("#prev2").addClass("animated fadeInDown");
      $("#next2").addClass("animated fadeInDown");
    }
  });


  //Newlsetter Ajax call
  $('#submit_newsletter').on("click", function() {
    var emailReg = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z0-9\-]+\.)+([a-zA-Z]{2,4})))$/;
    var emailaddress = $("#newsletter_email").val();

    //Email validation
    if (emailaddress == '') {
      $(".subscribe p, .newsletter_error").remove();
      $("#newsletter_form").before('<div class="newsletter_error">&#x2717;&nbsp; Your email can not be blank.</div>');
      return false;
    } else if (!emailReg.test(emailaddress)) {
      $(".subscribe p, .newsletter_error").remove();
      $("#newsletter_form").before('<div class="newsletter_error">&#x2717;&nbsp;Please make sure you email is in correct format.</div>')
      return false;
    }

    $(".contact-us-form p, .contactus_error").remove();
    //Ajax Submit
    var values = $('#newsletter_form').serialize();
    $('#newsletter_form').html('<div id="loading"><img src="http://activeprospect.com/wp-content/themes/apscrolling/images/ajax-loader.gif"></div>');
    $.ajax({
      type: 'POST',
      url: 'http://activeprospect.com/wp-content/themes/apscrolling/process.php',
      data: values,
      dataType: 'json',
       // beforeSend: function() {
       //   $('#newsletter_form').html('<div id="loading"><img src="http://activeprospect.com/wp-content/themes/apscrolling/images/ajax-loader.gif"></div>');
       // },
      complete: function() {
        $('#newsletter_form').html('<div style="color:#fff">Thanks!</div>');
      }
    });
  });

 //Contact Us Ajax Call
  $('#submit_contactus').on("click", function() {

    var emailReg = /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z0-9\-]+\.)+([a-zA-Z]{2,4})))$/;
    var emailaddress = $(".email").val();
    var phoneReg = /^(1-?)?(([2-9]\d{2})|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/;
    var phone = $(".phone2").val();

    if (!/\D$/.test($(".first_name").val())) {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your first name.</div>');
      return false;
    }
    if (!/\D$/.test($(".last_name").val())) {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your last name.</div>');
      return false;
    }

    if (emailaddress == '') {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your email.</div>');
      return false;
    } else if (!emailReg.test(emailaddress)) {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please make sure your email is in correct format.</div>');
      return false;
    }
    if (phone == '') {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your phone number.</div>');
      return false;
    } else if (!phoneReg.test(phone)) {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please make sure you\'ve entered your phone number.</div>');
      return false;
    }
    if ($(".company").val() == "") {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your company name.</div>');
      return false;
    }
    if ($(".website").val() == "") {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please enter your company\'s website.</div>');
      return false;
    }
    if ($('#found_input option:selected').val() == '') {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please tell us how you heard of us. </div>');
      return false;
    }

    $(".contact-us-form p, .contactus_error").remove();

    //Ajax Submit
    var dataString = $("#contactus_form").serialize();
    $('#contactus_form').html('<div id="loading"><img src="http://activeprospect.com/wp-content/themes/apscrolling/images/ajax-loader.gif"></div>');
    $.ajax({
      type: 'POST',
      url: 'http://activeprospect.com/wp-content/themes/apscrolling/process.php',
      data: dataString,
      dataType: 'json',
      complete: function() {
        $('#contactus_form').html('<div style="color:#fff">Thanks!</div>');
      }
    });
  });
});