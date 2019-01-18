<?php
/**
 * Template Name: Industries Child Page
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
include(locate_template("inc/page-industries/content.php"));
include(locate_template("inc/page-elements/call-back.php"));
include(locate_template("inc/page-elements/dynamic-industries.php"));

 ?>

<?php
//get_sidebar();
get_footer();
