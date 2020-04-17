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

	<footer class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<a href="/"><img src="<?php echo get_stylesheet_directory_uri();?>/images/logo.svg" alt="<?php echo $description; /* WPCS: xss ok. */ ?>"/></a>
			</div>
			<div class="col-md-1 footer-social">
				<ul>
					<li>
						<a target="_blank" href="https://www.linkedin.com/company/corramore-construction-ltd/">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/linkedin.svg" alt="Follow us on Linkedin"/>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/pages/category/Construction-Company/Crannymore-Construction-Ltd-2157840934534184/">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/facebook.svg" alt="Like us on Facebook"/>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.youtube.com">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/youtube.svg" alt="Subscribe to us on Youtube"/>
						</a>
					</li>
					<li>
						<a target="_blank" href="https://www.instagram.com/crannymore_construction/">
							<img src="<?php echo get_stylesheet_directory_uri();?>/images/instagram.svg" alt="Follow us on Instagram"/>
						</a>
					</li>
				</ul>
			</div>
			<div class="col-md-4 footer-contact">
				NEIL: <a href="tel:+44 (0) 7977 766676">+44 (0) 7977 766676</a><br />
				KENTON:  <a href="tel:+44 (0) 7977 766676">+44 (0) 7977 766676</a><br />
				<br />
				<a class="email" href="mailto:info@crannymoreconstruction.co.uk">info@crannymoreconstruction.co.uk</a>
			</div>
			<div class="col-md-5 copyright">
				© Crannymore Construction <?php echo date('Y') ?>  <a href="cookie-policy"> COOKIE POLICY </a>  <a href="#"> SITEMAP </a>

				<span>Website by <a href="https://cornellstudios.com" target="_blank">Cornell</a></span>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
