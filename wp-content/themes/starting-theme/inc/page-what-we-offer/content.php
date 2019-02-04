<?php

  $offerIntro = get_field('what_we_offer_cat__intro');

 ?>



<div class="container-fluid offer">
  <div class="row">
    <div class="col-md-6 offer__intro wow fadeInLeft">
      <?php echo $offerIntro ?>
    </div><!-- /.col-md-6 -->
    <div class="col-md-6 offer__links hidden-xs hidden-sm wow fadeInRight">
      <?php

      $post_objects = get_field('what_we_offer_cat_products');

        if( $post_objects ): ?>
            <?php $i = 1; foreach( $post_objects as $post_object): ?>
                    <a href="<?php echo get_permalink($post_object->ID); ?>">// <?php echo get_the_title($post_object->ID); ?></a><br />
            <?php $i++; endforeach; ?>
        <?php endif; ?>
    </div>
  </div>

    <?php

    $post_objects = get_field('what_we_offer_cat_products');

      if( $post_objects ): ?>

          <?php $i = 1; foreach( $post_objects as $post_object): ?>
            <div class="row offers wow fadeInUp">
              <div class="col-md-6 offers__title">
                <span>#<?php if ($i < 9): ?>0<?php endif; ?><?php echo $i; ?></span>
                  <h2><a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a></h2>
              </div>
              <div class="col-md-12 offers__content">
                <?php the_field('product_intro', $post_object->ID); ?>
                <?php the_field('product_intro_offer', $post_object->ID); ?>
              </div>
            </div>
          <?php $i++; endforeach; ?>

      <?php endif; ?>


</div>
