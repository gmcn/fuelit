<?php
/**
 * Template Name: About Child Page
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

include(locate_template("inc/page-elements/title.php"));
include(locate_template("inc/page-about/history.php"));
include(locate_template("inc/page-about/content.php"));
include(locate_template("inc/page-about/awards.php"));
include(locate_template("inc/page-about/post-content.php"));

 ?>

<?php
//get_sidebar();
get_footer();
