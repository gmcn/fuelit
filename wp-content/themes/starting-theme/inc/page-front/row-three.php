<div class="row row-three news">
  <div class="col-md-4 newshead wow fadeInLeft">
    <a href="/news-events">
      <img class="dots" src="<?php echo get_template_directory_uri() ?>/images/contact_dots.png" alt="Contact FuelIT"><br />
      NEWS & EVENTS
    </a>
    <p>All the Latest News and upcoming events from the FUEL Team</p>
  </div>

  <?php

  $args = array(
	'post_type' => 'post',
  'posts_per_page' => 4,
  );

  // the query
  $the_query = new WP_Query( $args ); ?>

  <?php if ( $the_query->have_posts() ) : ?>

  	<!-- pagination here -->

  	<!-- the loop -->
  	<?php $i = 1; while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
      <div class="col-md-4 newsitem newsitem<?php echo $i ?> wow fadeInRight" style="background: url(<?php the_post_thumbnail_url(); ?>) center center;">
        <div class="overlay"> </div>
        <a href="<?php echo the_permalink(); ?>">
          <img src="<?php echo get_template_directory_uri() ?>/images/view.svg" alt="View <?php the_title() ?>">
        </a>
        <p><?php the_title(); ?></p>
      </div>
  	<?php $i++; endwhile; ?>
  	<!-- end of the loop -->

  	<!-- pagination here -->

  	<?php wp_reset_postdata(); ?>

  <?php else : ?>
  	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>


</div>
