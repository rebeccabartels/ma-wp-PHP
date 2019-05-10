<?php get_header(); ?>

<div class="ver-line"></div>
<div class="ver-line ver-line-02"></div>
<div class="ver-line ver-line-03"></div>
  
  <!-- slider-section end here -->
  
  <div class="article-news about-article">
  <div class="about-article-sec-01 bg-none">
    <div class="container">
    <div class="row">
    <div class="col-sm-12">
    	<h3 class="about-article-heading"><?php the_field('ks_keynote_speakers_title'); ?></h3>
     </div>
     </div>
      <div class="row">
        <div class="col-sm-8">
          <div class="row mb-60">
          	<div class="col-sm-9">
            	<p><?php the_field('ks_keynote_speakers_text'); ?></p>
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
  <div class="about-article-sec-02 bg-none">
  		<div class="container">       	
            
            <div class="row">
            	<?php 
                $post_objects = get_field('ks_keynote_speakers');
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

<?php get_footer(); ?>

<?php 
$post_objects = get_field('ks_keynote_speakers');
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