<?php
/**
 * The template for displaying all pages
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

if (is_page( 'join-the-team' )) :

  include(locate_template("inc/page-careers/child.php"));

endif;

if ($post->post_parent == '142') :

include(locate_template("inc/page-careers/content.php"));

endif;

?>



<?php
//get_sidebar();
get_footer();
