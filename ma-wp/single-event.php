<?php get_header(); ?>

<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>
  <section class="slider-section">
    <div class="slide-04">
      <div class="ar-slide-item overlay-none" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
           <div class="container">
           		<div class="row">
                	<div class="col-md-12">
                    	<div class="banner-white-sec">
                        	<div class="brand-logo">
                            <a href="javascript:void(0);">
                            	<img src="<?php the_field('event_logo'); ?>" alt="">
                            </a>
                            </div>
                            <div class="time-details">
                            	<h6><?php the_field('location'); ?></h6>
                                <h5><?php the_field('week_days'); ?></h5>
                                <h4><?php the_field('date'); ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row banner-btn-sec">
                	<div class="col-md-3">
                    <a class="btn white-btn">Nominate a Delegate</a>
                    </div>
                    <div class="col-md-3">
                    <a class="btn white-btn">Request an invite</a>
                    </div>
                    <div class="col-md-3">
                    <a class="btn white-btn">Nominate a Sponsor</a>
                    </div>
                </div>
           </div>
      </div>
    </div>
  </section>
  <!-- slider-section end here -->
  
  <div class="more-event-info">
  		<div class="container">
        <div class="row">
        	<div class="col-md-3">
            	<h2 class="text-size-30 white-color"><strong>More Event Info:</strong></h2>
            </div>
            <div class="col-md-9">
            	<ul class="more-event-list  nav nav-tabs">
                	
                    <li  class="active"><a data-toggle="tab" href="#overview">Overview</a></li>
                    <li><a data-toggle="tab" href="#agenda">See Full Agenda</a></li>
            <li>
            	<div class="event-search-bx">
                        	<input type="text" class="enter-password" value="" placeholder="Enter Password">
                            <button class="search-btn"></button> 
                        </div>
              <a data-toggle="tab" href="#attendees" id="see-who">See Who Attends</a></li>
            <li><a href="<?php the_field('event_map_link'); ?>" target="_blank">Open location in Map</a></li>
            
                </ul>
            </div>
            </div>
        </div>
  </div>
  <!-- more-event-info end here -->
  
<div class="tab-content" >
<div id="overview" class="tab-pane active">
<div class="article-news about-article">
  	<div class="about-article-sec-01 bg-none">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
     				<h2 class="blue-title">Event Overview</h2>
          			<h3 class="about-article-heading"><?php the_field('se_event_title'); ?></h3>
					<?php the_field('se_event_description'); ?>
     			</div>
     		</div>
    	</div>
  	</div>
   <!-- about-article-sec-01 end here -->
</div>
  <!-- article-news-section end here -->

<div class="event-panel-01 light-grey-bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-5">
            	<h2 class="about-article-heading">Education</h2>
                <h4 class="text-size-21">Top content from Digital Diary this month</h4>
                <a href="<?php echo site_url(); ?>/article" class="btn white-btn blue-txt-btn">See Digital Diary <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt=""></i></a>
            </div>
            <div class="col-md-7">
            	<?php the_field('se_education_list'); ?>
            </div>
        </div>
    </div>
</div>
<!-- event-panel-01 end here -->

<div class="event-panel-01">
	<div class="container">
    	<div class="row">
        	<div class="col-md-5">
            	<h2 class="about-article-heading">Transformation</h2>
                <h4 class="text-size-21">Best in class resources on the latest digital tips, technologies, and strategies.</h4>                
            </div>
            <div class="col-md-7">
            	<?php the_field('se_transformation_list'); ?>
            </div>
        </div>
    </div>
</div>
<!-- event-panel-01 end here -->
<div class="event-panel-01 light-grey-bg">
	<div class="container">
    	<div class="row">
        	<div class="col-md-5">
            	<h2 class="about-article-heading">Leadership</h2>
                <h4 class="text-size-21">Some of our Past Attendees</h4>                
            </div>
            <div class="col-md-7">
            	<?php the_field('se_leadership_list'); ?>
            </div>
        </div>
    </div>
</div>
<!-- event-panel-01 end here -->

<div class="event-panel-02">
	<div class="container">
    	<div class="row">
        	<div class="col-md-12">
            	<h2 class="about-article-heading">Keynote Speaker</h2>
            </div>
        </div>
    	<div class="row">
        	<?php

			$post_object = get_field('se_keynote_speaker');

			if( $post_object ): 

				// override $post
				$post = $post_object;
				setup_postdata( $post );

                $str = get_field('speaker_image_link');
                preg_match('~(?<=src=")[^"]+(?=")~', $str, $arr);
                $img = $arr[0] ?? '';

				?>
			    <div class="col-md-3">
	            	<img src="<?php echo $img; ?>" alt="">
	            </div>
	            <div class="col-md-9  speaker-head">
	            	<div class="row">
	                	<div class="col-md-8">
	                    	<h4 class="text-size-30 blue-color"><?php the_title(); ?></h4>
	                        <p class="mb-0"><strong><?php the_field('speaker_company'); ?></strong></p>
	                        <p><?php the_field('speaker_position'); ?></p>
	                    </div>	                    
	                </div>
	                <?php the_content(); ?>
	            </div>
			    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
        	
        </div>
    </div>
</div>
<!-- event-panel-02 end here -->

  <div class="about-article-sec-02 bg-none">
  		<div class="container">
        	
            <div class="row">
            	<div class="col-md-12">
                	<h3 class="about-article-heading">Speakers</h3>
                </div>
            </div>
            <div class="row">
            	<?php

				// check if the repeater field has rows of data
				if( have_rows('se_speakers') ):

				 	// loop through the rows of data
				    while ( have_rows('se_speakers') ) : the_row(); ?>

				        <div class="col-sm-3 profile-col"> 
		                	<a href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo get_row_index(); ?>">
		                	<?php

							$post_object = get_sub_field('speaker');

							if( $post_object ): 

								// override $post
								$post = $post_object;
								setup_postdata( $post );

                                $str = get_field('speaker_image_link');
                                preg_match('~(?<=src=")[^"]+(?=")~', $str, $arr);
                                $img = $arr[0] ?? '';

								?>
							    <figure>
			                    	<img src="<?php echo $img; ?>" alt=""/>
			                    </figure>
			                    <figcaption>
			                    	<h4 class="pillars-title"><?php the_title(); ?></h4>
			                        <h5 class="profile-category"><?php the_field('speaker_company'); ?></h5>
			                        <p class="profile-position"><?php the_field('speaker_position'); ?></p>
			                    </figcaption>
							    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>		                	
		                    </a>
		                </div>
				    <?php endwhile;
				else :
				    // no rows found
				endif;
				?>               
            </div>            
        </div>
  </div>
  <!-- about-article-sec-02 end here -->
  
  <div class="event-panel-03">
  	   <div class="container">
       		<div class="row">
            	<div class="col-md-12">
                <h3 class="about-article-heading">Testimonials</h3>
                </div>
            </div>
            <div class="row">
             <div class="col-md-12">
          <div class="testimonial-slider-01  owl-carousel owl-theme">
            	<?php
				// check if the repeater field has rows of data
				if( have_rows('se_testimonials') ):
				 	// loop through the rows of data
				    while ( have_rows('se_testimonials') ) : the_row(); ?>
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
  
  <div class="event-panel-04">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                     <h3 class="about-article-heading">Previous Assemblies</h3>
                </div>
            </div>            
        </div>
        <div class="event-gallery-sec">
            <ul class="event-gallery-list">
                <?php
				// check if the repeater field has rows of data
				if( have_rows('se_gallery') ):
				// loop through the rows of data
				while ( have_rows('se_gallery') ) : the_row(); ?>
				<li><a href="javascript:void(0)"><img src="<?php the_sub_field('image'); ?>" alt=""></a></li>
				<?php endwhile;
				else :
				// no rows found
				endif;
				?>                        
            </ul>
        </div>
  </div>
  <!-- event-panel-04 end here -->
</div>
  
<div id="attendees" class="tab-pane">
    <div class="about-article-sec-02 bg-none mb-4">
  		<div class="container">        	
            <div class="row">
            	<div class="col-md-12">
                	<a href="<?php echo site_url(); ?>/event" class="go-back-btn">Go Back to Assembly</a>
                	<h3 class="about-article-heading">Confirmed Attendees</h3>
                </div>
            </div>
            <div class="row">
            	<?php
                // check if the repeater field has rows of data
                if( have_rows('attendees') ):
                    // loop through the rows of data
                    while ( have_rows('attendees') ) : the_row(); ?>

                    <div class="col-sm-3 profile-col"> 
                        <a href="javascript:void(0);" data-toggle="modal" data-target="#attend<?php echo get_row_index(); ?>">
                        <?php
                            $post_object = get_sub_field('attendee');
                            if( $post_object ):
                                // override $post
                                $post = $post_object;
                                setup_postdata( $post );
                                $str = get_field('attendee_image');
                                preg_match('~(?<=src=")[^"]+(?=")~', $str, $arr);
                                $img = $arr[0];

                                ?>
                                <figure>
                                    <img src="<?php echo $img; ?>" alt=""/>
                                </figure>
                                <figcaption>
                                    <h4 class="pillars-title"><?php the_title(); ?></h4>
                                    <h5 class="profile-category"><?php the_field('attendee_company'); ?></h5>
                                    <p class="profile-position"><?php the_field('attendee_position'); ?></p>
                                </figcaption>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>                        

                        </a>
                    </div>
                    <?php endwhile;
                else :
                    // no rows found
                endif;
                ?>                
            </div>            
        </div>
  </div>
  <!-- about-article-sec-02 end here --> 

   
   <div class="event-panel-06">
   		<div class="container">
        	<div class="row">
            	<div class="col-md-12"><h3 class="about-article-heading">The Needs Analysis Workbook</h3></div>
            </div>
        	<div class="row">
            	<?php

                // check if the repeater field has rows of data
                if( have_rows('workbooks') ):

                    // loop through the rows of data
                    while ( have_rows('workbooks') ) : the_row(); ?>

                    <div class="col-md-6">
                        <div class="workbook-sec">
                            <div class="workbook-logo">
                                <a href="javascript:void(0)"><img src="<?php the_sub_field('workbook_cover'); ?>"></a>
                            </div>
                            <div class="workbook-content">
                                <h3 class="text-size-25 blue-color"><?php the_sub_field('workbook_author'); ?></h3>
                                <h5 class="text-size-16"><strong><?php the_sub_field('workbook_company'); ?></strong></h5>
                                <p><?php the_sub_field('workbook_position'); ?></p>
                            </div>
                        </div>
                        <div class="workbook-btn-sec">
                            <a href="<?php the_sub_field('workbook_pdf'); ?>" target="_blank" class="btn blue-light-btn">Download Workbook</a>
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
   <!-- event-panel-06 end here -->  
</div>
<div id="agenda" class="tab-pane"> 
  <!-- event-panel-02 end here -->  
  <div class="agenda-content-sec-01">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3 class="about-article-heading">Agenda</h3>
        </div>
        <div class="col-md-9">
          <?php

            $post_object = get_field('agenda');

            if( $post_object ): 

                // override $post
                $post2 = $post_object;
                $post = $post_object;
                setup_postdata( $post );
                ?>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            
            
                
                <?php

                // check if the repeater field has rows of data
                if( have_rows('days') ):

                    // loop through the rows of data
                    while ( have_rows('days') ) : the_row(); ?>

                    <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#tab<?php echo get_row_index(); ?>" role="tab" aria-controls="tab1">DAY <?php echo get_row_index(); ?> | <?php the_sub_field('day_date'); ?></a> </li>
                    <?php endwhile;
                else :
                    // no rows found
                endif;
                ?>
                           
          </ul>
          <div class="tab-content">
              <?php
                // check if the repeater field has rows of data
                if( have_rows('days') ):

                    // loop through the rows of data
                    while ( have_rows('days') ) : the_row(); ?>

                    <div class="tab-pane" id="tab<?php echo get_row_index(); ?>" role="tabpanel">
                      <div class="agenda-content-sec">
                        <?php

                        // check if the repeater field has rows of data
                        if( have_rows('sessions') ):

                            // loop through the rows of data
                            while ( have_rows('sessions') ) : the_row(); ?>

                            <?php
                            $post_object = get_sub_field('session');

                            if( $post_object ):
                                // override $post
                                $post = $post_object;
                                setup_postdata( $post );
                                ?>
                                <div class="agenda-time-sec">
                                  <time><?php the_field('session_start') ?> – <?php the_field('session_end'); ?></time>
                                  <p><?php the_title(); ?></p>
                                  <?php the_content(); ?>
                                </div>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                <?php $post = $post2; ?>
                                <?php setup_postdata( $post ); ?>
                            <?php endif; ?>
                            <?php endwhile;
                        else :
                            // no rows found
                        endif;
                        ?>                                           
                      </div>
                    </div>
                    <?php endwhile;
                else :
                    // no rows found
                endif;
                ?>          
          </div>
          <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?> 
        </div>
      </div>
    </div>
  </div>
  <!-- agenda-content-sec end here -->
  </div>
</div>
<!-- tab-content end here -->

<!-- event-panel-05 end here -->
<div class="event-panel-05">
<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>
<div class="container">
    <div class="row">
   		<div class="col-md-3">
            <h3 class="about-article-heading">Related Assemblies</h3>
        </div>
        <div class="col-md-9">
        <?php 
        $wolf_terms = wp_get_object_terms( $post->ID, 'event_category' );
        $terms_array = array();
        foreach ($wolf_terms as $key ) {
        array_push($terms_array, $key->term_id);
        }
        ?>
            <div class="event-loc-slider owl-carousel owl-theme">
              <?php 
	              $args = array(
					'posts_per_page' => -1,		        
	        		'post__not_in' => array( $post->ID ),
	        		'tax_query' => array(
						array(
							'taxonomy' => 'event_category',
							'field'    => 'id',
							'terms'    => $terms_array
						)
					),
	        		'post_type' => 'event'
				);
				$query1 = new WP_Query( $args );              
				if ( $query1->have_posts() ) {
				while ( $query1->have_posts() ) {
					$query1->the_post();
               ?>                
              <div class="item">
            	 
	            	<div class="event-location-box">
                    <a href="<?php the_permalink(); ?>" class="overlay-link"> </a>
	                	<div class="event-loc-sec" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat">
	                    	<div class="event-address"><?php the_field('location'); ?></div>
	                        <div class="days-text"><?php the_field('week_days'); ?></div>
	                        <div class="month-text"><?php the_field('date'); ?></div>
	                    </div>
	                    <div class="event-logo-sec">
	                    	<a href="<?php the_permalink(); ?>"><img src="<?php the_field('event_logo'); ?>" alt=""></a>
	                        <a href="<?php the_permalink() ?>" class="event-next-btn"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt=""></a>
	                    </div>
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


<?php get_footer(); ?>


<?php
// check if the repeater field has rows of data
if( have_rows('se_speakers') ):
// loop through the rows of data
while ( have_rows('se_speakers') ) : the_row(); ?>

<div class="modal profile-popup fade" id="<?php echo get_row_index(); ?>">
    <div class="modal-dialog modal-lg">
      	<div class="modal-content profile-content">
      		<button type="button" class="close" data-dismiss="modal">Close</button>
        	<?php
        	$post_object = get_sub_field('speaker');
        	if( $post_object ): 
        	// override $post
			$post = $post_object;
			setup_postdata( $post );
			?>
        	<div class="modal-body">
         		<div class="profile-white-sec">
        			<div class="profile-lft-sec">
            			<img src="<?php the_post_thumbnail_url(); ?>" alt="">
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
        	<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
      	</div>
    </div>
</div>

<?php endwhile;
else :
// no rows found
endif;
?>