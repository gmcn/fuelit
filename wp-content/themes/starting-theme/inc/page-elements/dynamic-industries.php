<?php


$page_tags = get_the_tags();

?>

<div class="row no-gutters dynamic clear">

  <div class="col-xs-12 industry casestudy_posts">

    <div class="col-md-12">
      <p>Related Case Studies - <a href="/case_studies/">View all</a></p>
    </div>

    <?php foreach( $page_tags as $page_tag ) : ?>
    <?php

    $args = array(
      'post_type' => 'case_studies',
      'tax_query' => array(
           array(
               'taxonomy' => 'case_studies_tag',
               'posts_per_page' => 4,
               'field' => 'slug',
               'terms' => $page_tag->slug,
           ),
       ),
    );
    $query = new WP_Query( $args ); ?>

    <?php if ( $query->have_posts() ) : ?>

     <!-- the loop -->
     <?php while ( $query->have_posts() ) : $query->the_post();

     $title = get_the_title();

     ?>
       <div class="col-md-3 post" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
         <div class="post__wrapper">
           <h4><?php echo wp_trim_words($title, 8); ?></h4>
           <a href="<?php echo the_permalink(); ?>">View Case Study</a>
         </div>
       </div>
     <?php endwhile; endif; wp_reset_postdata();  ?>


  <?php endforeach; ?>

  </div>

</div>
