<?php get_header(); ?>

<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>

  <div class="article-news testimonial-sec-01">
  <div class="about-article-sec-01 bg-none">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
     <h2 class="blue-title">Testimonials</h2>
          
     </div>
     </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="row mb-60">
          	<div class="col-sm-9">
            	<h3 class="about-article-heading">See What Our Members and Customers Have to Say</h3>
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

<div class="testimonial-sec-01">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h3 class="text-size-25"><strong>See Testimonials by Assembly</strong></h3>
            </div>
        	<div class="col-md-12">
            	<ul class="testimonial-list">
                	<li><a href="#testi-1">Advisory Board Members</a></li>
                    <li><a href="#testi-2">Transformational Marketing <br>
					Assemblies</a></li>
					<li><a href="#testi-3">Financial Services Transformation <br>
					Assemblies</a></li>
					<li><a href="#testi-4">Transformational Ciso<br>Assemblies</a></li>
					<li><a href="#testi-5">Digital Enterprise Transformation <br>
					Assemblies</a></li>
					<li><a href="#testi-6">Digital Retail Transformation <br>
					Assemblies</a></li>
					<li><a href="#testi-7">Healthcare Transformation <br>
					Assemblies</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-sec-01 end here -->
  
  
  <div class="event-panel-03" id="testi-1">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Advisory Board Members</h3>
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
          <div class="testimonial-slider-01  owl-carousel owl-theme">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('abm_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('abm_testimonials') ) : the_row(); ?>

				        <div class="item">
			                <?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('abm_image') ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('abm_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('abm_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('abm_company'); ?></strong></figcaption>
                            <p><?php the_field('abm_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->

  <div class="event-panel-03" id="testi-5">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Digital Enterprise Transformation Assemblies</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
          <div class="testimonial-slider-02  owl-carousel owl-theme">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('deta_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('deta_testimonials') ) : the_row(); ?>

				        <div class="item">
                			<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('deta_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('deta_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('deta_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('deta_company'); ?></strong></figcaption>
                            <p><?php the_field('deta_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->

  <div class="event-panel-03" id="testi-2">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Transformational Marketing Assemblies</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
          <div class="testimonial-slider-03  owl-carousel owl-theme">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('tma_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('tma_testimonials') ) : the_row(); ?>

				        <div class="item">
                			<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('tma_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('tma_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('tma_name') ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('tma_company'); ?></strong></figcaption>
                            <p><?php the_field('tma_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->


  <div class="event-panel-03" id="testi-6">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Digital Retail Transformation Assemblies</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
          <div class="testimonial-slider-04  owl-carousel owl-theme">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('drta_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('drta_testimonials') ) : the_row(); ?>

				        <div class="item">
		                	<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('drta_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“ <?php the_field('drta_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('drta_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('drta_company'); ?></strong></figcaption>
                            <p><?php the_field('drta_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->


  <div class="event-panel-03" id="testi-3">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Financial Services Transformation Assemblies</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
          <div class="testimonial-slider-05  owl-carousel owl-theme">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('fsta_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('fsta_testimonials') ) : the_row(); ?>

				        <div class="item">
                			<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('fsta_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('fsta_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('fsta_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('fsta_company'); ?></strong></figcaption>
                            <p><?php the_field('fsta_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->


  <div class="event-panel-03" id="testi-7">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Healthcare Transformation Assemblies</h3>
                </div>
            </div>
            <div class="row">
            <div class="col-md-12">
          <div class="testimonial-slider-06  owl-carousel owl-theme">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('hta_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('hta_testimonials') ) : the_row(); ?>

				        <div class="item">
                			<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('hta_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('hta_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('hta_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('hta_company'); ?></strong></figcaption>
                            <p><?php the_field('hta_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->


  <div class="event-panel-03" id="testi-4">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="text-size-25">Transformational Ciso Assemblies</h3>
                </div>
            </div>
            <div class="row">
             <div class="col-md-12">
          <div class="testimonial-slider-07  owl-carousel owl-theme">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('tca_testimonials') ):

				 	// loop through the rows of data
				    while ( have_rows('tca_testimonials') ) : the_row(); ?>

				        <div class="item">
                			<?php the_sub_field('video'); ?>
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
  <!-- event-panel-03 end here -->
  <div class="testimonial-content-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-3"></div>
                <div class="col-md-6">
                	<div class="row">
                    	<div class="col-md-3"><img src="<?php the_field('tca_image'); ?>" alt=""></div>
                        <div class="col-md-9">
                        	<h2 class="text-size-30 black-color">“<?php the_field('tca_quote'); ?>”</h2>
                            <h3 class="text-size-25 blue-color"><?php the_field('tca_name'); ?></h3>
                            <figcaption class="text-size-16"><strong><?php the_field('tca_company'); ?></strong></figcaption>
                            <p><?php the_field('tca_position'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  </div>
<!-- testimonial-content-sec end here -->

<?php get_footer(); ?>