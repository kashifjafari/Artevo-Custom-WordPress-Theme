<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package artevo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pt-3 pb-3">
	<div class="d-flex container search-section">
		<div class="search-thumb">
			<?php artevo_post_thumbnail(); ?>
		</div>
		<div class="d-block pt-2">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
			artevo_posted_on();
			?>
			<br/>
			<?php
			artevo_posted_by();
			?>
		</div><!-- .entry-meta -->
		
		<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
		</div>
		</div>
		<?php endif; ?>
	</header><!-- .entry-header -->

	

	<!-- <footer class="entry-footer">
		<?//php artevo_entry_footer(); ?>
	</footer> -->
	<!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->