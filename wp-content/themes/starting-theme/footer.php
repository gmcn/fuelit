<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starting_Theme
 */

?>

	</div><!-- #content -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<footer class="site-footer">

		<div class="container-fluid">

			<div class="row">
				<div class="col-md-2 footer-branding">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/images/fuelit-logo_white.svg" alt="<?php bloginfo( 'name' ); ?> | <?php get_bloginfo( 'description', 'display' ); ?>" /></a>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-2">
							<h4>WHAT WE OFFER</h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-1' ) );
								?>
						</div>
						<div class="col-md-2">
							<h4>WHAT WE’VE DONE</h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-2' ) );
								?>
						</div>
						<div class="col-md-2">
							<h4>INDUSTRIES WE WORK IN</h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-3' ) );
								?>
						</div>
						<div class="col-md-2">
							<h4><a href="/why-come-to-fuel/">WHY COME TO FUEL</a></h4>
							<?php wp_nav_menu( array(
								'theme_location' => 'footer-4' ) );
								?>
						</div>
						<div class="col-md-2">
							<h4><a href="/products">PRODUCT PORTFOLIO</a></h4>
						</div>
						<div class="col-md-2">
							<h4><a href="#">NEWS & EVENTS</a></h4>
						</div>
					</div>
				</div>
			</div>


			<div class="row signature">
				<div class="col-md-2 copyright">
					 © Copyright <span>Fuel IT 2018</span>
				</div>
				<div class="col-md-10">
					<div class="row">
						<div class="col-md-2 policy">
							<a href="privacy-policy">Privacy Policy</a>
							<a href="cookies">Cookies</a>
						</div>
						<div class="col-md-2 col-md-offset-4 byline">
							Website by <a href="https://www.cornellstudios.com" target="_blank">Cornell</a>
						</div>
						<div class="col-md-2 contact">
							<a href="/contact">Contact Us</a>
						</div>
						<div class="col-md-2">
							<a class="support" href="https://get.teamviewer.com/tdq85xc" target="_blank">LIVE <span>SUPPORT</span></a>
							<a href="https://www.linkedin.com/company/micro-computer-solutions-mcs-/?trk=top_nav_home" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Follow Fuel IT on Linkedin"></a>
							<a href="https://twitter.com/itfuel" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Follow Fuel IT on Twitter"></a>
							<a href="https://www.facebook.com/ITFuel/" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="Follow Fuel IT on Facebook"></a>
						</div>
					</div>
				</div>
			</div>

		</div>



	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
