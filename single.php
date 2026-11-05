<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package artevo
 */

get_header();
?>
	<!--Header Banner Start -->
<div class="header-banner position-relative">
<?php artevo_post_thumbnail(); ?>
			</div>
			<!--Header Banner End-->

	<main id="primary" class="site-main container">
	<section class="content-inner-3">
				<div class="container">
                    <div class="breadcrumb-detail">
                        <h2 class="breadcrumb-title"><?php single_post_title(); ?></h2>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="/">Home</a></li>

						  <?php 
						  if (is_single()) {
							// Get the URL of the blog page
							$blog_page_url = get_permalink(get_option('page_for_posts'));
							
							// Output the "Back to Blog" button
							echo '<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right"></i><a href="' . esc_url($blog_page_url) . '">Media</a></li>';
						}
						  ?>
                          <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right"></i><?php single_post_title(); ?></li>
                        </ol>
                    </div>

                </div>
            </section>

			<section class="content-inner-4 pt-0">
				<div class="container articleDetail">
					<div class="row ">
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
							<div class="mediaSub mb-2">
                                <span><?php artevo_category_list(); ?></span><span class="mx-2">|</span> <span><?php artevo_posted_on() ?></span>
                            </div>
						</div>
						<div class="entry-content">
						<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'artevo' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'artevo' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>
		<?php
			
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		?>
</div>
				</div>
			</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
