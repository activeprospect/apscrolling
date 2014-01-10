jQuery(document).ready(function($) {

  $(function() { // run after page loads
    $('.menu-primary-container ul').find('li.current-menu-item, .home li#menu-item-27').addClass('active').prev('li').end();
    $('body .home').find('.menu-primary-container li:first-child').addClass('active');
  });

  $(function() { // run after page loads
    $('#ljsubpageswidget-2 ul').find('li.current_page_item').addClass('subactive')

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


  if ($("html").hasClass("ie8")) {
    $("section#team li:nth-child(odd)").addClass('list-margin');
    $("section.team li:nth-child(odd)").addClass('list-margin');
  };

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
	$('#loading')
			.hide() 
	    .ajaxStart(function() {
	        $(this).show();
	    })
	    .ajaxStop(function() {
	        $(this).hide();
	    });
	
	
  //Newlsetter Ajax call
  $('#submit_newsletter').click(function() {
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		var emailaddress = $("#email").val();
		
		//Email validation
		if(emailaddress == '') {
			if(emailaddress == '') {
					alert ('Your email can not be blank');
					event.preventDefault();	
			}
			else if(!emailReg.test(emailaddress)) {
					alert ('Please make sure you email is in correct format.');
					event.preventDefault();	
			}
		}
			
		var values = $('#newsletter_form').serialize();
		
    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/activeprospect/www/wp-content/themes/activeprospect2/process.php',
      data:  values,
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
  $('#submit_contactus').click(function() {
		 var dataString = $("#contactus_form").serialize();
    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/activeprospect/www/wp-content/themes/activeprospect2/process.php',
      data: dataString,
      dataType: 'json',
      async: false,
      success: function(d) {
        $('#contactus_form').html('Success');
      },
      beforeSend: function() {
        // Code to display spinner
   
      },
      complete: function() {
        $('#contactus_form').html('Success');
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