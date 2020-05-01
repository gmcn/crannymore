<?php
/**
 * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("inc/page-front/hero.php"));

?>

<div class="home_bg">

	<?php

	  include(locate_template("inc/page-front/our-company.php"));
	  include(locate_template("inc/page-front/our-services.php"));
		include(locate_template("inc/page-front/our-projects.php"));
		include(locate_template("inc/page-front/commercial-clients.php"));

	?>

</div>



<?php
get_footer();
