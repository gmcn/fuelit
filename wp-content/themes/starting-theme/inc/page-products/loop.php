<div class="row">

      <?php while ( have_posts() ) : the_post();
      $taxonomyterms = wp_get_post_terms( $post->ID, 'products_area');
      $terms = get_the_terms( get_the_ID(), 'products_area');
      $term = array_pop($terms);
      $category_colour = get_field('post_colour', $term );
      $product_logo = get_field('product_logo');
       ?>

        <div class="col-lg-3 col-md-4 col-sm-6 products__post wow fadeInUp matchheight" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
          <div class="products__post__wrapper">
            <div class="terms">
              <?php
                foreach( $taxonomyterms as $term ) {
                  echo $term->name;
                }
               ?>
               <div class="term-circle" style="border: 4px solid <?php echo $category_colour; ?>;">

               </div>
            </div>
            <h2>

              <?php if($product_logo) : ?>

                <img src="<?php echo $product_logo ?>" alt="<?php the_title(); ?>">

              <?php endif; ?>

              <?php the_title(); ?>

            </h2>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>">View Product Information</a>
          </div>

        </div>

      <?php endwhile; ?>



  </div>

  <div class="pagi clear">
    <?php the_posts_navigation(); ?>
  </div>



</div><!-- /.container-fluid.casestudies -->
