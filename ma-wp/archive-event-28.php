<?php get_header(); ?>

<div class="ver-line"></div>
  <div class="ver-line ver-line-02"></div>
  <div class="ver-line ver-line-03"></div>
  <div class="event-filter-panel-01">
    <div class="container-fluid event-filter-sec">
      <div class="row">
      <div class="col-md-9">
      <div class="row">
      		<div class="col-md-12">
            	<div class="filter-grid-sec">
            	<h2>Millennium Assembly Calendar</h2>
                <p class="text-size-18">Found an assembly of interest? Click on a date for more information.</p>
                </div>
            </div>
      </div>
      
      <div class="row">
        <div class="col-md-12 filter-bar filters-option">
            <a href="javascript:void()" class="remove-filters filter-btn"><span class="add-bar"><span class="menu-line-1"></span><span class="menu-line-2"></span><span class="menu-line-3"></span></span> Add Filters</a>
           
        </div>
      </div>
      <div class="row filters-option">
      <div class="col-md-12 filter-bar">
        	<a href="javascript:void()" class="remove-filters filter-btn">X Remove Filters</a>
            
            <p class="text-size-18 text-center">Filter by Sector</p>
        </div>
        <div class="col-md-4">
        <h4 class="text-size-20">Filter By Title</h4>
          <ul class="styled-checkbox-list">
            <li>
              <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
              <label for="styled-checkbox-1">Chief Information Officer</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2" >
              <label for="styled-checkbox-2">Chief Information Security Officer</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value2" >
              <label for="styled-checkbox-3">Chief Marketing Officer</label>
            </li>
           
          </ul>
          
        </div>
        <div class="col-md-4">
        <h4 class="text-size-20">Filter By Sector</h4>
          <ul class="styled-checkbox-list">
            <li>
              <input class="styled-checkbox" id="styled-checkbox-12" type="checkbox" value="value1">
              <label for="styled-checkbox-12">A.I.</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-13" type="checkbox" value="value2" >
              <label for="styled-checkbox-13">Blockchain</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-15" type="checkbox" value="value2" >
              <label for="styled-checkbox-15">Cross Vertical</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-16" type="checkbox" value="value2" >
              <label for="styled-checkbox-16">Data-Driven Marketing</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-17" type="checkbox" value="value2" >
              <label for="styled-checkbox-17">DevOps</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-18" type="checkbox" value="value2" >
              <label for="styled-checkbox-18">Digital</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-19" type="checkbox" value="value2" >
              <label for="styled-checkbox-19">Financial Services</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-20" type="checkbox" value="value2" >
              <label for="styled-checkbox-20">Healthcare</label>
            </li>
            
          </ul>
          
        </div>
        <div class="col-md-4">
        <h4 class="text-size-20">&nbsp;</h4>
        	<ul class="styled-checkbox-list">
            	<li>
              <input class="styled-checkbox" id="styled-checkbox-21" type="checkbox" value="value2" >
              <label for="styled-checkbox-21">Insurance</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-22" type="checkbox" value="value2" >
              <label for="styled-checkbox-22">Lifesciences</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-23" type="checkbox" value="value2" >
              <label for="styled-checkbox-23">Marketing</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-24" type="checkbox" value="value2" >
              <label for="styled-checkbox-24">Omnichannel</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-25" type="checkbox" value="value2" >
              <label for="styled-checkbox-25">Patient Experience</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-26" type="checkbox" value="value2" >
              <label for="styled-checkbox-26">Retail</label>
            </li>
            <li>
              <input class="styled-checkbox" id="styled-checkbox-27" type="checkbox" value="value2" >
              <label for="styled-checkbox-27">Security</label>
            </li>
            </ul>
          
        </div>
        
        <div class="col-md-12">
        <div class="filter-btn-sec text-right">
          	<a href="javascript:void(0)" class="btn blue-btn">Apply</a>
            <a href="javascript:void(0)" class="btn black-btn">Clear All</a>
          </div>
        </div>
      </div>
      	<div class="row mb-4">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- post -->
        <div class="col-md-4">
          <div class="event-location-box">
            <div class="event-loc-sec" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat">
            <div class="event-inner-loc">
              <div class="event-address"><?php the_field('location'); ?></div>
              <div class="days-text"><?php the_field('week_days'); ?></div>
              <div class="month-text"><?php the_field('date'); ?></div>
            </div>
            </div>
            <div class="event-logo-sec"> <a href="<?php the_permalink(); ?>"><img src="<?php the_field('event_logo'); ?>" alt=""></a> <a href="<?php the_permalink(); ?>" class="event-next-btn"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt=""></a> </div>
          </div>
        </div>
        <?php endwhile; ?>
        <!-- post navigation -->
        <?php the_posts_pagination(); ?>
        <?php else: ?>
        <!-- no posts found -->
        <?php endif; ?> 
        
        
        </div>
      </div>
      <div class="col-md-3 p-0 white-bg">
      		<div class="sidebar-sec-01" style="background:url(<?php bloginfo('template_url'); ?>/images/community-thumb-01.jpg) 0 0 no-repeat">
            	<div class="inner-side-bar">
            	<div class="side-logo-sec">
                	<img src="<?php bloginfo('template_url'); ?>/images/digital-logo.png" alt="">
                </div>
                
                <p class="text-size-12">THE FAIRMONT, DALLAS, TX</p>
                <h6>Monday - Tuesday</h6>	
                <h5>Feb 4 - Feb 5</h5>
                </div>
            </div>
            <div class="sidebar-sec-02">
            	<h3 class="text-size-20">Digital Marketing Transformation</h3>
                <p>DevOps Transformation West to provides a platform for IT leaders to debate and strategize. By working with our Membership and Advisory Board, we identified a significant need for an event that facilitates high-level DevOps discussion.
</p>
<div class="side-media-object">
<h3 class="text-size-20 mb-3">Speaker</h3>
<div class="media">
    <img src="<?php bloginfo('template_url'); ?>/images/speaker-01.png" alt="" class="mr-3 rounded-circle profile-image" >
    <div class="media-body">
      <h4 class="text-size-20 blue-color">Rusell Klein</h4>
      <figcaption class="text-size-16"><strong>American Marketing Association</strong></figcaption>
      <p>CEO</p>      
    </div>
  </div>
  
<div class="side-btn-sec">
	<a href="javascript:void()" class="btn black-btn">Request an invite <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i></a>
    <a href="javascript:void()" class="btn blue-btn">View Event Details<i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
</div>
</div>
            </div>
      </div>
      </div>
    </div>
  </div>
  <!-- event-panel-05 end here -->
  
  <div class="keynote-speakers-gallery" style="background:url(<?php bloginfo('template_url'); ?>/images/speaker-bg.jpg) 0 0 no-repeat;">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-6">
                	<h2 class="text-size-50">Keynote Speakers</h2>
                    <p>The Millennium Alliance works with its Members, partners, and affiliates to create platforms where you get to meet the business transformation leaders in your industry.</p>
                    <a href="javascript:void()" class="btn black-btn">See All Speakers <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
                
                <div class="col-md-6">
                	<ul class="keynote-profile-list-01">
                    	<li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/alan-guibord.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/adam-sharp.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/samir-batra.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/rahul-dubey.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/rhea-siers.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/anne-marie-stephen.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/governor-benjamin-nelson.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/steve-liguori.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/pierre-vigilance.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/brian-ahier.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/testimonial-pic-06.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/testimonial-pic-05.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/peter-vogel.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/testimonial-pic-03.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/connie-weaver.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/cynthia-johnson.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/deborah-diaz.png" alt=""></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php bloginfo('template_url'); ?>/images/vince-campitelli.png" alt=""></a></li>

                    </ul>
                </div>
            </div>
       </div>
  </div>
  <!-- keynote-speakers-gallery end here -->
  <div class="get-in-touch-wrap">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                	<h3 class="text-size-25 blue-color">Testimonials</h3>
                    <h2 class="text-size-35">See what our members and customers have to say.</h2>
                    <a href="javascript:void()" class="btn blue-btn">See Testimonials <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
                <div class="col-md-6">
                	<h3 class="text-size-25 blue-color">Get In Touch With Us</h3>
                    <h2 class="text-size-35">Check out how you can<br>

work with us.</h2>
                    <a href="javascript:void()" class="btn blue-btn">Contact Us <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
            </div>
        </div>
  </div>
  <!-- get-in-touch-wrap end here -->
  <div class="membership-section" style="background:url(<?php bloginfo('template_url'); ?>/images/parallax-bg.jpg) center center no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          <h3>Interested in Millennium Membership?<br>
            <span>Find out if you qualify here.</span></h3>
          <a href="javascript:void()" class="lft-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt=""></a> </div>
      </div>
    </div>
  </div>
  <!-- membership-section css end here -->

<?php get_footer(); ?>