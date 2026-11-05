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
							echo '<li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right"></i><a href="/project">Projects</a></li>';
						}
						  ?>
                          <li class="breadcrumb-item active" aria-current="page"><i class="fa fa-chevron-right"></i><?php single_post_title(); ?></li>
                        </ol>
                    </div>

                </div>
            </section>

			<section class="content-inner-4 pt-0">
				<div class="container projectDetail">
					<div class="row ">
                            
                    
						<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
						
                        <h3 class="title">
                        <?php $value = get_field( "first_heading" ); if( $value ) { echo $value; } ?>
                    </h3>
                    </div>

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-4">
                        <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                        
                            <img class="w-100" src="<?php $value = get_field( "banner_image1" ); if( $value ) { echo $value; } ?>" alt="">
                        </div>
                    </div>

                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-4">
							<div class="row justify-content-between">
								<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12">
									<div class="wow fadeInUp" data-wow-delay="0.4s">
										<span class="shape"></span>
										<h4 class="sub-title">Project Information</h4>
										
		
										<div class="projectInfo">
											<p>
												<span class="strong projectTitle">Client: </span> 
												<?php $terms = get_the_terms(get_the_ID(), 'clients');

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo '<span class="projectDiscription">' . $term->name . '</span>';
    }
} ?>
											</p>
											<p>
												<span class="strong projectTitle">Date: </span> 
												<span class="projectDiscription">
                                             <?php $value = get_field( "project_date" ); if( $value ) { echo $value; } ?></span>
											</p>
											<p>
												<span class="strong projectTitle">Category: </span> 
												<?php $terms = get_the_terms(get_the_ID(), 'p-category');

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo '<span class="me-3">' . $term->name . '</span>';
    }
} ?>


											</p>
											<p>
												<span class="strong projectTitle">Artist: </span> 
												<span class="projectDiscription">
                                                <?php $terms = get_the_terms(get_the_ID(), 'artists');

if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo '<span class="projectTag me-3">' . $term->name . '</span>';
    }
} ?>
												</span>
											</p>
											<p>
												<span class="strong projectTitle">Location: </span> 
												<span class="projectDiscription">
                                               <?php $value = get_field( "location" ); if( $value ) { echo $value; } ?>
                                                </span>
											</p>
										</div>
		
									</div>
								</div>
                                <?php $value = get_field( "project_info_image" ); if( $value ) { echo
								'<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12">
									<div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                                        
										<img class="w-100" src="' . $value . '" alt="">
									</div>
								</div>' ; } ?>
                                <?php $value = get_field( "banner_image2" ); if( $value ) { echo '
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 my-4">
                            <div class="text-center wow fadeInUp" data-wow-delay="0.2s">
                                <img class="w-100" src="' . $value . '" alt="">
                            </div>
						</div>'; } ?>
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
        <?php $value = get_field( "banner_image3" ); if( $value ) { echo '
        <div class="col-md-12 my-3 my-lg-5">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.3s">
                                        <img class="w-100" src="' . $value . '" alt="">
                                    </div>
                                </div>' ; } ?>

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