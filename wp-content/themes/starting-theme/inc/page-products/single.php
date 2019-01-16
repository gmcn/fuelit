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

foreach ($taxterms as $taxterm) {
  // echo $taxterm->slug;
}

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

  <?php include(locate_template("inc/page-elements/call-back.php")); ?>

  <div class="row no-gutters dynamic clear">

    <div class="col-xs-6 news_posts">
      <?php

      $args = array(
        'post_type' => 'case_studies',
        'tax_query' => array(
             array(
                 'taxonomy' => 'case_studies_tag',
                 'field' => 'name',
                 'terms' => $term_list,
             ),
         ),
        'posts_per_page' => '2',
        'orderby' => 'date',
        'order' => 'ASC',
      );
      $query = new WP_Query( $args ); ?>

      <?php if ( $query->have_posts() ) : ?>
        <div class="col-md-12">
          <p>Related Case Studies</p>
        </div>
       <!-- the loop -->
       <?php while ( $query->have_posts() ) : $query->the_post();

       $title = get_the_title();

       ?>
         <div class="col-md-6 post" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
           <div class="post__wrapper">
             <h4><?php echo wp_trim_words($title, 8); ?></h4>
             <a href="<?php echo the_permalink(); ?>">View Case Study</a>
           </div>
         </div>
       <?php endwhile; ?>
       <!-- end of the loop -->

       <!-- pagination here -->

       <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <?php endif; ?>
    </div>

    <div class="col-xs-6 casestudy_posts">
      <?php

      $args = array(
       'post_type' => 'post',
       'tag' => $taxterm->slug,
       'posts_per_page' => '2',
       'orderby' => 'date',
       'order' => 'DESC',
      );
      $query = new WP_Query( $args ); ?>

      <?php if ( $query->have_posts() ) : ?>
        <div class="col-md-12">
          <p>Related News Articles</p>
        </div>
       <!-- the loop -->
       <?php while ( $query->have_posts() ) : $query->the_post();

       $title = get_the_title();

       ?>
         <div class="col-md-6 post" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
           <div class="post__wrapper">
             <div class="date">
               <?php echo the_date() ?>
             </div>
             <h4><?php echo wp_trim_words($title, 8); ?></h4>
             <a href="<?php echo the_permalink(); ?>">View Article</a>
           </div>

         </div>
       <?php endwhile; ?>
       <!-- end of the loop -->

       <!-- pagination here -->

       <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <?php endif; ?>
    </div>

  </div>

</div>
