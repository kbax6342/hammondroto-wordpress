<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hammondroto
 */

?>

</div><!-- #content -->

	<footer id="colophon" class="site-footer">

	<div class="footer-wrapper">



	<!-- Footer main -->
	<section id="footer-main">
	<div class="site-info">
			<!-- logo and google map-->
			<div id="logo-map">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>

			<!-- Our Services -->
			<div id="our-services">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>

			
			<div id="recent-posts">

			<?php dynamic_sidebar( 'footer-3' ); ?>
			
				
			</div>

			<!-- Contact Info -->
			<div id="contact-info">
				<?php dynamic_sidebar( 'footer-4' ); ?>
			</div>

		</div><!-- .site-info -->

	</section>

	<!-- Footer social -->
	<section>
	<ul class="ft-social-list">
          <li><a href="#"><i class="fab fa-facebook"></i></a></li>
          <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          <li><a href="#"><i class="fab fa-github"></i></a></li>
          <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
          <li><a href="#"><i class="fab fa-youtube"></i></a></li>
        </ul>
	</section>

	<!-- Footer legal -->
	<section id="footer-legal">
	<ul class="ft-legal-list">
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="https://www.spectrumnetdesigns.com/">&copy; Hammond Roto-Finish 2019 - All Rights Reserved. Site Designed by Spectrum Net Designs</a></li>
        </ul>
	</section>

	</div><!--footer wrapper -->

		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
