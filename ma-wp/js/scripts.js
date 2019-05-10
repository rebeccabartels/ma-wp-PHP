 jQuery(document).ready(function() {
  jQuery("#see-who").click(function(){
   jQuery(".event-search-bx").addClass("show-search");
  });

  jQuery(".filter-btn").click(function(){
    jQuery(".filters-option").toggleClass("filter-show");
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
				autoplay:true 
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
                animateOut: 'fadeOut',
				animateIn: 'fadeIn', // add this
				nav: true,
                loop: true,
                margin:0,
				autoplay:true,
				slideSpeed: 15000,
				dots: false,
              });
			  
			  jQuery('.ar-dairy-slider').owlCarousel({
                items: 1,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:0,
				dots: false,
              });
			  
			  jQuery('.home-partner-slider').owlCarousel({
                items: 7,
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
					},
					600:{
						items:3,
						
					},
					1280:{
						items:5,
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
					},
					600:{
						items:3,
					},
					991:{
						items:4,
					},
					1200:{
						items:5,
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
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:4,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-01').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop:false,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-02').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-03').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-04').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-05').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  
			  jQuery('.testimonial-slider-06').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			   jQuery('.testimonial-slider-07').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1, 
					},
					600:{
						items:2,
					},
					991:{
						items:3,
					}
					
				}
				
              });
			  jQuery('.mlife-slider').owlCarousel({
                items: 4,
				nav: true,
                loop: true,
                margin:15,
				dots: false,
				autoplay: false,
				 responsiveClass:true,
				responsive:{
					0:{
						items:2,
					},
					600:{
						items:3,
					},
					991:{
						items:4,
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
					},
					600:{
						items:3,
					},
					991:{
						items:4,
						
					},
					1200:{
						items:5,
						
					}
					
				}
              });
			  
			  
			  
			   jQuery('.event-loc-slider').owlCarousel({
                items:3,
                //animateOut: 'fadeOut',
				nav: true,
                loop: false,
                margin:5,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:2,
					},
					1200:{
						items:3,
					}
					
				}
              });
			  jQuery('.related-post-slider').owlCarousel({
                items:2,
                //animateOut: 'fadeOut',
				nav: true,
                loop: true,
                margin:40,
				dots: false,
				autoplay: 5000,
				 responsiveClass:true,
				responsive:{
					0:{
						items:1,
					},
					600:{
						items:1,
					},
					1200:{
						items:2,
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

/*Filters*/

jQuery( document ).ready(function($) {
    


var $container;
var filters = {};

$(function(){

  $container = $('#container');

  

  $container.isotope();
  // do stuff when checkbox change
  $('#options').on( 'change', function( jQEvent ) {
    var $checkbox = $( jQEvent.target );
    manageCheckbox( $checkbox );

    var comboFilter = getComboFilter( filters );

    $container.isotope({ filter: comboFilter });

    
  });

});

function getComboFilter( filters ) {
  var i = 0;
  var comboFilters = [];
  var message = [];

  for ( var prop in filters ) {
    message.push( filters[ prop ].join(' ') );
    var filterGroup = filters[ prop ];
    // skip to next filter group if it doesn't have any values
    if ( !filterGroup.length ) {
      continue;
    }
    if ( i === 0 ) {
      // copy to new array
      comboFilters = filterGroup.slice(0);
    } else {
      var filterSelectors = [];
      // copy to fresh array
      var groupCombo = comboFilters.slice(0); // [ A, B ]
      // merge filter Groups
      for (var k=0, len3 = filterGroup.length; k < len3; k++) {
        for (var j=0, len2 = groupCombo.length; j < len2; j++) {
          filterSelectors.push( groupCombo[j] + filterGroup[k] ); // [ 1, 2 ]
        }

      }
      // apply filter selectors to combo filters for next group
      comboFilters = filterSelectors;
    }
    i++;
  }

  var comboFilter = comboFilters.join(', ');
  return comboFilter;
}

function manageCheckbox( $checkbox ) {
  var checkbox = $checkbox[0];

  var group = $checkbox.parents('.option-set').attr('data-group');
  // create array for filter group, if not there yet
  var filterGroup = filters[ group ];
  if ( !filterGroup ) {
    filterGroup = filters[ group ] = [];
  }

  var isAll = $checkbox.hasClass('all');
  // reset filter group if the all box was checked
  if ( isAll ) {
    delete filters[ group ];
    if ( !checkbox.checked ) {
      checkbox.checked = 'checked';
    }
  }
  // index of
  var index = $.inArray( checkbox.value, filterGroup );

  if ( checkbox.checked ) {
    var selector = isAll ? 'input' : 'input.all';
    $checkbox.siblings( selector ).removeAttr('checked');


    if ( !isAll && index === -1 ) {
      // add filter to group
      filters[ group ].push( checkbox.value );
    }

  } else if ( !isAll ) {
    // remove filter from group
    filters[ group ].splice( index, 1 );
    // if unchecked the last box, check the all
    if ( !$checkbox.siblings('[checked]').length ) {
      $checkbox.siblings('input.all').attr('checked', 'checked');
    }
  }

}

});

jQuery(window).on('load',function(){
        jQuery('#subsload').modal('show');
    });