<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alliance
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$alliance_comment_count = get_comments_number();
			if ( '1' === $alliance_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'alliance' ),
					'<span>' . get_the_title() . '</span>'
				);
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $alliance_comment_count, 'comments title', 'alliance' ) ),
					number_format_i18n( $alliance_comment_count ),
					'<span>' . get_the_title() . '</span>'
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'alliance' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	<?php if ( $user_ID ) : ?>
    <p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Logout">Logout &raquo;</a></p>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post">   	
    <div class="form-group">
        <textarea class="form-control white-input" placeholder="Your message" name="comment" id="comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn blue-btn" value="Post Comment">        
    </div>
<?php comment_id_fields();
do_action('comment_form', $post->ID); ?>
</form>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" id="commentform" method="post">
    
   	<div class="form-group">
        <div class="row">
            <div class="col-md-6">
                <input type="text" value="" placeholder="Your name" class="form-control white-input" name="author" id="author" required>
            </div>
            <div class="col-md-6">
                <input type="email" value="" placeholder="Email" class="form-control white-input" name="email" id="email" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <textarea class="form-control white-input" placeholder="Your message" name="comment" id="comment"></textarea>
    </div>
    <div class="form-group">
        <input type="submit" class="btn blue-btn" value="Post Comment">        
    </div>
<?php comment_id_fields();
do_action('comment_form', $post->ID); ?>
</form>
<?php endif;?>
</div><!-- #comments -->
