<?php

  $pageColour = get_field('page_colour');

   if (have_rows('awards')) : ?>

    <div class="container-fluid awards">
      <div class="row">

        <?php $i = 1; while (have_rows('awards')) : the_row();

        $award_name = get_sub_field('award_name');
        $award_logo = get_sub_field('award_logo');
        $awards_site = get_sub_field('award_website');

         ?>

          <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2 award wow fadeInLeft" style="color: <?php echo $pageColour ?>">
            <span>#<?php if ($i < 10): ?>0<?php endif; ?><?php echo $i ?></span>
            <h2 style="color: <?php echo $pageColour ?>">
              <?php echo $award_name; ?>
            </h2>
            <img src="<?php echo $award_logo; ?>" alt="<?php echo $award_name; ?>">
            <?php if ($awards_site) : ?>
              <a href="<?php echo $awards_site ?>" target="_blank">Click to view their website.</a>
            <?php endif; ?>
          </div>

        <?php $i++; endwhile; ?>

      </div>
    </div>

<?php endif; wp_reset_postdata(); ?>
