//GOGLE MAP API

function initialize() {

  // Create an array of styles.
  var t = [{
      featureType: "water",
      elementType: "geometry",
      stylers: [{
        color: "#e9e9e9"
  }, {
        lightness: 17
  }]
}, {
      featureType: "landscape",
      elementType: "geometry",
      stylers: [{
        color: "#f5f5f5"
  }, {
        lightness: 20
  }]
}, {
      featureType: "road.highway",
      elementType: "geometry.fill",
      stylers: [{
        color: "#ffffff"
  }, {
        lightness: 17
  }]
}, {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [{
        color: "#ffffff"
  }, {
        lightness: 29
  }, {
        weight: .2
  }]
}, {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [{
        color: "#ffffff"
  }, {
        lightness: 18
  }]
}, {
      featureType: "road.local",
      elementType: "geometry",
      stylers: [{
        color: "#ffffff"
  }, {
        lightness: 16
  }]
}, {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{
        color: "#f5f5f5"
  }, {
        lightness: 21
  }]
}, {
      featureType: "poi.park",
      elementType: "geometry",
      stylers: [{
        color: "#dedede"
  }, {
        lightness: 21
  }]
}, {
      elementType: "labels.text.stroke",
      stylers: [{
        visibility: "on"
  }, {
        color: "#ffffff"
  }, {
        lightness: 16
  }]
}, {
      elementType: "labels.text.fill",
      stylers: [{
        saturation: 36
  }, {
        color: "#333333"
  }, {
        lightness: 40
  }]
}, {
      elementType: "labels.icon",
      stylers: [{
        visibility: "off"
  }]
}, {
      featureType: "transit",
      elementType: "geometry",
      stylers: [{
        color: "#f2f2f2"
  }, {
        lightness: 19
  }]
}, {
      featureType: "administrative",
      elementType: "geometry.fill",
      stylers: [{
        color: "#fefefe"
  }, {
        lightness: 20
  }]
}, {
      featureType: "administrative",
      elementType: "geometry.stroke",
      stylers: [{
        color: "#fefefe"
  }, {
        lightness: 17
  }, {
        weight: 1.2
  }]
}],

    n = {
      lat: 55.879047,
      lng: 36.564767
    },

    i = {
      lat: 55.789843,
      lng: 37.372656
    },
    o = {
      lat: 55.879047,
      lng: 36.564767
    },
    r = {
      lat: 55.879958,
      lng: 36.567237
    };


  e = new google.maps.Map(document.getElementById("map"), {
    center: n,
    zoom: 10,
    scrollwheel: !1
  });


  var s = new google.maps.DirectionsRenderer({
      map: e,
      polylineOptions: {
        strokeWeight: 4,
        strokeColor: "#bdb189"
      },
      suppressMarkers: !0,
      preserveViewport: !0
    }),

    a = {
      destination: r,
      origin: i,
      travelMode: google.maps.TravelMode.DRIVING
    },

    l = new google.maps.DirectionsService;
  l.route(a, function (e, t) {
    t == google.maps.DirectionsStatus.OK && s.setDirections(e)
  });

  var c = "/wp-content/themes/lamansh/img/map-logo.svg";

  new google.maps.Marker({
    map: e,
    position: o,
    icon: c
  });

  e.setOptions({
    styles: t
  });

} //initialize

//-----------------------------------



(function ($) {
  'use strict';

  //SLIDERS

  jQuery(document).ready(function ($) {
    $('.loop').owlCarousel({
      center: true,
      items: 1,
      loop: true,
      margin: 5,
      dots: false,
	  nav: true,
	  navText: ["<", ">"],
      autoplay: true,
	  mouseDrag: false,
      autoplayTimeout: 5000
    });

    $('.infra').owlCarousel({
      items: 1,
      loop: true,
      margin: 5,
      dots: true,
      nav: true,
      autoplay: false,
      navText: ["<", ">"],
      dotsContainer: '#customDots',
      navContainer: '#customNav',
      mouseDrag: false
    });

  });
  //-----------------------------------



  //READ MORE

  $('.fade-box').readmore({
    speed: 300,
    moreLink: '<div class="read-more"><a class="button" href="#">Открыть весь текст</a></div>',
    lessLink: '<div class="read-less"><a class="button" href="#">Скрыть текст</a></div>'
  });

  //-----------------------------------












  //BURGER MENU
  function lamanshMenu() {
    var $trigger = $('.trigger-nav'),
      $menu = $('.trigger-victim');

    $trigger.click(function () {
      $(this).next($menu).slideToggle();
    });

    $(window).resize(function () {
      if ($(window).width() > 767) {

        $menu.removeAttr('style');
      }

    });
  }
  lamanshMenu();


  //-----------------------------------

  
  
  
  
  	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
  
  
  
      $(document).ready(function() {
     
     
       $("a.topLink").click(function() {
          $("html, body").animate({
             scrollTop: $($(this).attr("href")).offset().top + "px"
          }, {
             duration: 500,
             easing: "swing"
          });
          return false;
       });
     
     
    });
  
  
  
  
  

  //TABS CALL

  $(document).ready(function () {
    $(".tabs").lightTabs();
  });


  
  
  
  
}(jQuery));



//TABS JS

(function ($) {
  jQuery.fn.lightTabs = function (options) {

    var createTabs = function () {
      tabs = this;
      i = 0;

      showPage = function (i) {
        $(tabs).children("div").children("div").hide();
        $(tabs).children("div").children("div").eq(i).show();
        $(tabs).children("ul").children("li").removeClass("active");
        $(tabs).children("ul").children("li").eq(i).addClass("active");
      }

      showPage(0);

      $(tabs).children("ul").children("li").each(function (index, element) {
        $(element).attr("data-page", i);
        i++;
      });

      $(tabs).children("ul").children("li").click(function () {
        showPage(parseInt($(this).attr("data-page")));
      });
    };
    return this.each(createTabs);
  };
})(jQuery);

//-----------------------------------
















