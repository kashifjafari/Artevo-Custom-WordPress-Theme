<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package artevo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Meta -->
	<meta charset="utf-8" />
	<meta name="keywords" content="" />
	<meta name="author" content="artevo" />
	<meta name="robots" content="" />
	<meta name="description" content="Artevo" />
	<meta property="og:title" content="Artevo" />
	<meta property="og:description" content="Artevo Website" />
	<meta name="format-detection" content="telephone=no" />

	<!-- FAVICONS ICON -->
	<link rel="icon" type="image/x-icon" href="images/favicon.png" />

	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/10.3.1/swiper-bundle.min.css" />
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css" />

	<!-- GOOGLE FONTS-->
	<link rel="preconnect" href="https://fonts.googleapis.com/" />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
		rel="stylesheet"/>

		
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
<div class="page-wraper">
		<!-- Header -->
		<header class="site-header mo-left header style-1">
			<!-- Main Header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix">
					<div class="container clearfix">
						<!-- Website Logo -->
						<div class="logo-header logo-dark">
							<a href="/"> <?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?></a>
						</div>

						<!-- Nav Toggle Button -->
						<button class="navbar-toggler navicon justify-content-end  collapsed " type="button" id="menuToggle">
							<span></span>
							<span></span>
							<span></span>
						</button>

						<!-- Main Nav -->
						<div class="header-nav navbar-collapse justify-content-evenly" id="navbarNavDropdown">
							<div class="logo-header logo-dark">
								<a href="/"><?php
            if (has_custom_logo()) {
                the_custom_logo();
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
            ?></a>
							</div>
							
							
							
							<?php
                           // Display the primary menu
                           wp_nav_menu(array(
                               'theme_location' => 'primary-menu', // Replace with your menu location name
                               'container' => 'ul', // HTML element to wrap the menu (e.g., 'div', 'nav', 'ul')
                               'container_class' => 'navbar-nav', // CSS class for the container element
                               'menu_class' => 'nav navbar-nav', // CSS classes for the <ul> element
                               'walker' => new Custom_Menu_Walker(),
                           ));
                           ?>
                           
                           <div class="d-flex align-items-center search-input">
								<a href="javascript:void(0);" onclick="showSearch()" id="search" class=" header-search-btn" type="button">
									<i class="flaticon-loupe me-1"></i> Search
								</a>
								<span class="">&nbsp; | &nbsp;</span>
								<select class="btn header-lang-selection">
									<option>English</option>
									<option>عربي</option>
								</select>


							</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Main Header End -->
		</header>
		<!-- Header End -->