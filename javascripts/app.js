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


  if ($("html").hasClass("ie8")) {
    $("section#team li:nth-child(odd)").addClass('list-margin');
    $("section.team li:nth-child(odd)").addClass('list-margin');
  };


  $(function() { // run after page loads
    $('.menu-primary-container ul').find('li.current-menu-item, .home li#menu-item-27').addClass('active').prev('li').end();
    $('body .home').find('.menu-primary-container li:first-child').addClass('active');
  });

  $(function() { // run after page loads
    $('#ljsubpageswidget-2 ul').find('li.current_page_item').addClass('subactive');

    //jobs pages highlight Careers tab
    $(".page-template-aboutus-php").find(".menu-item-90").addClass("active").prev('li').addClass('rem-seperator');
    $(".parent-pageid-316").find(".menu-item-335").addClass("active").prev('li').addClass('rem-seperator');
    $('.page-id-289, .page-id-291,.page-id-304,.page-id-333').find('li.page-item-292').addClass('subactive');
    $(".single-post").find(".menu-item-384").addClass("active").prev('li').addClass('rem-seperator');
    $(".single-post").find(".menu-item-27").addClass('add-seperator');


  });

  //Clickable li
  $(function() { // run after page loads
    $('ul.container li, ul.productlist li').css('cursor', 'pointer');
    $('ul.container li, ul.productlist li').click(function() {
      window.open($(this).find("a").attr("href"));
      return false;
    });
  });



  //Main Carosuel
  $('#heroes').carouFredSel({
    auto: true,
    prev: '#prev',
    next: '#next',
    pagination: "#mainpager",
    infinite: true,
    mousewheel: true,
    delay: 3000,
    timeoutDuration: 5000,
    items: {
      visible: 1,
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
      $("#prev").addClass("animated fadeInDown");
      $("#next").addClass("animated fadeInDown");
    }
  })
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
    prev: '#prev2',
    next: '#next2',
    pagination: "#pager2",
    infinite: true,
    mousewheel: true,
    delay: 3000,
    timeoutDuration: 5000,
    items: {
      visible: 3,
      height: 385,
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


  // Ajax loading gif
  $('#loading').hide().ajaxStart(function() {
    $(this).show();
  }).ajaxStop(function() {
    $(this).hide();
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
    //Ajax Submit
    var values = $('#newsletter_form').serialize();
    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/activeprospect/www/wp-content/themes/activeprospect2/process.php',
      data: values,
      dataType: 'json',
      async: false,
      beforeSend: function() {
        $('#newsletter_form').text('Loading...');
      },
      complete: function() {
        $('#newsletter_form').html('Cool beans');
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
    if ($('.found-select').length == 0 || $('.found-select').val() == "") {
      $(".contact-us-form p, .contactus_error").remove();
      $("#contactus_form").before('<div class="contactus_error">&#x2717;&nbsp;Please tell us how you heard of us. </div>');
      return false;
    }


    //Ajax Submit
    var dataString = $("#contactus_form").serialize();
    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/activeprospect/www/wp-content/themes/activeprospect2/process.php',
      data: dataString,
      dataType: 'json',
      async: false,
      beforeSend: function() {
        $('#contactus_form').text('Loading...');
      },
      complete: function() {
        $('#contactus_form').html('Cool beans');
      }
    });
  });


  //Footer Form
  $("#found_input").change(function() {
    $(this).addClass('white');
  });

  // Style Tags
  $(function() { // run after page loads
    $('p.tags a').wrap('<span class="st_tag" />');
  });


  // Toggle Slides
  $(function() { // run after page loads
    $(".toggle_container").hide();
    //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
    $("p.trigger").click(function() {
      $(this).toggleClass("active").next().slideToggle("normal");
      return false; //Prevent the browser jump to the link anchor
    });
  });

  // valid XHTML method of target_blank
  $(function() { // run after page loads
    $('a[rel*=external]').click(function() {
      window.open(this.href);
      return false;
    });
  });




/* Tabs Activiation
    ================================================== */
  var tabs = $('ul.tabs');
  tabs.each(function(i) {
    //Get all tabs
    var tab = $(this).find('> li > a');
    $("ul.tabs li:first").addClass("active").fadeIn('fast'); //Activate first tab
    $("ul.tabs li:first a").addClass("active").fadeIn('fast'); //Activate first tab
    $("ul.tabs-content li:first").addClass("active").fadeIn('fast'); //Activate first tab
    tab.click(function(e) {

      //Get Location of tab's content
      var contentLocation = $(this).attr('href') + "Tab";

      //Let go if not a hashed one
      if (contentLocation.charAt(0) == "#") {

        e.preventDefault();

        //Make Tab Active
        tab.removeClass('active');
        $(this).addClass('active');

        //Show Tab Content & add active class
        $(contentLocation).show().addClass('active').siblings().hide().removeClass('active');

      }
    });
  });

});