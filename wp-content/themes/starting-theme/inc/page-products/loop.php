<div class="row">

      <?php while ( have_posts() ) : the_post();
      $taxonomyterms = wp_get_post_terms( $post->ID, 'products_area');
      $terms = get_the_terms( get_the_ID(), 'products_area');
      $term = array_pop($terms);
      $category_colour = get_field('post_colour', $term );
      $product_logo = get_field('product_logo');
       ?>


        <div class="col-md-4 col-sm-6 products__post matchheight">
          <div class="products__post__wrapper">

            <div class="terms" style="background: <?php echo $category_colour; ?>">
              <p class="term_name">
              <?php
                foreach( $taxonomyterms as $term ) {
                  echo $term->name;
                }
               ?>
               </p>
            </div>
            <div class="products__post__wrapper_left">
              <h2>

                <?php if($product_logo) : ?>

                  <img src="<?php echo $product_logo ?>" alt="<?php the_title(); ?>">

                <?php endif; ?>

                <?php the_title(); ?>

              </h2>
              <?php the_excerpt(); ?>
              <a style="background: <?php echo $category_colour; ?>" href="<?php the_permalink(); ?>">View Product Information</a>
            </div>
          </div>

        </div>

      <?php endwhile; ?>



  </div>

  <div class="pagi clear">
    <div class="col-xs-6 pagi_next">
      <?php echo get_previous_posts_link( $label = __( '< Previous Products' ) ) ?>
    </div>
    <div class="col-xs-6 pagi_prev">
      <?php echo get_next_posts_link( $label = __( 'Next Products >' ) ) ?>
    </div>
    <?php //the_posts_navigation(); ?>
  </div>



</div><!-- /.container-fluid.casestudies -->
