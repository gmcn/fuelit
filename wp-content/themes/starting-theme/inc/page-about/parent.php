<?php

$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order',
'order' => 'ASC'
);

$child_query = new WP_Query( $args ); ?>

  <?php if ($child_query->have_posts()) : ?>

    <div class="container-fluid">
      <div class="row">

        <?php while ($child_query->have_posts()) : $child_query->the_post();

        $job_role = get_field('job_role');
        $menu_order = get_post_field( 'menu_order', $post->ID);

         ?>

          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 wow fadeInLeft" style="color: <?php echo $pageColour ?>">
            #<?php echo $menu_order ?>
            <h2>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="color: <?php echo $pageColour ?>"><?php the_title(); ?></a>
            </h2>
            <p><?php echo $job_role ?></p>
            <?php echo the_post_thumbnail('medium'); ?>
          </div>

        <?php endwhile; ?>

      </div>
    </div>

  <?php endif; wp_reset_postdata(); ?>
