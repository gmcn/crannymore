<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("inc/page-elements/title.php"));
	// include(locate_template("inc/page-projects/filter.php"));
	include(locate_template("inc/page-news/content.php"));
	include(locate_template("inc/page-elements/discuss.php"));

?>

<?php
get_footer();
