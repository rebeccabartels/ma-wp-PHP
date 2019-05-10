<?php get_header(); ?>

<div class="banner-wrapper" style="background:url(<?php the_field('home_hero'); ?>) 0 0 no-repeat;">
<video autoplay loop id="video-background" muted>
<source src="<?php the_field('home_hero_video'); ?>" type="video/mp4">

</video>
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1 class="text-size-52 text-uppercase mb-30"><?php the_field('home_title'); ?></h1>
          <h2 class="heading-level-02 mb-40"><span class="home-subtitle"><?php the_field('home_subtitle'); ?></span> <span class="light-text trans"><?php the_field('home_light_subtitle'); ?></span> <span class="light-text leaders"><?php the_field('home_light_subtitle1'); ?></span></h2>
          <p class="text-size-33 mb-60 home-bnr-para"><?php the_field('home_hero_text'); ?></p>
          <a href="<?php echo site_url(); ?>/event" class="btn blue-btn">View Upcoming Assemblies <i class="lft-btn-arrow"><img src="<?php bloginfo('template_url'); ?>/images/white-rt-arrow.png" alt="Next"></i> </a> </div>
        <div class="col-md-1"> </div>
        <div class="col-md-4">
          <div class="home-form">
            <div class="home-form-content">
              <h2 class="text-size-29">Request Access to<br>
                our <strong>premium content.</strong></h2>
              <?php echo do_shortcode('[contact-form-7 id="317" title="Home hero"]'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- banner-wrapper end here -->
  
  <div class="home-partner-logo">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2 black-bg">
          <h5 class="text-size-18"><?php the_field('home_our_partners_title'); ?></h5>
        </div>
        <div class="col-md-10">
          <div class="home-partner-slider owl-carousel owl-theme">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('home_partners') ):

              // loop through the rows of data
                while ( have_rows('home_partners') ) : the_row(); ?>

                  <div class="item"> <a href="<?php the_sub_field('partner_link'); ?>"><img src="<?php the_sub_field('partner_logo'); ?>" alt=""></a> </div>

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
  <!-- home-partner-logo end here -->
  
  <div class="about-article-sec-01 bg-none" id="unique-access">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="blue-title"><?php the_field('unique_access_subtitle'); ?></h2>
          <h3 class="about-article-heading"><?php the_field('unique_access_title'); ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="row mb-60">
            <div class="col-sm-9">
              <p><?php the_field('unique_access_text'); ?></p>
            </div>
            <div class="col-sm-3"> <img src="<?php bloginfo('template_url'); ?>/images/welcome.png" alt=""> </div>
          </div>
        </div>
        <div class="col-sm-4">
        <a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
          <h4 class="interested-in-millen">Interested in Millennium Membership? <span>Find out if you qualify here.</span></h4>
          <a href="javascript:void(0);" class="black-rt-link"><img src="<?php bloginfo('template_url'); ?>/images/black-rt-arrow.png" alt=""></a> </div>
      </div>
    </div>
  </div>
  <!-- about-article-sec-01 end here -->
  
  <div class="home-gallery-sec">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 p-0">
          <figure> <img src="<?php the_field('first_opportunity_image'); ?>" alt=""> </figure>
          <figcaption>
            <h4 class="text-size-23"><?php the_field('first_opportunity_title'); ?></h4>
            <p><?php the_field('first_opportunity_text'); ?></p>
          </figcaption>
        </div>
        <div class="col-sm-3 p-0">
          <figure> <img src="<?php the_field('second_opportunity_image'); ?>" alt=""> </figure>
          <figcaption>
            <h4 class="text-size-23"><?php the_field('second_opportunity_title'); ?></h4>
            <p><?php the_field('second_opportunity_text'); ?></p>
          </figcaption>
        </div>
        <div class="col-sm-3 p-0">
          <figure> <img src="<?php the_field('third_opportunity_image'); ?>" alt=""> </figure>
          <figcaption>
            <h4 class="text-size-23"><?php the_field('third_opportunity_title'); ?></h4>
            <p><?php the_field('third_opportunity_text'); ?></p>
          </figcaption>
        </div>
        <div class="col-sm-3 p-0">
          <figure> <img src="<?php the_field('fourth_opportunity_image'); ?>" alt=""> </figure>
          <figcaption>
            <h4 class="text-size-23"><?php the_field('fourth_opportunity_title'); ?></h4>
            <p><?php the_field('fourth_opportunity_text'); ?></p>
          </figcaption>
        </div>
      </div>
    </div>
  </div>
  <!-- home-gallery-sec end here -->
  
  <div class="leadership-wrapper" id="leadership">
  	   <div class="container">
       	  <div class="row">
          		<div class="col-md-7">
                	<h2 class="blue-title"><?php the_field('leadership_subtitle'); ?></h2>
                    <h3 class="about-article-heading"><?php the_field('leadership_title'); ?></h3>
                    <p><?php the_field('leadership_text'); ?></p>
                </div>
          </div>
       </div>
        <div class="container-fluid">
    	<div class="row">
        	<div class="col-md-12">
            <div class="leader-slider owl-carousel owl-theme" id="leader-slider">
            	<?php

              // check if the repeater field has rows of data
              if( have_rows('leaders') ):

                // loop through the rows of data
                  while ( have_rows('leaders') ) : the_row(); ?>

                    <div class="item">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#<?php echo get_row_index(); ?>">
                      <div class="leader-thumb-box">
                          <figure class="leader-image">
                              <img src="<?php the_sub_field('leader_photo'); ?>" alt="">
                            </figure>
                            <div class="leader-desc">
                              <h3 class="text-size-18 blue-color"><strong><?php the_sub_field('leader_name'); ?></strong></h3>
                                <h5 class="text-size-14"><?php the_sub_field('leader_position'); ?></h5>
                                <div class="leader-logo-sec">
                                  <img src="<?php the_sub_field('leader_logo'); ?>" alt="">
                                </div>
                            </div>
                        </div>
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
       </div>
  </div>
  <!-- leadership-wrapper end here -->
  <div class="news-section" id="insights">
    <div class="ver-line"></div>
    <div class="ver-line ver-line-02"></div>
    <div class="ver-line ver-line-03"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="blue-title">Insights</h2>
          <h3 class="about-article-heading">Recent Millennium News</h3>
        </div>
        <div class="col-md-4 full-width-btn"> <a href="<?php echo site_url(); ?>/news" class="btn grey-btn">See All Recent News <i class="lft-btn-arrow black-rt"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt="Next"></i></a> </div>
      </div>
      <div class="row">
        <?php 
        // задаем нужные нам критерии выборки данных из БД
        $args = array(
          'posts_per_page' => 4
        );

        $query = new WP_Query( $args );

        // Цикл
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
            
            <div class="col-md-6">
              <div class="news-box">
              <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
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
  <div class="home-millenniumlife" id="millenniumlife">
    <div class="container">
    <div class="row">
      <div class="col-sm-5 col-md-4">
        <h2 class="text-size-50 blue-color">#MillenniumLive</h2>
      </div>
      <div class="col-sm-4 full-width-btn">
        <ul class="social-media">
          
          
          
          
          
           <li><a href="https://www.facebook.com/MillenniumAlliance" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/Mill_All" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/millennium_alliance/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCJgFlsBHBF2u7Dl28seltUA/feed" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          
        </ul>
      </div>
      </div>
    </div>
    <div class="container-fluid">
    	<div class="row">
       <div class="col-12">
         <?php
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "2451775934-3bwdA2eer4f81e2heGDlRbceEOr76E7gXMAXeAx",
    'oauth_access_token_secret' => "uPns5Zc1luU4TdUZIAcK92FRPGcswWO06bq2FYR1sxVsx",
    'consumer_key' => "soGzwzqWrusUO7c8NnD4gyngJ",
    'consumer_secret' => "D2aznDus6q41joO1gcpxcfxUGJWB5jn5JiYjzwaKJ4lqUo7All"
);

$url = "https://api.twitter.com/1.1/statuses/user_timeline.json";

$requestMethod = "GET";

$getfield = '?count=8';

$twitter = new TwitterAPIExchange($settings);
/*echo $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();*/
$string = json_decode($twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest(),$assoc = TRUE);
if(!function_exists('twitter_time_diff'))
      {
        function twitter_time_diff( $from, $to = '' ) {
            $diff = human_time_diff($from,$to);
            $replace = array(
                ' hour' => 'h',
                ' hours' => 'h',
                ' day' => 'd',
                ' days' => 'd',
                ' minute' => 'm',
                ' minutes' => 'm',
                ' second' => 's',
                ' seconds' => 's',
            );
            return strtr($diff,$replace);
        }
      }
?>
       </div> 
      </div>
      <div class="row">
        	<div class="col-md-12">
            <div class="mlife-slider owl-carousel owl-theme">
            <?php foreach ($string as $twit): ?>
              
            <div class="item">
            
              <div class="millenniumlife-box">
                  <time class="time-hours"> <?php
                  $twittime = strtotime($twit['created_at']);
                  $timeDisplay = human_time_diff($twittime, current_time('timestamp'));               
                
                  $displayAgo = " ago";                
                printf(__('%1$s%2$s'), $timeDisplay, $displayAgo);

              ?></time>
                    <figcaption>
                      <?php echo $twit['text'] ?>
                    </figcaption>
                    
                    <ul class="like-list">
                      <li><a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $twit['id_str']; ?>" target="_blank">Like</a></li>
                        <li><a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $twit['id_str']; ?>" target="_blank">Retweet</a></li>
                        <li><a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $twit['id_str']; ?>" target="_blank">Reply</a></li>
                    </ul>
                </div>
            </div>

            <?php endforeach ?>            
            </div>
        </div>
    </div>
  </div>
  <!-- home-millenniumlife end here -->
  
  <div class="testimonial-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h2 class="about-article-heading">What People Are Saying</h2>
        </div>
        <div class="col-md-4"> <a href="<?php echo site_url(); ?>/testimonials" class="btn grey-btn">See All Testimonials <i class="lft-btn-arrow black-rt"><img src="<?php bloginfo('template_url'); ?>/images/next-arrow.png" alt="Next"></i></a> </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="testimonial-slider owl-carousel owl-theme">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('home_testimonials') ):

              // loop through the rows of data
                while ( have_rows('home_testimonials') ) : the_row() ?>

                    <div class="item">
                      <figure>
                        <?php the_sub_field('video'); ?>
                      </figure>
                      <figcaption class="text-center">
                        <p><?php the_sub_field('video_title'); ?></p>
                      </figcaption>
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
  <!-- testimonial-wrapper end here -->
  <div class="about-article-sec-01 bg-none" id="members">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-sm-9 mt-50">
              <h3 class="about-article-heading"><?php the_field('millennium_members_title'); ?></h3>
              <p><?php the_field('millennium_members_text'); ?></p>
            </div>
            <div class="col-sm-3"> <img src="<?php bloginfo('template_url'); ?>/images/welcome.png" alt=""> </div>
          </div>
        </div>
        <div class="col-sm-4">
        	<a href="<?php echo site_url(); ?>/contact-us" class="overlay-link"></a>
          <h4 class="interested-in-millen">Interested in Millennium Membership? <span>Find out if you qualify here.</span></h4>
          <a href="<?php echo site_url(); ?>/contact-us" class="black-rt-link"><img src="<?php bloginfo('template_url'); ?>/images/black-rt-arrow.png" alt=""></a> </div>
      </div>
    </div>
  </div>
  <!-- about-article-sec-01 end here -->
  
  <div class="home-ads-logo-wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="home-ads-slider owl-carousel owl-theme">
            <?php

            // check if the repeater field has rows of data
            if( have_rows('millennium_members') ):

              // loop through the rows of data
                while ( have_rows('millennium_members') ) : the_row(); ?>

                  <div class="item"> <a href="<?php the_sub_field('logo_link'); ?>"><img src="<?php the_sub_field('logo'); ?>" alt=""></a> </div>

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
  <!-- home-ads-logo-wrap end here -->
</div>



<?php get_footer(); ?>

<?php

              // check if the repeater field has rows of data
              if( have_rows('leaders') ):

                // loop through the rows of data
                  while ( have_rows('leaders') ) : the_row(); ?>

                    <div class="modal profile-popup fade" id="<?php echo get_row_index(); ?>">
                      <div class="modal-dialog modal-lg">
                          <div class="modal-content profile-content">
                              <button type="button" class="close" data-dismiss="modal">Close</button>
                              <div class="modal-body">
                                  <div class="profile-white-sec">
                                     <div class="profile-lft-sec">
                                         <img src="<?php the_sub_field('leader_photo'); ?>" alt="">
                                      </div>
                              
                                      <div class="profile-rt-sec">
                                <div class="profile-header">
                                <h2 class="text-size-30"><?php the_sub_field('leader_name'); ?></h2>
                                  <img src="<?php the_sub_field('leader_logo'); ?>" alt="">
                                  <h6 class="text-size-16"><?php the_sub_field('leader_position'); ?></h6>
                                  </div>
                                  <div class="profile-desc">
                                    <?php the_sub_field('leader_text'); ?>
                                  </div>
                              </div>
                                  </div>
                              </div>
                        </div>
                      </div>
                  </div>

                  <?php endwhile;

              else :

                  // no rows found

              endif;

              ?>
<div class="modal profile-popup subscription-popup fade" id="subsload">
    <div class="modal-dialog modal-lg">
      <div class="modal-content profile-content">
      <button type="button" class="close" data-dismiss="modal">Close</button>
        <div class="modal-body">
         <div class="profile-white-sec subs-sec">
        	
	
    	<div class="subs-image-sec">
        	<img src="<?php bloginfo('template_url'); ?>/images/subs-img.jpg" alt="">
        </div>
        <div class="subs-form">
        	<h2 class="">Don’t Miss Our
Latest News</h2>
<p>Enter your email below to get exclusive offers
& the latest news in your inbox</p>
<div class="form-group">
	<input type="email" class="form-control" value="" placeholder="Your Email Address">
    
    <input type="submit" class="btn blue-btn" value="Join The Millennium Alliance Community">
</div>

<div class="no-thanks-sec">
	<a href="javascript:void(0)">No, thanks</a>
</div>
        </div>
   

        </div>
        </div>
      </div>
    </div>
  </div>