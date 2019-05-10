<?php get_header(); ?>

<div class="ver-line"></div>
  <div class="ver-line ver-line-02"></div>
  <div class="ver-line ver-line-03"></div>
  <div class="event-filter-panel-01">
    <div class="container-fluid event-filter-sec">
      <div class="row">
      <div class="col-md-12">
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
      <div id="options">
      <div class="row filters-option">
      
        
        
          
            <div class="col-md-12 filter-bar">
            <a href="javascript:void()" class="remove-filters filter-btn">X Remove Filters</a>
              
              <p class="text-size-18 text-center">Filter by Sector</p>
          </div>
            <div class="col-md-4">
              <h4 class="text-size-20">Filter By Title</h4>
              <div class="option-set" data-group="evname">
                <ul class="styled-checkbox-list">
                  <li><input class="styled-checkbox" type="checkbox" value="" id="evname-all" class="all" checked /><label for="evname-all">All Titles</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterChiefInformationOfficer" id="evname1" /><label for="evname1">Chief Information Officer</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterChiefInformationSecurityOfficer" id="evname2" /><label for="evname2">Chief Information Security Officer</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterChiefMarketingOfficer" id="evname3" /><label for="evname3">Chief Marketing Officer</label></li>
                </ul>            
              </div>
            </div>
            
            <div class="col-md-4">
              <h4 class="text-size-20">Filter By Sector</h4>
              <div class="option-set" data-group="evsector">
                <ul class="styled-checkbox-list">
                  <li><input class="styled-checkbox" type="checkbox" value="" id="evsector-all" class="all" checked /><label for="evname-all">All Sectors</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterA.I." id="evsector1" /><label for="evsector1">A.I.</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterBlockchain" id="evsector2" /><label for="evsector2">Blockchain</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterCrossVertical" id="evsector3" /><label for="evsector3">Cross Vertical</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterData-DrivenMarketing" id="evsector4" /><label for="evsector4">Data-Driven Marketing</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterDevOps" id="evsector5" /><label for="evsector5">DevOps</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterDigital" id="evsector6" /><label for="evsector6">Digital</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterFinancialServices" id="evsector7" /><label for="evsector7">Financial Services</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterHealthcare" id="evsector8" /><label for="evsector8">Healthcare</label></li>
                </ul>            
              </div>
            </div>

            <div class="col-md-4">
              <h4 class="text-size-20">&nbsp;</h4>
              <div class="option-set" data-group="evsector">
                <ul class="styled-checkbox-list">
                  
                  <li><input class="styled-checkbox" type="checkbox" value=".filterInsurance" id="evsector9" /><label for="evsector9">Insurance</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterInsurance" id="evsector10" /><label for="evsector10">Lifesciences</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterMarketing" id="evsector11" /><label for="evsector11">Marketing</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterOmnichannel" id="evsector12" /><label for="evsector12">Omnichannel</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterPatientExperience" id="evsector13" /><label for="evsector13">Patient Experience</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterRetail" id="evsector14" /><label for="evsector14">Retail</label></li>
                  <li><input class="styled-checkbox" type="checkbox" value=".filterSecurity" id="evsector15" /><label for="evsector15">Security</label></li>
                  
                </ul>            
              </div>
            </div>
        </div>
      </div> 
      	
        <div class="row mb-4" id="container">
        
        <?php 
        // задаем нужные нам критерии выборки данных из БД
        $args = array(
          'posts_per_page' => -1,
          'post_type' => 'event'
        );

        $query = new WP_Query( $args );

        // Цикл
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
            <?php 
            $term_list = wp_get_post_terms( $post->ID, array('event_tag_name', 'event_tag_sector'), array('fields' => 'names') );    
             ?>
            <div class="col-md-3 <?php 
            foreach ($term_list as $key) {
              echo 'filter'.str_replace(' ', '', $key).' ';
            };
             ?>">
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

            <?php
          }
        } else {
          // Постов не найдено
        }
        // Возвращаем оригинальные данные поста. Сбрасываем $post.
        wp_reset_postdata();
         ?>       
        
        
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
                    	<?php
                      $the_slug = 'keynote-speaker';
                      $args = array(
                        'name'           => $the_slug,
                        'post_type'      => 'page',
                        'post_status'    => 'publish',
                        'posts_per_page' => 1
                      );
                      $my_posts = get_posts( $args );
                      $wolfid = $my_posts[0]->ID;
                      ?>
                      <?php 
                      $post_objects = get_field('ks_keynote_speakers', $wolfid);
                      $iterator = 1;
                      if( $post_objects ): ?>
                      <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                      <?php setup_postdata($post); ?>
                      
                      <li><img src="<?php the_post_thumbnail_url(); ?>" alt=""></li>

                      <?php if ($iterator==21): ?>
                        <?php break; ?>
                      <?php endif ?>
                      <?php $iterator++; ?>
                      <?php endforeach; ?>
                      <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                      <?php endif;
                      ?>                     

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
        <a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
          <h3>Interested in Millennium Membership?<br>
            <span>Find out if you qualify here.</span></h3>
          <a href="javascript:void()" class="lft-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt=""></a> </div>
      </div>
    </div>
  </div>
  <!-- membership-section css end here -->

<?php get_footer(); ?>