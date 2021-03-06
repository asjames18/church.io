//JSHint Validated Custom JS Code by Designova

/*global $:false */
/*global window: false */

(function(){
  "use strict";

//TWITTER INIT (Updated with compatibility on Twitter's new API):
//PLEASE READ DOCUMENTATION FOR INFO ABOUT SETTING UP YOUR OWN TWITTER CREDENTIALS:
$(function ($) {
    $('#ticker').tweet({
        modpath: './twitter/',
        count: 5,
        loading_text: 'loading twitter feed flame...',
        username:'designovastudio'
        /* etc... */
    });
  }); 


//VIEWPORT DETECTION:
$(function ($) {
    var viewportHeight = $(window).height();
    $('.intro').css('height',viewportHeight);
    $('.intro').css('padding-top',viewportHeight/3);
});


//MASONRY PORTFOLIO INIT:
$(function () {

    var $container = $('#container');

    $container.isotope({
        itemSelector: '.element',
        layoutMode: 'masonry'
    });


    var $optionSets = $('#options .option-set'),
        $optionLinks = $optionSets.find('a');

    $optionLinks.click(function () {
        var $this = $(this);
        // don't proceed if already selected
        if ($this.hasClass('selected')) {
            return false;
        }
        var $optionSet = $this.parents('.option-set');
        $optionSet.find('.selected').removeClass('selected');
        $this.addClass('selected');

        // make option object dynamically, i.e. { filter: '.my-filter-class' }
        var options = {},
            key = $optionSet.attr('data-option-key'),
            value = $this.attr('data-option-value');
        var changeLayoutMode;
        // parse 'false' as false boolean
        value = value === 'false' ? false : value;
        options[key] = value;
        if (key === 'layoutMode' && typeof changeLayoutMode === 'function') {
            // changes in layout modes need extra logic
            changeLayoutMode($this, options);
        } else {
            // creativewise, apply new options
            $container.isotope(options);
        }

        return false;
    });


});


/*===========================================================*/
/*  Colorbox
/*===========================================================*/
$(function () {
    
    // var viewportHeight = $(window).height();
    // var introMargin = (viewportHeight / 3) - (viewportHeight / 12);
    // $('#intro').height(viewportHeight);
    // $('.promo-one').css('margin-top', introMargin);
    //Examples of how to assign the ColorBox event to elements
    $(".zoom-info").colorbox({
        rel: 'group1',
        transition: "fade",
        speed: 1700,
        onComplete: function () {
            $('.flexslider').flexslider({
                animation: "slide",
                controlNav: false,
                directionNav: true

            });
        }
    });

});




$(function() {
    $(' .da-thumbs > li ').each( function() { $(this).hoverdir({hoverDelay : 75}); } );
});




	
/*===========================================================*/
/*	Google Map
/*===========================================================*/		
function initialize() {

            var latlng = new google.maps.LatLng(30.15465,-94.19154);
            var settings = {
                zoom: 12,
                center: latlng,
                mapTypeControl: false,
				scrollwheel: false,
                mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU},
                navigationControl: false,
                navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                mapTypeId: google.maps.MapTypeId.ROADMAP};
            var map = new google.maps.Map(document.getElementById("map_canvas"), settings);
			
            var contentString = '<div id="content">'+
                '<div id="siteNotice">'+
                '</div>'+
                '<h2 id="firstHeading" class="firstHeading">We are here</h2>'+
                '<div id="bodyContent">'+
                '<p>Have a nice visit!</p>'+
                '</div>'+
                '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            
            var companyImage = new google.maps.MarkerImage('images/marker.png',
                new google.maps.Size(58,63),<!-- Width and height of the marker -->
                new google.maps.Point(0,0),
                new google.maps.Point(35,20)<!-- Position of the marker -->
            );
    
            
    
            var companyPos = new google.maps.LatLng(30.15465,-94.19154);
    
            var companyMarker = new google.maps.Marker({
                position: companyPos,
                map: map,
                icon: companyImage,               
                title:"We are here",
                zIndex: 3});
            
            
            
            google.maps.event.addListener(companyMarker, 'click', function() {
                infowindow.open(map,companyMarker);
            });
        }					
		






//FANCYBOX - LIGHTBOX
//=======================

$("a.fancythumb").fancybox({
                'overlayShow'   : false,
                'transitionIn'  : 'elastic',
                'transitionOut' : 'elastic'
            });

//WAYPOINTS - INTERACTION
//=======================

    //Triggering Navigation as Sticky when scrolled to second section:
    $('.beneath-intro').waypoint(function (event, direction) {
        if (direction === 'down') {
            $('.navigation').addClass('sticky').slideDown();
            $('#scroll').stop().animate({bottom: '-9999px'}, 700);
        } else {
            $('#scroll').stop().animate({bottom: '0px'}, 700);
            $('.navigation').slideUp().removeClass('sticky');
        }
    }, { offset: 160 });



    $('.page').waypoint(function (event, direction) {
        var colSwatch = $(this).attr('data-live-color');
        if (direction === 'down') {
            $('#navigation').addClass('bg-'+colSwatch);
        } else {
            $('#navigation').removeClass('bg-'+colSwatch);
        }
    }, { offset: 50 });


    $('.news-img').mouseenter(function(){
        $(this).find('.news-date').slideUp();
    });
    $('.news-img').mouseleave(function(){
        $(this).find('.news-date').slideDown();
    });

    //Nav Menu Links Highlights and Active Transition
    $('.master-section').mouseenter(function () {
        var pageInd = $(this).attr('id');
        $('.navigation ul li > a').removeClass('lighted');
        $('#'+pageInd+'-linker').addClass('lighted');
    });

    $('.navigation ul li > a').click(function () {
        $('.navigation ul li > a').removeClass('lighted');
        $(this).addClass('lighted');
    });

    //Portfolio Hover
    $('.folio-item').mouseenter(function () {
        $(this).find('img').css('opacity', '0.2');
        $(this).find('.folio-trigger-icon').fadeIn();
        $(this).find('.titles').fadeIn();
    });

    $('.folio-item').mouseleave(function () {
        $('.folio-item').find('.titles').fadeOut();
        $(this).find('.folio-trigger-icon').fadeOut();
        $('.folio-item').find('img').css('opacity', '1');
    });


    $('.element > img, .service-item, .about-feat').mouseleave(function () {
        $(this).addClass('remove-zoom');
    });

    //Intro Interactions
    $('#intro-nav a').mouseenter(function(){
        // $(this).find('img').animate({opacity : 0});
        // $(this).find('h6').animate({opacity : 1});
    });



})();