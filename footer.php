	<!-- Footer -->
		<footer class="site-footer">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
							<div class="widget widget_about">
								

								<?php
$footer_logo = get_theme_mod('footer_logo');
$footer_description = get_theme_mod('footer_description');

if ($footer_logo) {
    echo '<div class="footer-logo logo-white">';
    echo '<a href="/"><img src="' . esc_url($footer_logo) . '" alt="' . get_bloginfo('name') . '"></a>';
    echo '</div>';
}

if ($footer_description) {
    echo '<p class="text">';
    echo esc_html($footer_description);
    echo '</p>';
}
?>


							</div>
						</div>
						<div class="col-xl-1"></div>
						<div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
							<div class="widget widget_services">
							<?php
								$footer_menu_title = get_theme_mod('footer_menu_title');
								
								if ($footer_menu_title) {
									echo '<h5 class="footer-title">';
									echo esc_html($footer_menu_title);
									echo '</h5>';
								}
								?>
								<span></span>

								<?php
    wp_nav_menu(array(
        'theme_location' => 'footer-menu', // Replace with your menu location name
        'container' => 'ul',
        'container_class' => 'footer-menu',
        'items_wrap' => '<ul>%3$s</ul>', // Output only the menu items without the surrounding <div>
        'menu_class' => '', // CSS classes for the <ul> element (leave empty)
    ));
    ?>
							</div>
						</div>
						<div class="col-xl-2 col-lg-4 col-sm-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
							<div class="widget widget_services">
								
								<?php
								$footer_menu_title_2 = get_theme_mod('footer_menu_title_2');

								if ($footer_menu_title_2) {
									echo '<h5 class="footer-title">';
									echo esc_html($footer_menu_title_2);
									echo '</h5>';
								}
								?>
								<span></span>
								<?php
    wp_nav_menu(array(
		'theme_location' => 'footer-menu-2', // Replace with your menu location name
        'container' => 'ul',
        'container_class' => 'footer-menu',
        'items_wrap' => '<ul>%3$s</ul>', // Output only the menu items without the surrounding <div>
        'menu_class' => '', // CSS classes for the <ul> element (leave empty)
    ));
    ?>
							</div>
						</div>

						<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
							<div class="widget widget_getintuch">
								
									
								<?php
$footer_contact_form_id = get_theme_mod('footer_contact_form_id');
$contact_title = get_theme_mod('contact_title');
$upper_description = get_theme_mod('upper_description');
$down_description = get_theme_mod('down_description');

if ($contact_title) {
	echo '<h5 class="footer-title mt-4 mt-lg-0">';
    echo esc_html($contact_title);
    echo '</h5>';
}


if ($upper_description) {
	echo '<p class="text mt-4">';
    echo esc_html($upper_description);
    echo '</p>';
}

if ($footer_contact_form_id && function_exists('wpcf7')) {
	
    echo '<div class="form-group">
	<div class="input-group mb-0">';
    echo do_shortcode('[contact-form-7 id="' . esc_attr($footer_contact_form_id) . '"]');
    echo '</div></div>';
}

if ($down_description) {
    echo '<p class="text" Style="margin-top:-2rem;"">';
    echo esc_html($down_description);
    echo '</p>';
}


?>


							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Top End -->

			<!-- Footer Bottom -->
			<div class="container">
				<div class="footer-bottom">
					<div class="row fb-inner">
						<div class="col-lg-6 col-md-12 text-start my-auto">
<?php
$footer_copyright = get_theme_mod('footer_copyright');

if ($footer_copyright) {
	echo '<p class="copyright-text">';
	echo esc_html($footer_copyright);
	echo '</p>';
}
?>
	



						</div>
						<div class="col-lg-6 col-md-12 text-end">
							<div class="dz-social-icon style-1">
								<ul>
								<li>
								<?php
								$footer_facebook = get_theme_mod('footer_facebook');
								if ($footer_facebook) {
									
									echo '<a href="' . esc_url($footer_facebook) . '" target="_blank">';
									echo '<i class="fa-brands fa-facebook-f"></i></a>';
								}
									?>
									</li>
									<li>
									<?php
								$footer_twitter = get_theme_mod('footer_twitter');
								if ($footer_twitter) {
									
									echo '<a href="' . esc_url($footer_twitter) . '" target="_blank">';
									echo '<i class="fa-brands fa-twitter"></i></a>';
								}
									?>
									</li>
									<li>
									<?php
								$footer_instagram = get_theme_mod('footer_instagram');
								if ($footer_instagram) {
								
									echo '<a href="' . esc_url($footer_instagram) . '" target="_blank">';
									echo '<i class="fa-brands fa-instagram"></i></a>';
								}
									?>
										
									</li>
									<li>
									<?php
								$footer_youtube = get_theme_mod('footer_youtube');
								if ($footer_youtube) {
								
									echo '<a href="' . esc_url($footer_youtube) . '" target="_blank">';
									echo '<i class="fa-brands fa-youtube"></i></a>';
								}
									?>
										
									</li>
									<li>
									<?php
								$footer_linkedin = get_theme_mod('footer_linkedin');
								if ($footer_linkedin) {
								
									echo '<a href="' . esc_url($footer_linkedin) . '" target="_blank">';
									echo '<i class="fa-brands fa-linkedin-in"></i></a>';
								}
									?>
						
									</li>
								
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer Bottom End -->
		</footer>
		<!-- Footer End -->

		<button class="scroltop" type="button">
			<i class="fas fa-arrow-up"></i>
		</button>


        <div class="serach-div d-none">
            <div id="close-search" class="close">
                <img src="/wp-content/uploads/2023/09/cross.svg" alt="">
            </div>
            <div class="text-white text-center">
                <label for=""> Search Here</label>
                <div class="search-field">
				<?php echo custom_search_form(); ?>

                </div>
                
            </div>
        </div>


	</div>

</body>
</html>

	<!-- JAVASCRIPT FILES ========================================= -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	
	<!-- JQUERY MIN JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
	<!-- WOW JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
	<!-- BOOTSTRAP MIN JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
	<!-- BOOTSTRAP SELECT MIN JS -->
	<script src="/wp-content/themes/ARTEVO/vendor/counter/waypoints-min.js"></script>
	<!-- WAYPOINTS JS -->
	<script src="/wp-content/themes/ARTEVO/vendor/counter/counterup.min.js"></script>
	<!-- COUNTERUP JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.7.3/jquery.bootstrap-touchspin.js"></script>
	<script>


var Artevo = function(){
	
	/* WOW ANIMATION ============ */
	var wow_animation = function(){
		if($('.wow').length > 0)
		{
			var wow = new WOW(
			{
			  boxClass:     'wow',      // animated element css class (default is wow)
			  animateClass: 'animated', // animation css class (default is animated)
			  offset:       50,          // distance to the element when triggering the animation (default is 0)
			  mobile:       false       // trigger animations on mobile devices (true is default)
			});
			wow.init();	
		}	
	}
	
	/* Scroll To Top ============ */
	var scrollTop = function (){
		'use strict';
		var scrollTop = jQuery("button.scroltop");
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 100);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery("button.scroltop").fadeIn(1000);
			} else {
				jQuery("button.scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	}
	
	/* Header Fixed ============ */
	var headerFix = function(){
		'use strict';
		/* Main navigation fixed on top  when scroll down function custom */		
		jQuery(window).on('scroll', function () {
			if(jQuery('.sticky-header').length > 0){
				var menu = jQuery('.sticky-header');
				if ($(window).scrollTop() > menu.offset().top) {
					menu.addClass('is-fixed');
				} else {
					menu.removeClass('is-fixed');
				}
			}
		});
		/* Main navigation fixed on top  when scroll down function custom end*/
	}
	

	/* Function ============ */
	return {
		init:function(){
			wow_animation();
			scrollTop();
			headerFix();
		},
	}
	
}();

/* Document.ready Start */	
jQuery(document).ready(function() {
    'use strict';
	
	Artevo.init();
		
	jQuery('.navicon').on('click',function(){
		$(this).toggleClass('open');
	});
	
});
/* Document.ready END */

/* Window Load START */
jQuery(window).on('load',function () {
	'use strict'; 
	
	setTimeout(function(){
		jQuery('#loading-area').remove();
	}, 2000);
	
});
/*  Window Load END */

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menuToggle");
    const navbarNav = document.getElementById("navbarNavDropdown");

    menuToggle.addEventListener("click", function () {
        navbarNav.classList.toggle("show");
    });
});
	</script>

	<script>
        $(document).ready(function(){
          $("#search").click(function(){
            $(".serach-div").removeClass("d-none");
            $("body").addClass("overflow-hide");
          });

          $("#close-search").click(function(){
            $(".serach-div").addClass("d-none");
            $("body").removeClass("overflow-hide");
          });
        });
        </script>

	<script>
		var swiper = new Swiper(".main-swiper", {
			loop: true,
			effect: "fade",
			speed: 1000,
			parallax: true,
			autoplay: {
				delay: 2500,
			},
			pagination: {
				el: ".swiper-pagination-five",
				clickable: true,
			},
		});
	</script>

	<script>
		var swiper = new Swiper(".swiper-four", {
			slidesPerView: 3,
			centeredSlides: false,
			spaceBetween: 20,
			loop: true,
			pagination: {
				el: ".swiper-pagination-two",
			},
			autoplay: {
				delay: 3000,
			},
			navigation: {
				nextEl: ".swiper1-button-next",
				prevEl: ".swiper1-button-prev",
			},
			breakpoints: {
				1200: {
					slidesPerView: 3,
				},
				1191: {
					slidesPerView: 3,
				},
				767: {
					slidesPerView: 2,
				},
				591: {
					slidesPerView: 1,
				},
				320: {
					slidesPerView: 1,
					spaceBetween: 15,
					centeredSlides: true,
				},
			},
		});
	</script>

	<script>
		var swiper = new Swiper(".two-swiper", {
			slidesPerView: 1,
			spaceBetween: 20,
			autoplay: {
				delay: 4000,
			},
			navigation: {
				nextEl: ".swiper2-button-next",
				prevEl: ".swiper2-button-prev",
			},
			breakpoints: {
				360: {
					slidesPerView: 1,
				},
				600: {
					slidesPerView: 1,
				},
				767: {
					slidesPerView: 2,
				},
				991: {
					slidesPerView: 2,
				},
				1200: {
					slidesPerView: 4,
				},
				1680: {
					slidesPerView: 4,
				},
			},
		});
	</script>	
<script>

	var screenWidth = $( window ).width();
	
	if(screenWidth <= 991 ){
				jQuery('.navbar-nav > li > i , .sub-menu > li > i').unbind().on('click', function(e){
					if(jQuery(this).parent().hasClass('open'))
					{
						jQuery(this).parent().removeClass('open');
					}
					else{
						jQuery(this).parent().parent().find('li').removeClass('open');
						jQuery(this).parent().addClass('open');
					}
				});
			}
</script>		


<?php wp_footer(); ?>

</body>
</html>