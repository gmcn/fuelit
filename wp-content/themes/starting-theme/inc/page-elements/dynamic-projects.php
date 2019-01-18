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
     <?php endwhile; wp_reset_postdata(); ?>

    <?php else : ?>
      Nothing to see
    <?php endif; ?>
  </div>

  <div class="col-xs-6 casestudy_posts">
    <?php

    $args = array(
     'post_type' => 'post',
     'tag' => $page_tag->slug,
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
     <?php endwhile; wp_reset_postdata(); ?>

    <?php else : ?>
      Nothing to see
    <?php endif; ?>
  </div>

</div>
