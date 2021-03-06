<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
<link type="text/plain" rel="robots" href="<?php echo get_template_directory_uri(); ?>/humans.txt" />
<link type="text/plain" rel="author" href="<?php echo get_template_directory_uri(); ?>/robots.txt" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'starting-theme' ); ?></a>

	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-6 site-branding">

					<!-- Use any element to open/show the overlay navigation menu -->
					<span class="open" onclick="openNav()">
            <img class="hamburger" src="<?php echo get_template_directory_uri(); ?>/images/hamburger-menu.svg" />
          </span>

					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/fuelit-logo_white.svg" alt="<?php bloginfo( 'name' ); ?> | <?php get_bloginfo( 'description', 'display' ); ?>" /></a>
				</div>
				<div class="col-xs-6 support">


					<?php $support_url = get_field('support_url', 2453); ?>


					<a href="/support/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/support-icon.png" alt="Live Support">Live <span>Support</span></a>

				</div>
			</div>
		</div>

		<!-- The overlay -->
			<div id="myNav" class="overlay">

			  <!-- Button to close the overlay navigation -->
			  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

			  <!-- Overlay content -->
			  <div class="container overlay-content">

					<div class="row">

						<div class="col-md-6">
							<h3>Main Navigation</h3>
							<?php wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'menu_class' => 'accordion' ) );
								?>
						</div>

						<div class="col-xs-6 col-md-3">
							<h3>Contact Us</h3>
							Head Office:<br />
							T: +44 (0)28 3839 3839
						</div>

						<div class="col-xs-6 col-md-3">
							<h3>Search & Social</h3>
							<form action="/" method="get">
						    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
							</form>
							<a href="https://www.linkedin.com/company/micro-computer-solutions-mcs-/?trk=top_nav_home" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Follow Fuel IT on Linkedin"></a>
							<a href="https://twitter.com/itfuel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Follow Fuel IT on Twitter"></a>
							<a href="https://www.facebook.com/ITFuel/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Follow Fuel IT on Facebook"></a>
						</div>
					</div>

				</div>
			</div>


	</header><!-- #masthead -->

	<div id="content" <?php if ( !is_front_page() ) : ?> class="site-content" <?php endif; ?>>
