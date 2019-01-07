<?php

$terms = get_the_terms( get_the_ID(), 'category');
$term = array_pop($terms);
$post_colour = get_field('post_colour', $term );

 ?>

<div class="container-fluid blog__single">
  <div class="row no-gutters">
    <div class="back" style="background: <?php echo $post_colour ?>">
      <a href="/news-events/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to News & Events">Back to News & Events</a>
    </div>
    <div class="col-md-6 matchheight wow fadeInLeft">
      <div class="blog__single__title__wrapper" style="background: <?php echo $post_colour ?>">
        <p><?php the_date('d.m.y'); ?></p>
        ...
        <h2><?php the_title(); ?></h2>
      </div>
      <div class="blog__single__content__wrapper">
        <?php the_content(); ?>
      </div>
      <div class="back" style="background: <?php echo $post_colour ?>">
        <a href="/news-events/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to News & Events">Back to News & Events</a>
      </div>
    </div>
    <div class="col-md-6 thumbimg matchheight wow fadeInRight">

      <?php if( have_rows('gallery') ): ?>

        <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

        </a>


        <span>Click On the Image To View More Images. <img class="more" src="<?php echo get_template_directory_uri() ?>/images/view.svg" alt="View <?php the_title() ?>"></span>
      <?php else : ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
      <?php endif; ?>

    </div>

  </div>
</div>


<?php if( have_rows('gallery') ): ?>
  <!-- Hidden Gallery -->
  <div class="hidden">
    <?php while( have_rows('gallery') ): the_row();

      // vars
      $image = get_sub_field('image');
      $image_title = get_sub_field('image_title');

      ?>

        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
          <?php echo $image_title ?>
        <?php else : ?>
          <?php the_title(); ?>
        <?php endif; ?>">

            <img src="<?php echo $image ?>" alt="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>" />

        </a>


    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
