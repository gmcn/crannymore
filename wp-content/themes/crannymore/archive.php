<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Starting_Theme
 */

get_header(); ?>

<?php

	include(locate_template("inc/page-elements/title.php"));
	include(locate_template("inc/page-news/filter.php"));
	include(locate_template("inc/page-news/loop.php"));

?>

<?php
get_footer();
