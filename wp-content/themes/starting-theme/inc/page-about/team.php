    <div class="container-fluid people">
      <div class="row">

        <?php while ( have_posts() ) : the_post();

        $job_role = get_field('job_role');
        $menu_order = get_post_field( 'menu_order', $post->ID);

         ?>

          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 people__person wow fadeInLeft" style="color: <?php echo $pageColour ?>">
            #<?php if ($menu_order < 10): ?>0<?php endif; ?><?php echo $menu_order ?>
            <h2>
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" style="color: <?php echo $pageColour ?>"><?php the_title(); ?></a>
            </h2>
            <p><?php echo $job_role ?></p>
            <?php echo the_post_thumbnail('medium'); ?>
          </div>

        <?php endwhile; ?>

      </div>
    </div>
