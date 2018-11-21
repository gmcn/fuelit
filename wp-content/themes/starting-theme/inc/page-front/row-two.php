  <div class="row row-two no-gutters">
    <div class="col-md-5 contact matchheight wow fadeInLeft">
      <a href="/contact/">
        <img class="dots" src="<?php echo get_template_directory_uri() ?>/images/contact_dots.png" alt="Contact FuelIT"><br />
        Contact Us</a>
      <p>Get in touch to see how we can help you today.</p>
    </div>
    <div class="col-md-7 casestudies matchheight wow fadeInRight">
        <?php

          /*
          *  Loop through post objects (assuming this is a multi-select field) ( setup postdata )
          *  Using this method, you can use all the normal WP functions as the $post object is temporarily initialized within the loop
          *  Read more: http://codex.wordpress.org/Template_Tags/get_posts#Reset_after_Postlists_with_offset
          */

          $post_objects = get_field('case_studies_slider');

          if( $post_objects ): ?>
              <ul class="slider_casestudies">
              <?php foreach( $post_objects as $post): // variable must be called $post (IMPORTANT) ?>
                  <?php setup_postdata($post); ?>

                  <li style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover;">


                    <div class="overlay">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                      <a class="studies" href="/case_studies">Case <br />Studies</a>
                    </div>


                  </li>

              <?php endforeach; ?>
              </ul>
              <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
          <?php endif; ?>

    </div>
  </div><!-- /.row -->
