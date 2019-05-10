<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alliance
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title>MA</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class('cbp-spmenu-push  cbp-spmenu-push-toright'); ?>>
<div class="menu-burger-bar"> <a href="javascript:void(0)" id="showLeftPush"><span class="menu-text">Menu</span><span class="menu-icon"><img src="<?php bloginfo('template_url'); ?>/images/menu.png" class="mobilemenu-icon" alt="menu"> <img class="closemenu" src="<?php bloginfo('template_url'); ?>/images/colse-icon.png" alt="menu"></span></a> </div>
<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left cbp-spmenu-open" id="cbp-spmenu-s1">
  <?php 
    wp_nav_menu( [
    'theme_location'  => '',
    'menu'            => '', 
    'container'       => '', 
    'container_class' => '', 
    'container_id'    => '',
    'menu_class'      => 'menu', 
    'menu_id'         => '',
    'echo'            => true,
    'fallback_cb'     => 'wp_page_menu',
    'before'          => '',
    'after'           => '',
    'link_before'     => '',
    'link_after'      => '',
    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
    'depth'           => 0,
    'walker'          => '',
  ] );
   ?>
  
</nav>
<header class="header-top">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 head-col-1"> <span class="brand"><a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="MA"></a></span> <div class="form-group hidden-lg">
          <input type="text" class="form-control" value="" placeholder="Search">
        </div></div>
      <div class="col-md-3 head-col-2">
        <p>The Millennium Alliance is an invitation-only organization for Senior-Level Executives and Business Transformers.</p>
      </div>
      <div class="col-md-4 head-col-3">
      	<div class="upcoming-title hidden-lg">Upcoming Assemblies</div>
      	
        <div class="upcoming-slider owl-carousel owl-theme">
          
          <?php 
        // задаем нужные нам критерии выборки данных из БД
        $args = array(
          'posts_per_page' => 2,
          'post_type' => 'event'
        );

        $query = new WP_Query( $args );

        // Цикл
        if ( $query->have_posts() ) {
          while ( $query->have_posts() ) {
            $query->the_post(); ?>
        
        <div class="item">
          <ul class="top-menu-list">
            <li><a href="<?php echo site_url(); ?>/event">Upcoming Assemblies</a></li>
            <li><?php the_field('date'); ?></li>
            <li><?php the_field('location'); ?></li>
          </ul>
          <div class="digital-market-sec row">
            <div class="col-md-8"> <span class="digital-market-text"><?php the_title(); ?></span> </div>
            <div class="col-md-4"> <a href="<?php the_permalink(); ?>" class="see-more-link">See More Info</a> </div>
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
      <div class="col-md-3 head-col-4"> <a href="tel: 2122569890" class="tel-no"> 212-256-9890</a>
        <ul class="social-media">
          <li><a href="https://www.facebook.com/MillenniumAlliance" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href="https://twitter.com/Mill_All" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
          <li><a href="https://www.instagram.com/millennium_alliance/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <li><a href="https://www.youtube.com/channel/UCJgFlsBHBF2u7Dl28seltUA/feed" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
          <!--<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>-->
          <li><a href="https://www.linkedin.com/company/the-millennium-alliance" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        </ul>
        <div class="form-group">
          <input type="text" class="form-control" value="" placeholder="Search">
        </div>
      </div>
    </div>
  </div>
</header>
<!-- header end here -->
<div class="site-wrapper">