<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<article id="post-<?php the_ID(); ?>" class="col-6 design-item">
	
	<?php
		if ( is_sticky() && is_home() ) :
			echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
		endif;
	?>			
	<a class="design-item-container" href="<?php echo esc_url( get_permalink() ); ?>">
		<div class="img">
			<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) {
				the_post_thumbnail( 'twentyseventeen-child-featured-image' );
			} else { ?>
				<img class="lazy" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/default.jpg" alt="image">
			<?php } ?>
		</div>
		<div class="des">

			<h1 class="title"><?php the_title(); ?></h1>
			<?php $category = get_the_category(); ?>
			<span class="cat"><?php echo $category[0]->cat_name; ?></span>
			
		</div>
	</a>

	<div class="likebutton">
		
		<a href="#login">0<br><?php echo twentyseventeen_get_svg( array( 'icon' => 'slideshare' ) ); ?></a>

	</div>

</article><!-- .design-item -->
