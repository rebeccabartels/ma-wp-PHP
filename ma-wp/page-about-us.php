<?php get_header(); ?>

<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>
  <section class="slider-section">
    <div class="slide-04">
      <div class="ar-slide-item overlay-none" style="background:url(<?php the_field('about_banner'); ?>) 0 0 no-repeat;">
        
      </div>
    </div>
  </section>
  <!-- slider-section end here -->
  
  <div class="article-news about-article" id="welcome">
  <div class="about-article-sec-01">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
     <h2 class="blue-title"><?php the_field('welcome_subtitle'); ?></h2>
          <h3 class="about-article-heading"><?php the_field('about_title'); ?></h3>
     </div>
     </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="row mb-60">
          	<div class="col-sm-9">
            	<p><?php the_field('about_top_text'); ?></p>
            </div>
            <div class="col-sm-3">
            	<img src="<?php bloginfo('template_url'); ?>/images/welcome.png" alt="">
            </div>
          </div>
          
          <div class="row">
          <div class="col-sm-3">
            	
            </div>
          	<div class="col-sm-9 text-right">
            	<p><?php the_field('about_bottom_text'); ?></p>
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
      
      <div class="row three-pillars-sec">
      	   <div class="col-sm-10">
           		<h3 class="about-article-heading"><?php the_field('pillars_title'); ?></h3>
                <div class="row">
                	<div class="col-sm-4">
                    	<div class="pillars-box">
                    	<h3 class="pillars-title"><?php the_field('first_pillar_title'); ?></h3>
                        <p><?php the_field('first_pillar_text'); ?></p>
                        </div>
                        <span class="pillars-count">1</span>
                    </div>
                    <div class="col-sm-4">
                    <div class="pillars-box">
                    <h4 class="pillars-title"><?php the_field('second_pillar_title'); ?></h4>
                    <p><?php the_field('second_pillar_text'); ?></p>
                    </div>
                    <span class="pillars-count">2</span>
                    </div>
                    <div class="col-sm-4">
                    <div class="pillars-box">
                    <h4 class="pillars-title"><?php the_field('third_pillar_title'); ?></h4>
                    <p><?php the_field('third_pillar_text'); ?></p>
                    </div>
                    <span class="pillars-count">3</span>
                    </div>
                </div>
           </div>
           
      </div>
      
    </div>
  </div>
   <!-- about-article-sec-01 end here -->
  <div class="about-article-sec-02" style="background:url(<?php bloginfo('template_url'); ?>/images/about-map.png) right top no-repeat;" id="advisory">
  		<div class="container">
        	<div class="row">
            	<div class="col-sm-11">
            	<h4 class="pillars-title"><?php the_field('advisory_subtitle'); ?></h4>
                <h3 class="about-article-heading"><?php the_field('advisory_title'); ?></h3>
                <p class="about-art-content"><?php the_field('advisory_text'); ?></p>
                </div>
            </div>
            
            <div class="row">
            	<?php 
                $post_objects = get_field('advisors');
                $iterator = 1;
                if( $post_objects ): ?>
                    
                    <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        
                    <div class="col-sm-3 profile-col">
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo $iterator; ?>">
                        <figure>
                            <img src="<?php the_post_thumbnail_url(); ?>" alt=""/>
                        </figure>
                        <figcaption>
                            <h4 class="pillars-title"><?php the_title(); ?></h4>
                            <h5 class="profile-category"><?php the_field('company'); ?></h5>
                            <p class="profile-position"><?php the_field('position'); ?></p>
                        </figcaption>
                        </a>
                    </div>
                    <?php $iterator++; ?>
                    <?php endforeach; ?>
                    
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif;
                 ?>                
            </div>           
            
        </div>
  </div>
  <!-- about-article-sec-02 end here -->
  </div>
  <!-- article-news-section end here -->  
  
  
  <div class="millenniumlive-wrapper">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                	<h4 class="pillars-title"><?php the_field('live_subtitle'); ?></h4>
                    <h2 class="about-article-heading mb-4"><?php the_field('live_title'); ?></h2> 
					<div class="millenniumlive-video-sec">
                    	<?php the_field('live_video'); ?>
                    </div>
                    <div class="youtube-link">
                    	<a href="https://www.youtube.com/channel/UCJgFlsBHBF2u7Dl28seltUA/feed" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i> &nbsp;&nbsp; <span class="follow-us-link">Follow Our YouTube Channel</span></a>
                    </div>
                </div>
            </div>
       </div>
  </div>
  <!-- millenniumlive-wrapper end here -->
  
   <div class="mille-partners-wrapper" id="partners">
  		<div class="container">
  			<div class="row">
            	<div class="col-md-10">
                	<h4 class="pillars-title"><?php the_field('partners_substitle'); ?></h4>
                    <h2 class="about-article-heading"><?php the_field('partners_title'); ?></h2>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-12">
                <div id="partens-slider" class="carousel slide" data-ride="carousel">
                <div class="row">
<div class="col-md-4">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#partens-slider" data-slide-to="0" class="active">EXECUTIVE EDUCATION PARTNERS</li>
    <li data-target="#partens-slider" data-slide-to="1">ANALYSTS & ASSOCIATIONS PARTNERS</li>
    <li data-target="#partens-slider" data-slide-to="2">AUTHORS & INDUSTRY EXPERTS</li>
    <li data-target="#partens-slider" data-slide-to="3">MEDIA PARTNERS</li>
    
  </ul>
    <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#partens-slider" data-slide="prev"><img src="<?php bloginfo('template_url'); ?>/images/prev-arrow.png" alt="Prev"></a>
  <a class="carousel-control-next" href="#partens-slider" data-slide="next"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt="Next"></a>
</div> 

<div class="col-md-8">
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      	<ul class="partners-logo">
        	<?php

            // check if the repeater field has rows of data
            if( have_rows('executive_education_partners') ):

                // loop through the rows of data
                while ( have_rows('executive_education_partners') ) : the_row(); ?>

                    <li><img src="<?php the_sub_field('logo'); ?>" alt=""></li>

                <?php endwhile;

            else :

                // no rows found

            endif;

            ?>            
        </ul>       
        
        
    </div>
    <div class="carousel-item">
      	<ul class="partners-logo">
        	<?php

            // check if the repeater field has rows of data
            if( have_rows('analysts_&_associations_partners') ):

                // loop through the rows of data
                while ( have_rows('analysts_&_associations_partners') ) : the_row(); ?>

                    <li><img src="<?php the_sub_field('logo'); ?>" alt=""></li>

                <?php endwhile;

            else :

                // no rows found

            endif;

            ?>            
        </ul>        
    </div>
    <div class="carousel-item">
      	<ul class="partners-logo">
        	<?php

            // check if the repeater field has rows of data
            if( have_rows('authors_&_industry_experts') ):

                // loop through the rows of data
                while ( have_rows('authors_&_industry_experts') ) : the_row(); ?>

                    <li><img src="<?php the_sub_field('logo'); ?>" alt=""></li>

                <?php endwhile;

            else :

                // no rows found

            endif;

            ?>            
        </ul>        
    </div>
    <div class="carousel-item">
      	<ul class="partners-logo">
        	<?php

            // check if the repeater field has rows of data
            if( have_rows('media_partners') ):

                // loop through the rows of data
                while ( have_rows('media_partners') ) : the_row(); ?>

                    <li><img src="<?php the_sub_field('logo'); ?>" alt=""></li>

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
                </div>
            </div>
            
            <div class="row partners-btn-sec">
            	<div class="col-md-4"></div>
                <div class="col-md-4 pl-30">
                   <a href="<?php echo site_url(); ?>/contact-us" class="btn black-btn">Become a partner <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i></a>
                </div>
                <div class="col-md-4 pr-30">
                <a href="<?php echo site_url(); ?>/contact-us" class="btn blue-btn">Nominate a partner <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i></a>
                </div>
            </div>
        </div>
  </div>
  <!-- mille-partners-wrapper end here --> 
  
  <div class="career-wrapper" style="background:url(<?php bloginfo('template_url'); ?>/images/career-banner.jpg) 0 0 no-repeat;" id="careers">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<h4 class="pillars-title white-color"><?php the_field('careers_subtitle'); ?></h4>
                    <h2 class="about-article-heading white-color mb-0"><?php the_field('careers_title'); ?></h2>
                </div>
            </div>
        </div>
  
  </div>
  <!-- career-wrapper end here --->
  
  <div class="owner-video-wrap">
  	   <div class="container">
  		    <div class="row">
            	<div class="col-sm-12">
                	<?php the_field('careers_video'); ?>
                    <!-- <a href="javascript:void(0)" class="video-play-btn"><img src="<?php bloginfo('template_url'); ?>/images/play-button.png" alt=""></a> -->
                </div>
            </div>
       </div>
  </div>
  <!-- owner-video-wrap end here -->
  
  <div class="finding-career">
  	   <div class="container">
       <div class="finding-wrap">
  	   <div class="row">
       		<div class="col-md-7">
            	<h4 class="pillars-title"><?php the_field('finding_a_career_subtitle'); ?></h4>
                <h2 class="text-size-35"><?php the_field('finding_a_career_title'); ?></h2>
                <p><?php the_field('finding_a_career_text'); ?></p>
            </div>
            <div class="col-md-5">
            	<div class="media"><a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
                  <img src="<?php bloginfo('template_url'); ?>/images/career-thumb-01.png" alt="" class="carrer-thumb rounded-circle">
                  <div class="media-body">
                    <h4 class="text-size-14"><a href="<?php echo site_url(); ?>/contact-us">JOBS IN NEW YORK OFFICE</a></h4>
                    <a href="<?php echo site_url(); ?>/contact-us" class="blue-arrow-btn"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></a>
                    
                  </div>
                </div>
                <div class="media"><a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
                  <img src="<?php bloginfo('template_url'); ?>/images/career-thumb-02.png" alt="" class="carrer-thumb rounded-circle">
                  <div class="media-body">
                    <h4 class="text-size-14"><a href="<?php echo site_url(); ?>/contact-us">JOBS IN MIAMI OFFICE</a></h4>
                    <a href="<?php echo site_url(); ?>/contact-us" class="blue-arrow-btn"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></a>
                    
                  </div>
                </div>
            </div>
       </div>
       </div>
       
       </div>
  </div>
  <!-- finding-career end here -->
  
  <div class="emp-benefit-wrap">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-5">
                	<h4 class="pillars-title"><?php the_field('employee_benefits_title'); ?></h4>
                    <p><?php the_field('employee_benefits_text'); ?></p>
                    <a href="javascript:void(0)" class="btn blue-btn">See Benefits <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i></a>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6">
                	<div class="benefit-slider fadeOut owl-carousel owl-theme">
                    	 <?php

                            // check if the repeater field has rows of data
                            if( have_rows('employee_reviews') ):

                                // loop through the rows of data
                                while ( have_rows('employee_reviews') ) : the_row(); ?>

                                <div class="item">
                                    <p class="text-size-25">“<?php the_sub_field('review'); ?>”</p>
                                    <div class="detail-bottom-sec">
                                        <h4 class="text-size-15"><?php the_sub_field('review_author'); ?></h4>
                                        <h6 class="text-size-14"><?php the_sub_field('review_author_position'); ?></h6>
                                    </div>
                                </div>

                                <?php endwhile;

                            else :

                                // no rows found

                            endif;

                            ?>                       
                    </div>
                </div>
            </div>
       </div>
  </div>
  <!-- emp-benefit-wrap end here -->

  <div class="meet-us-wrapper">
    <div class="container">
      <div class="row">
      	   <div class="col-sm-12">
           		<h2 class="about-article-heading"><?php the_field('meet_us_title'); ?></h2>
           </div>
          
      </div>
      <div class="row">
      	<?php

        // check if the repeater field has rows of data
        if( have_rows('meet_us_images') ):

            // loop through the rows of data
            while ( have_rows('meet_us_images') ) : the_row(); ?>

                <div class="col-sm-3">
                    <a href="javascript:void(0)"><img src="<?php the_sub_field('photo'); ?>" alt=""></a>
                </div>

            <?php endwhile;

        else :

            // no rows found

        endif;

        ?>     
       
      </div>
    </div>
  </div>
  <!-- membership-section end here -->
  

<!-- profile-popup end here -->

<?php get_footer(); ?>


<?php 
$post_objects = get_field('advisors');
$iterator = 1;
if( $post_objects ): ?>
<?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
<?php setup_postdata($post); ?>
                       
<div class="modal profile-popup fade" id="<?php echo $iterator; ?>">
    <div class="modal-dialog modal-lg">
        <div class="modal-content profile-content">
            <button type="button" class="close" data-dismiss="modal">Close</button>
            <div class="modal-body">
                <div class="profile-white-sec">
                   <div class="profile-lft-sec">
                       <img src="<?php the_post_thumbnail_url(); ?>" alt=""/>
                    </div>
            
                    <div class="profile-rt-sec">
                       <div class="profile-header">
                           <h2 class="text-size-30"><?php the_title(); ?></h2>
                            <h5 class="text-size-16"><strong><?php the_field('company'); ?></strong></h5>
                            <h6 class="text-size-16"><?php the_field('position'); ?></h6>
                       </div>
                        <div class="profile-desc">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div>

<?php $iterator++; ?>
<?php endforeach; ?>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;
?>  