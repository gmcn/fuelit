<?php
$terms = get_the_terms( get_the_ID(), 'products_area');
$term = array_pop($terms);
$post_colour = get_field('post_colour', $term );
$product_logo = get_field('product_logo');
$product_intro = get_field('product_intro');
$product_video = get_field('product_video');

$content_col1 = get_field('column_1');
$content_col2 = get_field('column_2');

$taxterms = get_the_terms( $post->ID, array(
'taxonomy' => 'products_tag',
) );

// foreach ($taxterms as $taxterm) {
//   echo $taxterm->slug;
// }

$term_list = wp_get_post_terms($post->ID, 'products_tag', array("fields" => "names"));

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

          <?php $menu_order = get_post_field( 'menu_order', $post->ID); ?>

          <span>#<?php if ($menu_order < 10) {echo '0';} echo $menu_order ?></span>
          <?php echo the_title(); ?></h3>
      </div>
    </div>
    <div class="col-md-6 thumbimg matchheight wow fadeInRight" style="background: url(<?php echo the_post_thumbnail_url(); ?>) center center no-repeat; background-size: cover;">

      <?php if ($product_video) : ?>

        <a class="various fancybox vert-align" data-fancybox-type="iframe" href="https://www.youtube.com/embed/<?php echo $product_video ?>?autoplay=1&rel=0">
          <img class="play" src="<?php echo get_template_directory_uri() ?>/images/play_btn.svg">
        </a>

        <span>Click The Arrow To View Demo Video.</span>

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

  <?php
  include(locate_template("inc/page-elements/call-back.php"));
  include(locate_template("inc/page-elements/dynamic-projects.php"));
  ?>

  <div class="back">

      <svg xmlns="http://www.w3.org/2000/svg" width="15.084" height="18.322" viewBox="0 0 15.084 18.322">
      <path id="Path_21506" data-name="Path 21506" d="M2239.043,11588.454l-9.084,6.161,9.084,6.161Z" transform="translate(-2226.959 -11585.454)" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="6"/>
    </svg>
    <a href="/products/">Back To What We Offer</a>

  </div>

</div>
