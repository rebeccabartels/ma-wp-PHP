 jQuery(document).ready(function() {
  jQuery("#see-who").click(function(){
    jQuery(".event-search-bx").addClass("show-search");
  });
              jQuery('.slide-01').owlCarousel({
                items: 1,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:0,
				dots: false,
              });
			  jQuery('.upcoming-slider').owlCarousel({
                items: 1,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:0,
				dots: false,
              });
			  jQuery('.article-slider').owlCarousel({
                items: 2,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:0,
				dots: false,
              });
			  jQuery('.benefit-slider').owlCarousel({
                items: 1,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:0,
				dots: false,
              });
			  
			  jQuery('.home-partner-slider').owlCarousel({
                items: 7,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					1280:{
						items:5,
						nav:true,
						loop:false
					}
				}
              });
			  jQuery('.home-ads-slider').owlCarousel({
                items:5,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					991:{
						items:4,
						nav:true,
						loop:false
					},
					1200:{
						items:5,
						nav:true,
						loop:false
					}
				}
              });
			  
			  jQuery('.testimonial-slider').owlCarousel({
                items:5,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					991:{
						items:4,
						nav:true,
						loop:false
					}
					
				}
              });
			  
			  jQuery('.mlife-slider').owlCarousel({
                items:4,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					991:{
						items:4,
						nav:true,
						loop:false
					}
					
				}
              });
			  
			  jQuery('.leader-slider').owlCarousel({
                items:5,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:3,
						nav:false
					},
					991:{
						items:4,
						nav:true,
						loop:false
					},
					1200:{
						items:5,
						nav:true,
						loop:false
					}
					
				}
              });
			   jQuery('.event-loc-slider').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:5,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
						nav:true
					},
					600:{
						items:2,
						nav:false
					},
					1200:{
						items:3,
						nav:true,
						loop:false
					}
					
				}
              });

            });
var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};

jQuery(window).scroll(function($) {    
    var scroll = jQuery(window).scrollTop();

    if (scroll >=50) {
        jQuery("body").addClass("scroll-open");
    } else {
        jQuery("body").removeClass("scroll-open");
    }
});


// menu js end here 

    function t(t) {
        jQuery(t).bind("click", function (t) {
            t.preventDefault();
            jQuery(this).parent().fadeOut()
        })
    }
    jQuery(".dropdown-toggle").click(function (t) {
        var t = jQuery(this).parents(".button-dropdown").children(".dropdown-menu").is(":hidden");
        jQuery(".button-dropdown .dropdown-menu").hide();
        jQuery(".button-dropdown .dropdown-toggle").removeClass("active");
        if (t) {
            jQuery(this).parents(".button-dropdown").children(".dropdown-menu").toggle().parents(".button-dropdown").children(".dropdown-toggle").addClass("active")
        }
    });
    jQuery(document).bind("click", function (t) {
        var n = jQuery(t.target);
        if (!n.parents().hasClass("button-dropdown")) jQuery(".button-dropdown .dropdown-menu").hide();
    });
    jQuery(document).bind("click", function (t) {
        var n = jQuery(t.target);
        if (!n.parents().hasClass("button-dropdown")) jQuery(".button-dropdown .dropdown-toggle").removeClass("active");
    })



// partners slider js start here //
    var owl;

    function customPager() {

        $.each(this.owl.userItems, function (i) {

            var titleData = jQuery(this).find('h3').text();
            var paginationLinks = jQuery('.owl-controls .owl-pagination .owl-page span');

            $(paginationLinks[i]).append(titleData).wrap('<h3 class="slideTitle"></h3>');

        });
    }

    jQuery('.homeCarousel').owlCarousel({
        autoPlay: 4000,
        navigation: true,
        slideSpeed: 3000,
        paginationSpeed: 2000,
        items: 1,
        afterInit: customPager,
        afterUpdate: customPager,
        navigationText : false
    });

    //option to move owl button through DOM
    //$('.homeCarousel .owl-buttons').detach().appendTo('.homeCarousel');

