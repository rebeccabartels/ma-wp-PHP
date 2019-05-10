<?php get_header(); ?>

<section class="slider-section digitl-article-banner">    
<div class="ar-dairy-slider owl-carousel owl-theme">
<?php

// check if the repeater field has rows of data
if( have_rows('articles_for_slider', 'option') ):
// loop through the rows of data
while ( have_rows('articles_for_slider', 'option') ) : the_row(); ?>
<?php
$post_object = get_sub_field('article');
if( $post_object ):
    // override $post
    $post = $post_object;
    setup_postdata( $post ); 
?>  

<div class="ar-slide-item item" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="banner-white-btn-sec mb-5 text-center">
                    <a href="#" class="outline-btn">Trending Content</a>
                </div>
                <h1 class="text-size-50"><?php the_title(); ?></h1>
                <ul class="article-profile-list">
                    <li><img src="<?php the_field('u_user_photo', 'user_'.get_the_author_meta( 'ID' )); ?>"></li>
                    <li>By <?php the_author(); ?></li>
                    <li>in <?php the_terms( $post->ID, 'daily_category' ); ?></li>
                    <li>on <?php echo get_the_date('F j, Y'); ?></li>
                </ul> 
                <div class="banner-white-btn-sec mt-5 text-center">
                    <a href="<?php the_permalink(); ?>" class="btn white-btn">Continue Reading <i class="lft-btn-arrow black-rt"><img src="<?php bloginfo('template_url'); ?>/images/black-rt-arrow.png" alt="Next"></i></a>
                </div>
            </div>
        </div>                
    </div>
</div>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
<?php endwhile;
else :
// no rows found
endif;
?>     
</div>
</section>
<!-- slider-section end here --> 

<div class="event-filter-panel-01 digital-diary-sec-01">
    <div class="digital-category-wrap">
  		<div class="container-fluid">
        	<div class="row">
            	<div class="col-md-12">
                	   <div class="category-white-sec">
                       		<div class="categories-head">Categories</div>
                       		<ul class="category-menu">
                            	<li><a href="<?php echo get_post_type_archive_link('article'); ?>" data-filter="*" class="current">All Categories</a></li>
                                <?php 
                                    $args = array(
                                        'style'              => 'list',                     
                                        'taxonomy'           => 'daily_category',
                                        'title_li'           => '',
                                        'separator'          => '<br />',
                                    );

                                    wp_list_categories( $args );   
                                ?>                                
                            </ul>
                       </div>
                </div>
            </div>
        </div>
        
        <div class="container">
        	<div class="row">
            	<div class="col-md-12 text-center ads-banner">
                	<a href="<?php the_field('top_horizontal_banner_link', 'option') ?>">
                        <img src="<?php the_field('top_horizontal_banner', 'option'); ?>" alt="">
                    </a>
                </div>
            </div>
        </div>
  </div>
  <!-- digital-category-wrap end here -->
    <div class="container-fluid event-filter-sec digital-diary-main">
      <div class="row">
      <div class="col-md-9 portfolioContainer">
      
      <div class="row">
      		<?php 
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- post -->
            <div class="col-md-6">
                <div class="related-post-box">
                <a href="<?php the_permalink(); ?>" class="overlay-links"></a> 
                    <div class="related-post-header" style="background:url(<?php the_post_thumbnail_url(); ?>) 0 0 no-repeat;">
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
                        <p href="javascript:void(0);" class="comment-txt"><?php comments_number( '0 comments', $one, $more ); ?></p>   
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
            <!-- post navigation -->
            <div class="col-md-12 text-center">
                <?php if (get_previous_posts_link()): ?>           
                    <a href="<?php  previous_posts(); ?>" class="btn blue-btn"> Previous Posts &nbsp; <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                <?php endif ?>
                <?php if (get_next_posts_link()): ?>
                    <a href="<?php  next_posts(); ?>" class="btn blue-btn"> Next Posts &nbsp; <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                <?php endif ?>
                
            </div>
            <?php else: ?>
            <!-- no posts found -->
            <?php endif; ?>        
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
            	<a href="<?php the_field('first_sidebar_banner_link', 'option'); ?>" target="_blank"><img src="<?php the_field('first_sidebar_banner', 'option') ?>" alt=""></a>
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
            
            <div class="sidebar-ads-box">
            	<a href="<?php the_field('third_sidebar_banner_link', 'option'); ?>" target="_blank"><img src="<?php the_field('third_sidebar_banner', 'option'); ?>" alt=""></a>   
            </div>
      </div>
      </div>
    </div>
  </div>
  <!-- event-filter-panel-01 end here -->
  
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
                	<a href="javascript:void(0)" class="btn black-btn">Click here to subscribe now <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
            </div>
  		</div>
  </div>
  <!-- grey-three-col-sec end here -->

  
  <div class="check-us-sec bg-none">
  		<div class="container">
        	<div class="row check-us-row">
            	<div class="col-md-5">
                	<h2 class="text-size-50 blue-color"><strong>Check Us Out!</strong></h2>
                    <p><?php the_field('check_us_out_text', 'option'); ?></p>
                    <a href="javascript:void()" class="btn blue-btn">About Millenium Alliance <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
                
                <div class="col-md-7 check-us-video-sec">
                	<?php the_field('check_us_out_video', 'option'); ?>                	
                </div>
            </div>
        </div>
  </div>
  <!-- check-us-sec end here -->
  <div class="about-digital-diary-sec">
  		<div class="container" style="background:url(<?php bloginfo('template_url'); ?>/images/i-pad.png) right bottom no-repeat">
        	<div class="row">
            	<div class="col-md-7">
                	<h3 class="text-size-25 blue-color"><strong>About Digital Diary</strong></h3>
                    <h2 class="text-size-50"><?php the_field('dd_digital_dairy_title', 'option'); ?></h2>
                    <p><?php the_field('dd_digital_dairy_text', 'option'); ?></p>                    
                </div>                
            </div>
        </div>
  </div>
  <!-- get-in-touch-wrap end here -->
    <div class="meaningful-wrapper">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-6">
                <div class="team-lft-sec">
                	<img src="<?php bloginfo('template_url'); ?>/images/team-image.png" class="team-image" alt="">
                    <div class="grey-circle"></div>
                </div>
                </div>
                <div class="col-md-6">
                	<h3 class="text-size-25 blue-color">Meaningful Opportunities</h3>
                    <h2 class="text-size-50"><?php the_field('dd_meaningful_opportunities_title', 'option'); ?></h2>
                    <p><?php the_field('dd_meaningful_opportunities_text', 'option'); ?></p>
                </div>
            </div>
        </div>
  </div>
  <!-- meaningful-wrapper end here -->
  
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
                	<a href="javascript:void(0)" class="btn black-btn">Click here to subscribe now <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
            </div>
  		</div>
  </div>
  
  <!-- grey-three-col-sec end here -->
  

  <div class="editorial-team-sec">
  		<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<h2 class="text-size-50"><strong>Meet Our Editorial Team</strong></h2>
                </div>
            </div>
            <?php

            // check if the repeater field has rows of data
            if( have_rows('editorial_team', 'option') ):

                // loop through the rows of data
                while ( have_rows('editorial_team', 'option') ) : the_row(); ?>

                <div class="row team-row">
                    <div class="col-md-3">
                        <div class="profile-images"><img src="<?php the_sub_field('photo'); ?>" alt=""></div>
                        <h3 class="text-size-40 blue-color"><?php the_sub_field('name'); ?></h3>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-7">
                        <p class="disc-txt"><?php the_sub_field('position'); ?></p>
                        <div class="sub-text-sec">
                            <p><?php the_sub_field('description'); ?></p>
                            <ul>
                                <?php if (get_sub_field('linkedin_link')): ?>
                                    <li>
                                        <a href="<?php the_sub_field('linkedin_link'); ?>" class="linkedin-icon"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </li>                              
                                <?php endif ?>
                                <?php if (get_sub_field('twitter_link')): ?>
                                    <li>
                                        <a href="<?php the_sub_field('twitter_link'); ?>" class="linkedin-icon"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                <?php endif ?>
                            </ul>                           
                        </div>
                    </div>
                </div>
                <?php endwhile;
            else :
                // no rows found
            endif;
            ?>          
             
            
        </div>
  </div>
  <!-- editorial-team-sec end here -->
    <div class="grey-three-col-sec">
  		<div class="container">
        	<div class="row">
        		<div class="col-md-4">
                	<h2>Become a Guest Contributor</h2>
                </div>
                <div class="col-md-4 grey-mid-col">
                	<p>Do you have content that you feel will resonate with our audience? We'd love to welcome you as a guest contributor! </p>
                </div>
                <div class="col-md-4">
                	<a href="javascript:void(0)" class="btn black-btn">Contact Digital Diary <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"> </i></a>
                </div>
            </div>
  		</div>
  </div>
  <!-- grey-three-col-sec end here -->
  
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