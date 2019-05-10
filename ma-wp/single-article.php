<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- post -->


<section class="slider-section digitl-article-banner">
    <div class="slide-04">
      <div class="ar-slide-item" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
           <div class="container">
           		<div class="row">
                	<div class="col-md-12">
                    	<h1 class="text-size-50"><?php the_title(); ?></h1>
 						<ul class="article-profile-list">
 							
 							<li><img src="<?php the_field('u_user_photo', 'user_'.get_the_author_meta( 'ID' )); ?>" alt=""></li> 							
    						<li>By <?php the_author(); ?></li>
    						<li>in <?php the_terms( $post->ID, 'daily_category' ); ?></li>
    						<li>on <?php echo get_the_date('F j, Y'); ?></li>
 						</ul>
                    </div>
                </div>                
           	</div>
      	</div>
    </div>
</section>
  <!-- slider-section end here -->

<div class="event-filter-panel-01 digital-diary-sec-01">
    <div class="container-fluid event-filter-sec">
      	<div class="row">
      		<div class="col-md-9">
      			<div class="row">
      				<div class="col-md-12">
            			<?php the_content(); ?>	
						<div class="digital-share-sec">
            				<div class="row">
           						<div class="col-sm-1"><h4 class="text-size-20">Share</h4></div>
                				<div class="col-sm-5">
                					<ul class="social-media">
				                      <li><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				                      <li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				                      <li><a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>&source=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    				</ul>
                				</div>
				                <div class="col-sm-6 text-right">
				                	<p class="text-size-14"><span>TAGS</span>&nbsp; 
				                	<?php the_terms( $post->ID, 'dairy_tag' ); ?></p>
				                </div>
							</div>            	
        				</div>
<!-- digital-share-sec end here -->
    				</div>
				</div>
				<div class="row">
				    <div class="col-md-8 leave-comment-form">
				        <h4 class="text-size-25"><strong>Leave a Reply</strong></h4>
				        <?php 
				            if ( comments_open() || get_comments_number() ) :
									comments_template();
							endif;
				        ?>
				                	
				    </div>
				</div>      	
			</div>
<div class="col-md-3 digital-diary-article-sidebar">
    <div class="loocking-sec grey-side-bg"> 
        <h4 class="text-size-20"><strong>Looking for Something?</strong></h4>
        <div class="search-box">
            <input type="text" class="form-control white-input" placeholder="Search">
            <input type="submit" class="btn blue-btn" value="Submit">
        </div>
    </div>
    <div class="recent-post grey-side-bg">
        <h4 class="text-size-20"><strong>Recent Posts</strong></h4>
        <?php 
        // задаем нужные нам критерии выборки данных из БД
		$args = array(
			'posts_per_page' => 3,
			'post_type' => 'article'
		);

		$query = new WP_Query( $args );

		// Цикл
		if ( $query->have_posts() ) {
			while ( $query->have_posts() ) {
				$query->the_post(); ?>
				<a href="<?php the_permalink(); ?>">
					<p><?php the_title(); ?></p>
				</a>				
				<?php				
			}
		} else {
			// Постов не найдено
		}
		// Возвращаем оригинальные данные поста. Сбрасываем $post.
		wp_reset_postdata();
         ?>        
    </div>	
            <div class="sidebar-ads-box">
            	<a href="<?php the_field('first_sidebar_banner_link', 'option'); ?>" target="_blank"><img src="<?php the_field('first_sidebar_banner', 'option'); ?>" alt=""></a>
            </div>
            <div class="search-industry grey-side-bg">
            	<h4 class="text-size-20"><strong>Search by Industry</strong></h4>
                <?php 
                	$args = array(
						'style'              => 'list',						
						'taxonomy'           => 'daily_category',
						'title_li'           => '',
						'separator'          => '<br />',
					);

					wp_list_categories( $args );					
                ?>
                	
                
            </div>
              <div class="sidebar-ads-box">
            	<a href="<?php the_field('second_sidebar_banner_link', 'option'); ?>" target="_blank"><img src="<?php the_field('second_sidebar_banner', 'option'); ?>" alt=""></a>   
            </div>
            <div class="follow-digital-bx grey-side-bg">   
            	<h4 class="text-size-20"><strong>Follow Digital Diary Via Email</strong></h4>
                <p class="text-size-14">Enter your email address to follow this blog and receive notifications of new posts by email.</p>
                 <div class="digtal-form">
                	<input type="email" value="" placeholder="Enter your Email Address" class="form-control">
                    <a href="javascript:void(0)" class="btn blue-btn">Follow</a>
                </div>
            </div>
      	</div>
      </div>
    </div>
</div>
  <!-- event-filter-panel-01 end here -->
  <div class="jenny-wrapper">
  	   <div class="container">
       	   <div class="row">
           		
                <div class="media">
    <img src="<?php the_field('u_user_photo', 'user_'.get_the_author_meta( 'ID' )); ?>" alt="" class="mr-3 rounded-circle profile-image">
    <div class="media-body">
      <h4 class="text-size-14">PUBLISHED BY <?php the_author(); ?></h4>
      <p><?php the_author_meta( 'description', get_the_author_meta( 'ID' )); ?></p>
      <p><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>">View all posts by <?php the_author(); ?></a></p>      
    </div>
  </div>
           </div>
       </div>
  </div>
  <!-- jenny-wrapper end here -->

  <div class="article-slider-sec">
    <div class="container-fluid">
      <div class="row">
        <div class="article-slider1">
            
	        <?php $prev = get_previous_post(); ?>
	        <?php if ($prev): ?>
            <div class="item ar-lft-sec" style="background:url(<?php echo get_the_post_thumbnail_url($prev, 'large'); ?>) 0 0 no-repeat;"> 
          		<div class="article-box">
                	<a href="<?php the_permalink( $prev ); ?>">
                	 <h6 class="article-dir-title text-right">Previous Article</h6>
                   <p class="text-right"><?php echo get_the_title($prev); ?></p>
                  </a>                    
              </div>
            </div>
            <?php endif ?>
                    
            <?php $next = get_next_post() ?>
	          <?php if ($next): ?>
	            <div class="item ar-rt-sec" style="background:url(<?php echo get_the_post_thumbnail_url($next, 'large'); ?>) 0 0 no-repeat;"> 
	            	<div class="article-box">
	                <a href="<?php the_permalink( $next ); ?>">
	                  <h6 class="article-dir-title">Next Article</h6>
	                  <p><?php echo get_the_title($next); ?></p>
	                </a>
	              </div>
	            </div>
	          <?php endif ?>
                   
        </div>
      </div>
    </div>
  </div>
 <!-- article-slider-sec end here --> 
       <div class="event-panel-05">

   		<div class="container">
        <div class="row">
   			<div class="col-md-3">
            	 <h3 class="text-size-35">Related Posts</h3>
            </div>
            
            <div class="col-md-9">
            <div class="related-post-slider owl-carousel owl-theme">
            <?php 
            // задаем нужные нам критерии выборки данных из БД
			$args = array(
				'posts_per_page' => -1,
				'taxonomy__in' => wp_get_object_terms( $post->ID, 'daily_category' ),         
        		'post__not_in' => array( $post->ID ),
        		'post_type' => 'article'
			);

			$query = new WP_Query( $args );

			// Цикл
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<div class="item">
		              	<div class="related-post-box">
		                	<div class="related-post-header" style="background:url(<?php the_post_thumbnail_url( 'large' ); ?>) 0 0 no-repeat;">
		                    	<div class="related-date-box">
		                        	<?php echo get_the_date('j'); ?><br><?php echo get_the_date('M'); ?>
		                        </div>
		                        
								<?php 
								// получаем все термины из таксономии my_term
								
								$terms = get_the_terms($post->ID, 'daily_category');

								// собираем их и выводим
								if ( !empty( $terms ) && !is_wp_error( $terms ) ) {
									$count = count($terms);
									$i=0;
									$term_list = '<p class="btn blue-btn retail-btn">';
									foreach ($terms as $term) {
										$i++;
										$term_list .= $term->name;
										if ($count != $i) {
											$term_list .= ' , ';
										}
										else {
											$term_list .= '</p>';
										}
									}
									echo $term_list;
								}
								
								 ?>
		                        	
		                    </div>
		                    <div class="related-post-content">
		                    	<h4><?php the_title(); ?></h4>
		                        <p class="text-size-14"><?php the_excerpt(); ?></p>
		                    </div>
		                    <div class="related-post-footer">
		                    	<span class="related-lft-link">By <?php the_author(); ?></span>
		                        <a href="javascript:void(0);" class="comment-txt"> <?php comments_number( '0 comments', $one, $more ); ?></a>	
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
  
  <div class="grey-three-col-sec">
  		<div class="container">
        	<div class="row">
        		<div class="col-md-4">
                	<h2>Lovin’ Digital Diary?</h2>
                </div>
                <div class="col-md-4 grey-mid-col">
                	<p>Premium content to our readers
interested in all things business.</p>
                </div>
                <div class="col-md-4">
                	<a href="<?php echo site_url(); ?>/contact-us" class="btn black-btn">Click here to subscribe now <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
            </div>
  		</div>
  </div>
  <!-- grey-three-col-sec end here -->

  
  <div class="check-us-sec">
  		<div class="container">
        	<div class="row check-us-row">
            <div class="col-md-7 check-us-video-sec hidden-lg">
                	
                	<iframe width="560" height="315" src="https://www.youtube.com/embed/FQ5wM87iIr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            	<div class="col-md-5">
                	<h2 class="text-size-50 blue-color"><strong>Check Us Out!</strong></h2>
                    <p>Millennium Membership offers Fortune 1000 C-Level executives, leading public sector/government officials, and thought leaders across a variety of disciplines unique and exclusive opportunities to meet their peers, understand industry developments, and receive introductions to new technology and service advancements to help grow their career and overall company value.</p>
                    <a href="<?php echo site_url(); ?>/about-us" class="btn blue-btn">About Millenium Alliance <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
                
                <div class="col-md-7 check-us-video-sec hidden-sm">
                	
                	<iframe width="560" height="315" src="https://www.youtube.com/embed/FQ5wM87iIr8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
  </div>
  <!-- check-us-sec end here -->
  <div class="about-digital-diary-sec">
  		<div class="container" style="background:url(<?php bloginfo('template_url'); ?>/images/i-pad.png) right center no-repeat">
        	<div class="row">
            	<div class="col-md-8">
                	<h3 class="text-size-25 blue-color"><strong>About Digital Diary</strong></h3>
                    <h2 class="text-size-50">Created to provide premium content to our readers interested in all things business.</h2>
                    <p>Launched in 2017, Digital Diary was created to provide premium content to our readers interested in all things business. With our blogs catered to deliver the top news stories, trends, and interviews from across all industries.</p>
                    <a href="<?php echo site_url(); ?>/article" class="btn blue-btn">Read all story <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
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

<?php endwhile; ?>
<!-- post navigation -->
<?php else: ?>
<!-- no posts found -->
<?php endif; ?>  

<?php get_footer(); ?>