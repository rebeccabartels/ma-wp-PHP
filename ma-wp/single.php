<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Alliance
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

<section class="slider-section">
    <div class="slide-04">
      <div class="ar-slide-item" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
        <div class="container">
        
          <div class="slide-content"><?php the_title(); ?></div>
          <div class="time-text"><?php the_time('j M - Y'); ?></div>
          <div class="main-category-list animated time-text">Categories: <?php the_category(', '); ?></div>
        </div>
      </div>
    </div>
  </section>
  <!-- slider-section end here -->
  
  <div class="article-news">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php the_content(); ?>
        </div>
      </div>
      <div class="row share-sec">
        <div class="col-sm-12">
          <ul class="social-media-01">
            <li class="share-title">Share</li>
            <li><a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>p" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="https://twitter.com/home?status=<?php the_permalink(); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- article-news-section end here -->
  
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
  <!-- article-slider-sec edn here -->
  
  <div class="news-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="blue-title">Latest Millennium News</h2>
        </div>
      </div>
      <div class="row">
        <?php 
        // задаем нужные нам критерии выборки данных из БД
        $args = array(
          'posts_per_page' => 2
        );

        $query = new WP_Query( $args );

        // Цикл
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
            
            <div class="col-md-6">
              <div class="news-box">
                <div class="news-thumb"> 
                <img src="<?php the_post_thumbnail_url('large') ?>" alt=""> 
                <span class="news-category-title"><?php the_category(', '); ?></span>
                </div>
                <div class="news-desc">
                  <div class="news-date-sec text-center"> <span class="date-text"><?php the_time('j'); ?></span><br>
                    <span class="month-name"><?php the_time('M'); ?></span><br>
                    <span class="year-text"><?php the_time('Y'); ?></span> </div>
                  <div class="news-link">
                    <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>                    
                  </div>
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
  <!-- new-section end here -->
  
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
  <!-- membership-section end here -->

	




			

<?php		endwhile; // End of the loop.
		?>



<?php
get_footer();
