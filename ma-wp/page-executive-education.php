<?php get_header(); ?>

<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>
  <section class="slider-section">
    <div class="slide-04">
      <div class="ar-slide-item overlay-none" style="background:url(<?php the_field('ee_hero_image'); ?>) 0 0 no-repeat;">
        
      </div>
    </div>
  </section>
  <!-- slider-section end here -->
  
  <div class="article-news about-article" id="general">
  <div class="about-article-sec-01 bg-none">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
     <h2 class="blue-title"><?php the_field('ee_general_information_subtitle'); ?></h2>
          <h3 class="about-article-heading"><?php the_field('ee_general_information_title'); ?></h3>
     </div>
     </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="row mb-60">
          	<div class="col-sm-9">
            	<p><?php the_field('ee_general_information_text'); ?></p>
            </div>
            <div class="col-sm-3">
            	<img src="<?php bloginfo('template_url'); ?>/images/welcome.png" alt="">
            </div>
          </div>
          
          
        </div>
        
        <div class="col-sm-4">
        <a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
        	<h4 class="interested-in-millen">Interested in Millennium Membership?
<span>Find out if you qualify here.</span></h4>
<a href="javascript:void(0);" class="black-rt-link"><img src="<?php bloginfo('template_url'); ?>/images/black-rt-arrow.png" alt=""></a>
        </div>
      </div>
      
      
      
    </div>
  </div>
   <!-- about-article-sec-01 end here -->

  </div>
  <!-- article-news-section end here -->
  
  <div class="ex-edu-sec-01" id="needs">
  	<div class="container-fluid">
    <div class="row">
    	<div class="col-md-1"></div>
        <div class="col-md-4 ex-edu-lft-content">
        	<h2 class="blue-title"><?php the_field('ee_needs_analysis_platform_subtitle'); ?></h2>
            <h3 class="about-article-heading"><?php the_field('ee_needs_analysis_platform_title'); ?></h3>
        </div>
        <div class="col-md-1"></div>	
        <div class="col-md-6 pr-0 ex-edu-rt-img">
        	<img src="<?php the_field('needs_analysis_platform_right_image'); ?>" alt="">
        </div>
    </div>
    <div class="row">
    <div class="col-md-4 ex-edu-rt-content mobile-show">
        	<p><?php the_field('ee_needs_analysis_platform_text'); ?></p>
        </div>
    <div class="col-md-6 pl-0 ex-edu-lft-img">
        	<img src="<?php the_field('needs_analysis_platform_left_image'); ?>" alt="">
        </div>
    	<div class="col-md-1"></div>
        <div class="col-md-4 ex-edu-rt-content mobile-hide">
        	<p><?php the_field('ee_needs_analysis_platform_text'); ?></p>
        </div>
        <div class="col-md-1"></div>
        
        
    </div>
    </div>
  </div>
  <!-- ex-edu-sec-01 end here -->
  
   <div class="ex-edu-sec-02" id="benefits">
  	<div class="container">
    	<div class="row">
        <div class="col-md-6">
          <h2 class="blue-title"><?php the_field('ee_platform_benefits_subtitle'); ?></h2>
          <h3 class="about-article-heading"><?php the_field('ee_platform_benefits_title'); ?></h3>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5 full-width-btn"> <a href="<?php echo site_url(); ?>/contact-us" class="btn black-btn">Contact us today for more information <i class="lft-btn-arrow black-rt"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i></a> </div>
      </div>
      	<div class="row">
        <div class="col-md-6">
             <div class="ma-benefit-sec">
             	<h3 class="text-size-29"><?php the_field('ee_millennium_members_use_title'); ?></h3>
                <ul>
                	<?php

					// check if the repeater field has rows of data
					if( have_rows('millennium_members_use_list') ):

					 	// loop through the rows of data
					    while ( have_rows('millennium_members_use_list') ) : the_row(); ?>

					        <li><?php the_sub_field('millennium_members_use_item'); ?></li>

					    <?php endwhile;

					else :

					    // no rows found

					endif;

					?>
                	
                </ul>
             </div>
        </div>
        <div class="col-md-6">
             <div class="ma-benefit-sec">
             	<h3 class="text-size-29"><?php the_field('ee_technology_partners_use_title'); ?></h3>
                <ul>
                	<?php

					// check if the repeater field has rows of data
					if( have_rows('technology_partners_use_list') ):

					 	// loop through the rows of data
					    while ( have_rows('technology_partners_use_list') ) : the_row(); ?>

					        <li><?php the_sub_field('technology_partners_use_item'); ?></li>

					    <?php endwhile;

					else :

					    // no rows found

					endif;

					?>
                	
                </ul>
             </div>
        </div>
        </div>
    </div>
  </div>
  <!-- ex-edu-sec-02 end here -->

<?php get_footer(); ?>