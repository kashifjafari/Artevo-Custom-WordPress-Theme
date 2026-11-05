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
 * @package artevo
 */

get_header();
?>

<!--Header Banner Start -->
<div class="header-banner position-relative">
		<img class="banner-size" src="<?php echo esc_html(get_theme_mod('blog_banner')); ?>" alt="" />
	</div>
	<!--Header Banner End-->
	<main id="primary" class="site-main container">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<section class="content-inner-3">
				<div class="container">
                    <div class="breadcrumb-detail">
                        <h2 class="breadcrumb-title"><?php single_post_title(); ?></h2>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="<?php esc_url(home_url('/')); ?>">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right"></i><?php single_post_title(); ?></li>
                        </ol>
                    </div>

                </div>
            </section>
			<section class="content-inner-4 pt-0">
				<div class="container">

					<div class="flex-3-container">
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/index-content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
			</div>
				</div>
			</section>
	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
