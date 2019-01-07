<?php

$args = array(
'post_parent' => $post->ID,
'post_type' => 'page',
'orderby' => 'menu_order',
'order' => 'ASC'
);

$child_query = new WP_Query( $args ); ?>

  <?php if ($child_query->have_posts()) : ?>

    <div class="container-fluid about-parent">
      <div class="row">

        <?php $i = 1; while ($child_query->have_posts()) : $child_query->the_post();

        $job_role = get_field('job_role');
        $menu_order = get_post_field( 'menu_order', $post->ID);

         ?>

          <div class="col-sm-6 col-md-4 col-lg-2 about-sub wow fadeInLeft matchheight" style="color: <?php echo $pageColour ?>">
            <span class="counter">#<?php echo $menu_order ?></span>
            <h2 class="matchheading">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="color: <?php echo $pageColour ?>"><?php the_title(); ?></a>
            </h2>
            <p><?php echo $job_role ?></p>
            <div class="matchimg">
              <div class="vert-align">
                <?php echo the_post_thumbnail('medium'); ?>
              </div>
              <div class="clear"></div>
            </div>

          </div>

        <?php $i++; endwhile; ?>

      </div>
    </div>

  <?php endif; wp_reset_postdata(); ?>
