<?php
$terms = get_the_terms( get_the_ID(), 'products_area');
$term = array_pop($terms);
$post_colour = get_field('post_colour', $term );
$product_logo = get_field('product_logo');
$product_intro = get_field('product_intro');

$content_col1 = get_field('column_1');
$content_col2 = get_field('column_2');
 ?>


<div class="container-fluid products__single">

  <div class="row no-gutters">

    <div class="col-md-6" style="background: <?php echo $post_colour ?>">
      <div class="back">
        <a href="/products/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to Products">Back To Products</a>
      </div>
    </div>
    <div class="col-md-6">

      <?php $nextPost = get_next_post(); if($nextPost) { ?>
        <div class="next">
          <?php next_post_link('%link', 'View Next Product'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } else {  ?>
        <div class="next">
          <?php previous_post_link('%link', 'View Next Product'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } ?>

    </div>

  </div>

  <div class="row no-gutters">
    <div class="col-md-6 matchheight wow fadeInLeft">
      <div class="products__single__title__wrapper">

        <h2>
          <?php if($product_logo) : ?>
            <img src="<?php echo $product_logo ?>" alt="<?php the_title(); ?>">
          <?php endif; ?>

        </h2>
        <?php echo $product_intro ?>

        <h3>
          <span>#01</span>
          <?php echo the_title(); ?></h3>
      </div>
    </div>
    <div class="col-md-6 thumbimg matchheight wow fadeInRight" style="background: url(<?php echo the_post_thumbnail_url(); ?>) center center no-repeat; background-size: cover;">

      <?php if( have_rows('gallery') ): ?>

        <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

        </a>


        <span>Click On the Image To View More Images. <img class="more" src="<?php echo get_template_directory_uri() ?>/images/view.svg" alt="View <?php the_title() ?>"></span>
      <?php else : ?>
        <!-- <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" /> -->
      <?php endif; ?>

    </div>

  </div>


  <div class="row products__single__content__wrapper">
    <div class="col-md-6">
      <?php echo $content_col1; ?>
    </div>
    <div class="col-md-6">
      <?php echo $content_col2; ?>
    </div>
  </div>

  <div class="row no-gutters">

    <div class="col-md-6" style="background: <?php echo $post_colour ?>">
      <div class="back">
        <a href="/products/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to Products">Back To Products</a>
      </div>
    </div>
    <div class="col-md-6">

      <?php $nextPost = get_next_post(); if($nextPost) { ?>
        <div class="next">
          <?php next_post_link('%link', 'View Next Product'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } else {  ?>
        <div class="next">
          <?php previous_post_link('%link', 'View Next Product'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } ?>

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
