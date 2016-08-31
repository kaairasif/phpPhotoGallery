
(function($) {
  "use strict";
   
    //Author scripts
    $(document).ready( function () {

      /*-------------------------------------------------*/
      /* =  preloader
      /*-------------------------------------------------*/
      $(window).load(function() { 
        $("#preloader").fadeOut("slow"); 
      });

     $('[data-toggle="tooltip"]').tooltip();

      /*-------------------------------------------------*/
    /* =  animate numbers
    /*-------------------------------------------------*/
    $('.fullWidthSection').one('inview', function(event, isInView, visiblePartX, visiblePartY){
      $('#lines1').animateNumber({ 
        number: 226,
        easing: 'easeInQuad',
                   
      },2000);

      $('#lines2').animateNumber({ number: 356},2000);

      $('#lines3').animateNumber({ number: 195},2000);

      $('#lines4').animateNumber({ number: 583},1000);

      $('.fullWidthSection').addClass('fadeInUp');
    });



  

    /*-------------------------------------------------*/
    /* =  animate objects
    /*-------------------------------------------------*/

    var $fadeInUp = $('');
    var $fadeInLeft = $('');
    var $fadeInRight = $('');
    var $fadeIn = $('.subheader-section, .about-section, .filter-section, .heading-slogan-section, .video-section, .pricing-section, .customers-section, .follow-section, .team-section, .blog-section, .contact-section, .map, .theme, .social');


    // InView - fadeIn

    if ($(window).width() >= 1024) {
      $fadeIn.css('opacity', 0);
      $fadeInUp.css('opacity', 0);
      $fadeInLeft.css('opacity', 0);
      $fadeInRight.css('opacity', 0);
      
      $fadeIn.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeIn'); }
      });

      // InView - fadeInDown
      $fadeInUp.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInUp'); }
      });
      // InView - fadeInLeft
      $fadeInLeft.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInLeft'); }
      });
      // InView - fadeInRight
      $fadeInRight.one('inview', function(event, visible) {
        if (visible) { $(this).addClass('animated fadeInRight'); }
      });
  
      
    }else {

      $fadeIn.css('opacity', 1);
      $fadeInUp.css('opacity', 1);
      $fadeInLeft.css('opacity', 1);
      $fadeInRight.css('opacity', 1);
      
    } 

    $(window).on('resize', function() {
      var screen_size = $(window).width();   

      if (screen_size >= 1024) {

        $fadeIn.css('opacity', 0);
        $fadeInUp.css('opacity', 0);
        $fadeInLeft.css('opacity', 0);
        $fadeInRight.css('opacity', 0);
        
        $fadeIn.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeIn'); }
        });

        // InView - fadeInDown
        $fadeInUp.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInUp'); }
        });
        // InView - fadeInLeft
        $fadeInLeft.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInLeft'); }
        });
        // InView - fadeInRight
        $fadeInRight.one('inview', function(event, visible) {
          if (visible) { $(this).addClass('animated fadeInRight'); }
        });

      }else {

        $fadeIn.css('opacity', 1);
        $fadeInUp.css('opacity', 1);
        $fadeInLeft.css('opacity', 1);
        $fadeInRight.css('opacity', 1);
        
      }
    }).trigger('resize');




     $('.slickSlider').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      fade : true,
     });
     $('.c_content').eq($('.slick-active').index()).addClass('animated fadeInDown'); 




    var $grid = $('.grid').masonry({
      columnWidth: 160,
      itemSelector: '.grid-item'
    });

  $('.prepend-button').on( 'click', function() {
    var elems = [ getItemElement(), getItemElement(), getItemElement(), getItemElement() ];
    // make jQuery object
    var $elems = $( elems );
    $grid.prepend( $elems ).masonry( 'prepended', $elems );
  });

// create <div class="grid-item"></div>
function getItemElement() {
  var elem = document.createElement('div');
  var wRand = Math.random();
  var hRand = Math.random();
  var widthClass = wRand > 0.8 ? 'grid-item--width3' : wRand > 0.6 ? 'grid-item--width2' : '';
  var heightClass = hRand > 0.85 ? 'grid-item--height4' : hRand > 0.6 ? 'grid-item--height3' : hRand > 0.35 ? 'grid-item--height2' : '';
  elem.className = 'grid-item ' + widthClass + ' ' + heightClass;
  return elem;
}




	    /*-------------------------------------------------*/
	    /* =  scroll to top, scroll to specific anchor 
	    /*-------------------------------------------------*/
	    var to_top_icon = $('#top');
	    $(to_top_icon).hide();
	        $(window).scroll(function(){
	        if ($(this).scrollTop() > 150 ) {
	        	to_top_icon.fadeIn();
	        } else {
	        	to_top_icon.fadeOut();
	        }
	    });
	    $("#top").on("click", function() {
		  $("html, body").animate({ scrollTop: 0 }, "slow");
		  return false;
		});    
       
        
        /*-------------------------------------------------*/
	    /* =  single page nav
	    /*-------------------------------------------------*/
	    
	    $(".metanav").sticky({topSpacing:0});
	    $('.metanav, .item_info, .basic, .silver, .gold').onePageNav({
		    currentClass: 'current',
		    changeHash: false,
		    scrollSpeed: 750,
		    scrollThreshold: 0.5,
		    filter: '',
		    easing: 'swing',
		    begin: function() {
		        //I get fired when the animation is starting
		    },
		    end: function() {
		        //I get fired when the animation is ending
		    },
		    scrollChange: function($currentListItem) {
		        //I get fired when you enter a section and I pass the list item of the section
		    }
		});


        //owl carousel.  
		$("#innerCarousel").owlCarousel({
			items : 3,
			itemsDesktop : [1199, 3],
			itemsDesktopSmall : [979, 2],
			autoPlay : true,
			itemsTabletSmall : true,
            itemsMobile : [767, 1],
			stopOnHover : true,
			margin: 20,
            autoHeight : true,
		});

		$("#packageCarousel").owlCarousel({
			items : 3,
			itemsDesktop : [1199, 3],
			itemsDesktopSmall : [979, 2],
			autoPlay : true,
			itemsTabletSmall : true,
            itemsMobile : [479, 1],
			stopOnHover : true,
			margin: 20,
            autoHeight : true,
            navigation: true
		});

        // Caption show/hide
		$('.owl-item .caption').hide();

		$('.owl-item').hover(function(){		  
		 $(this).find('.caption').slideDown('fast');		  
		},function(){
		$(this).find('.caption').slideUp('fast');		  
		});

		//select picker
		$('.selectpicker').selectpicker({
		  size: 4
		});

        //filtering 
		$('#filteringItems').mixItUp();
		
    });


    $(window).load(function(){ 
	    /*-------------------------------------------------*/
	    /* =  custom scrollbar calling  
	    /*-------------------------------------------------*/
        $("#img_scroll").mCustomScrollbar({
			axis:"x",
			theme:"rounded-dark",
			scrollbarPosition:"outside",
			autoExpandScrollbar:false,
			advanced:{autoExpandHorizontalScroll:true}
		});
    }); 
  
  $(document).ready(function () {
  	    function smalDevices(){
			  if ($(window).width() < 992) {

			  } else {			   
			    /*-------------------------------------------------*/
			    /* =  bootstrap menu show on hover
			    /*-------------------------------------------------*/
		        $('ul.nav li.dropdown').hover(function(){
			       $(this).children('ul.dropdown-menu').fadeIn("medium"); 
			       }, function(){
			       $(this).children('ul.dropdown-menu').fadeOut("medium"); 
			    });

			  }
			}
	  //on load
	  smalDevices();

	  //on resize
	  $(window).resize(function(){
	    smalDevices();
	});

    /*-------------------------------------------------*/
    /* =  add text in button
    /*-------------------------------------------------*/
    $('#filters .filter').on('click', function(){ 
        var text = $(this).children('i').html(); 
        $('.filter-section .select-cat').html(text);
    });



    /*-------------------------------------------------*/
    /* =  Close navbar on click
    /*-------------------------------------------------*/
    $('.select-cat').on('click', function(){
      $(".filters").toggleClass('active');
    });
    $('.filter').on('click', function(){
      $('.filters').toggleClass('active');
    });

    

    /*-------------------------------------------------*/
    /* =  Close navbar on click
    /*-------------------------------------------------*/
    $(".bars").on("click", function() {
      $("nav").toggleClass('active');
      $("html").toggleClass('active-sidebar');
      $(".mobile-overlay").toggleClass('active');
    });
    


    $('header nav a').on('click', function(){
      $('nav').removeClass('active'); 
      $("html").removeClass('active-sidebar');
      $(".mobile-overlay").removeClass('active');
    });

    

    /*-------------------------------------------------*/
    /* =  img to background
    /*-------------------------------------------------*/
    $(".white-popup img , .isotope-item >a >img").each(function(i, elem) {
      var img = $(elem);
      var div = $("<div />").css({
        background: "url(" + img.attr("src") + ") no-repeat",
        width: img.width() + "px",
        height: img.height() + "px"
      });
      img.replaceWith(div);
      $(div).addClass('browse-images')
    });

    /*-------------------------------------------------*/
    /* =  Izotope
    /*-------------------------------------------------*/
    $.Isotope.prototype._getCenteredMasonryColumns = function() {
      this.width = this.element.width();
      
      var parentWidth = this.element.parent().width();
      
                    // i.e. options.masonry && options.masonry.columnWidth
      var colW = this.options.masonry && this.options.masonry.columnWidth ||
                    // or use the size of the first item
                    this.$filteredAtoms.outerWidth(true) ||
                    // if there's no items, use size of container
                    parentWidth;
      
      var cols = Math.floor( parentWidth / colW );
      cols = Math.max( cols, 1 );

      // i.e. this.masonry.cols = ....
      this.masonry.cols = cols;
      // i.e. this.masonry.columnWidth = ...
      this.masonry.columnWidth = colW;
    };
    
    $.Isotope.prototype._masonryReset = function() {
      // layout-specific props
      this.masonry = {};
      // FIXME shouldn't have to call this again
      this._getCenteredMasonryColumns();
      var i = this.masonry.cols;
      this.masonry.colYs = [];
      while (i--) {
        this.masonry.colYs.push( 0 );
      }
    };

    $.Isotope.prototype._masonryResizeChanged = function() {
      var prevColCount = this.masonry.cols;
      // get updated colCount
      this._getCenteredMasonryColumns();
      return ( this.masonry.cols !== prevColCount );
    };
    
    $.Isotope.prototype._masonryGetContainerSize = function() {
      var unusedCols = 0,
          i = this.masonry.cols;
      // count unused columns
      while ( --i ) {
        if ( this.masonry.colYs[i] !== 0 ) {
          break;
        }
        unusedCols++;
      }
      
      return {
            height : Math.max.apply( Math, this.masonry.colYs ),
            // fit container to columns that have been used;
            width : (this.masonry.cols - unusedCols) * this.masonry.columnWidth
          };
    };
     $('#filter_content').isotope();

    // cache filter_content
    var $filter_content = $('#filter_content');
    // initialize isotope
    $filter_content.isotope({
      animationOptions: {
         duration: 750,
         queue: false
       }
    });
    // filter items when filter link is clicked
    $('.filters a').click(function(){
      var selector = $(this).attr('data-filter');
      $filter_content.isotope({ filter: selector });
      return false;
    });

    /*-------------------------------------------------*/
    /* =  video 
    /*-------------------------------------------------*/
    $(function(){
      if (self.location.href == top.location.href){
      }

      $('#bgndVideo').on("YTPStart",function(e){
         var currentTime = e.time;
         $("#pause").show();
         $("#play").hide();
         $('.mbYTP_wrapper').removeClass('active');

      });

      $('#bgndVideo').on("YTPUnstarted",function(e){
         var currentTime = e.time;
         $("#pause").hide();
         $("#play").show();
         $('.mbYTP_wrapper').addClass('active');
      });
      $('#bgndVideo').on("YTPPause",function(e){
         var currentTime = e.time;
         $("#pause").hide();
         $("#play").show();
      });
      //debug functions
      $("#bgndVideo").on("YTPStart", function(){
          $("#eventListener").html("YTPStart");
          $("#eventListener").append(" :: (state= "+ $("#bgndVideo").getPlayer().getPlayerState()+")");
          $("#eventListener").append(" :: (quality= "+ $("#bgndVideo").getPlayer().getPlaybackQuality()+")");
      });
      $("#bgndVideo").on("YTPLoop", function(e){
          $("#eventListener").html("YTPLoop");
          $("#eventListener").append(" :: (state= "+ $("#bgndVideo").getPlayer().getPlayerState()+")");
          $("#eventListener").append(" :: "+ e.counter);
      });
      $("#bgndVideo").on("YTPEnd", function(){
          $("#eventListener").html("YTPEnd");
          $("#eventListener").append(" :: (state= "+ $("#bgndVideo").getPlayer().getPlayerState()+")");
          console.debug("YTPEnd")
      });
      $("#bgndVideo").on("YTPPause", function(){
          $("#eventListener").html("YTPPause");
          $("#eventListener").append(" :: (state= "+ $("#bgndVideo").getPlayer().getPlayerState()+")");
      });
      $("#bgndVideo").on("YTPBuffering", function(){
          $("#eventListener").html("YTPBuffering");
          $("#eventListener").append(" :: (state= "+ $("#bgndVideo").getPlayer().getPlayerState()+")");
      });

    });




	/*-------------------------------------------------*/
    /* =  magnific popup 
    /*-------------------------------------------------*/
    var close_icon = '<svg fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" \
         viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve"> \
      <path fill-rule="evenodd" clip-rule="evenodd" d="M7.3,42.7c-9.8-9.8-9.8-25.6,0-35.4c9.8-9.8,25.6-9.8,35.4,0 \
        c9.8,9.8,9.8,25.6,0,35.4C32.9,52.4,17.1,52.4,7.3,42.7z M41.3,8.7c-9-9-23.5-9-32.5,0c-9,9-9,23.5,0,32.5c9,9,23.5,9,32.5,0 \
        C50.2,32.3,50.2,17.7,41.3,8.7z"/> \
      <path fill-rule="evenodd" clip-rule="evenodd" d="M32.5,16l1.5,1.5L17.5,34L16,32.5L32.5,16z"/> \
      <path fill-rule="evenodd" clip-rule="evenodd" d="M34,32.5L32.5,34L16,17.5l1.5-1.5L34,32.5z"/> \
      </svg>';

    $('.popup-modal').magnificPopup({
      type:'inline',
      midClick: true,
      removalDelay: 50,
      callbacks: {
        open: function() {
          $('.mfp-close').empty().append(close_icon);
        },
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
           this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      }
    }); 


    $('.mfp-close').magnificPopup({
      mainClass: 'mfp-with-fade',
      removalDelay: 500, //delay removal by X to allow out-animation
      callbacks: {
        beforeClose: function() {
            this.content.addClass('hinge');
        }, 
        close: function() {
            this.content.removeClass('hinge'); 
        }
      },
      midClick: true
    });

    $('.popup-gallery').magnificPopup({
      delegate: 'a',
      type: 'image',
      removalDelay: 500,
      tLoading: 'Loading image #%curr%...',
      mainClass: 'mfp-img-mobile',
      fixedContentPos: true,
      gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
      },
      image: {
        tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
        titleSrc: function(item) {
          return item.el.attr('title') + '<small></small>';
        }
      },
      callbacks: {
        open: function() {
          $('.mfp-close').empty().append(close_icon);
        },
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
           this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      }
    });

    $('.popup-youtube, .popup-vimeo').magnificPopup({
      type: 'iframe',
      // mainClass: 'mfp-fade',
      removalDelay: 50,
      preloader: false,
      fixedContentPos: true,
      callbacks: {
        open: function() {
          $('.mfp-close').empty().append(close_icon);
        },
        beforeOpen: function() {
          // just a hack that adds mfp-anim class to markup 
           this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
           this.st.mainClass = this.st.el.attr('data-effect');
        }
      }
    });
   
    $('.careerOpeningsWrap').hide();
    $('.c_o').on('click', function(event) {
    event.preventDefault();
	  $('.careerOpeningsWrap').animate({
	        'height': 'toggle'
	    }, 200); });




	});

})(jQuery);    