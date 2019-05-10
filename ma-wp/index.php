<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alliance
 */

get_header();
?>

<section class="slider-section">
    <div class="slide-01 owl-carousel owl-theme">
      <?php 
      $params = array(
	'posts_per_page' => -1, // нужно для отображения всех постов, без разделения по страницам
	'post__in'  => get_option( 'sticky_posts' ), // например Array ( [0] => 54 [1] => 1 )
	);
	 
	$q = new WP_Query( $params );
	 
	while ($q->have_posts()) : $q->the_post(); ?>
		
		<div class="item" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
	        <div class="container">
	          <!--<div class="trending-content animated">Trending Content</div>-->
	          <div class="slide-content animated"> <?php the_title(); ?> </div>
	          <div class="animated time-text"><?php the_time('j M - Y'); ?></div>
              <div class="main-category-list animated time-text">Categories: <?php the_category(', '); ?></div>
	        </div>
	    </div>

	<?php endwhile; 
	wp_reset_postdata();
       ?>

    </div>
  </section>
  <!-- slider-section end here --> 
  
  <div class="news-section">
      <div class="ver-line"></div>
      <div class="ver-line ver-line-02"></div>
      <div class="ver-line ver-line-03"></div>
  	   <div class="container">
  		<div class="row">
        	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        	<!-- post -->
			<div class="col-md-6">
            	<div class="news-box">
                	<div class="news-thumb">
                    	<img src="<?php the_post_thumbnail_url( 'large' ); ?>" alt="">
                        <span class="news-category-title"><?php the_category(', '); ?></span>
                    </div>
                    <div class="news-desc">
                    	<div class="news-date-sec text-center">
                        	<span class="date-text"><?php the_time('j'); ?></span><br>
							<span class="month-name"><?php the_time('M'); ?></span><br>

                            <span class="year-text"><?php the_time('Y'); ?></span>
                        </div>
                        <div class="news-link">
                        	<p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            
                        </div>
                    </div>
                </div>
            </div>


        	<?php endwhile; ?>
        	<!-- post navigation -->
        	<div class="col-md-12">
        		<?php 
        		$args = array(					
					
					'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
					'prev_text'    => '',
					'next_text'    => '',					
				);
        		 ?>
        		<?php the_posts_pagination($args); ?>
        	</div>
        	<?php else: ?>
        	<!-- no posts found -->
        	<?php endif; ?>
        	           
        </div>              
        
        
       </div>
  </div>
  <!-- new-section end here -->
  
  <div class="membership-section" style="background:url(<?php bloginfo('template_url'); ?>/images/parallax-bg.jpg) center center no-repeat;">
  		<div class="container">
  			<div class="row">
            	<div class="col-md-6"></div>
            	<div class="col-md-6">
                	<h3>Interested in Millennium Membership?<br>

<span>Find out if you qualify here.</span></h3>
					<a href="javascript:void()" class="lft-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt=""></a>
                </div>
        	</div>
        </div>
  </div>
  <!-- membership-section end here -->



<?php
get_footer();
