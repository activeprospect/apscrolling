jQuery(document).ready(function($) {



  function DropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.dropdown > li');
    this.val = '';
    this.index = -1;
    this.initEvents();
  }
  DropDown.prototype = {
    initEvents: function() {
      var obj = this;

      obj.dd.on('click', function(event) {
        $(this).toggleClass('active');
        return false;
      });

      obj.opts.on('click', function() {
        var opt = $(this);
        obj.val = opt.text();
        obj.index = opt.index();
        obj.placeholder.text('Heard of us through: ' + obj.val);
      });
    },
    getValue: function() {
      return this.val;
    },
    getIndex: function() {
      return this.index;
    }
  }

  $(function() {
    var dd = new DropDown($('#dd'));
    $(document).click(function() {
      // home select dropdown
      $('.wrapper-dropdown').removeClass('active');
    });
  });


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

  $(function() {

    $('#firstSlide').fadeIn(1000);
    thequotes();

    function thequotes() {
      quotes = setInterval(function() {
        $('#testimonials .slide').filter(':visible').fadeOut(1000, function() {
          if ($(this).next('li.slide').size()) {
            $(this).next().fadeIn(500);
          } else {
            $('#testimonials .slide').eq(0).fadeIn(500);
          }

        });
      }, 8000);
    }
    // Stops the quote when hovered
    $("#testimonials .slide").hover(function() {
      clearInterval(quotes);
    }, function() {
      thequotes();
    });


  });

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

  if ($("html").hasClass("ie8")) {
    $("section#team li:nth-child(odd)").addClass('list-margin');
    $("section.team li:nth-child(odd)").addClass('list-margin');
  };

  // //Carosuel
//   $("#foo2").carouFredSel({
//     circular: false,
//     infinite: true,
//     auto: true,
//     width: "variable",
//     items: {
//       visible: 4,
//     },
//     scroll: {
//       fx: "fade",
//       duration: 1000,
//     },
//     prev: {
//       button: "#tf_prev",
//       key: "left"
//     },
//     next: {
//       button: "#tf_next",
//       key: "right"
//     },
//     pagination: "#tf_pag"
//   });


  //Carosuel
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