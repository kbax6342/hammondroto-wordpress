<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hammondroto
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<div>


</div>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css" rel="stylesheet" type="text/css" media="all">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

	<?php wp_head(); ?>
</head>

<!--Body tag of website -->
<body <?php body_class(); ?>>


<div id="page" class="site">
	<!-- Skip to content button -->
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'hammondroto' ); ?></a> -->

	<header id="masthead" class="site-header">


				<div class="logo-address-container">

					<!--The Div that controls the logo and contents connected to the logo.-->
						<div class="site-branding">
							<?php
							the_custom_logo();
							if ( !is_front_page() && !is_home() ) :
								
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( 'hammond-home' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$hammondroto_description = get_bloginfo( 'description', 'display' );
							if ( $hammondroto_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo $hammondroto_description; /* WPCS: xss ok. */ ?></p>
							<?php endif; ?>

							
						</div><!-- .site-branding -->
						<?php
							//Adding widget to display address and phone number
							if ( is_active_sidebar( 'custom-header-widget' ) ) : ?>
								<div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
								<?php dynamic_sidebar( 'custom-header-widget' ); ?>
								</div>
								
						<?php endif; ?>
				</div>

			<div class="nav-wrapper" >

								<div class="mobile-search-box">
									<input  name="search" type="text" placeholder=''>
								</div>

				<!--The tags that control the navigation and all the contents inside-->
				<nav id="menu" role="navigation" class="main-navigation">
					
					<div class="wrapper">

							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 
														'container_id' => 'cssmenu',
														'walker' => new CSS_Menu_Maker_Walker() ) ); ?>

							<div class="search-box">
								<input  name="search" type="text" placeholder=''>
							</div>



					</div>

			</div>
			
		</nav><!-- #site-navigation -->

		


	</header><!-- #masthead -->

	
	