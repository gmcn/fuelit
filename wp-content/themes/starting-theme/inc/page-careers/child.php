<div class="container-fluid careers">

  <?php
  $args = array(
  'post_parent' => $post->ID,
  'post_type' => 'page',
  'orderby' => 'menu_order',
  'order' => 'ASC'
  );

  $child_query = new WP_Query( $args );

  ?>

  <?php if($child_query->have_posts()) : ?>

      <?php $i = 1; while ( $child_query->have_posts() ) : $child_query->the_post();

      $job_title_extra = get_field('job_title_extra');
      $job_ref = get_field('job_ref');
      $job_location = get_field('job_location');
      $job_type = get_field('job_type');
      $closing_date = get_field('closing_date');
      $start_date = get_field('start_date');
      $salary = get_field('salary');
      $contract_duration = get_field('contract_duration');
      $job_synopsis = get_field('job_synopsis');

      ?>

      <div class="row career">

        <div class="col-md-2 careermatch wow fadeInLeft">
          <span class="career__count">#0<?php echo get_post_field( 'menu_order', $post_id); ?></span>

          <?php if ($closing_date): ?>
            <p class="career__closing">
                <span>Closing Date:</span>
              <?php echo $closing_date  ?>
            </p>
          <?php endif; ?>

        </div>

        <div class="col-md-6 career__title careermatch  wow fadeIn">
          <div class="label">
            ROLE:
          </div>
          <h2><?php the_title(); ?></h2>
          <p><?php echo $job_title_extra ?></p>

          <div class="row career__details">
            <div class="col-md-4">
              <div class="label">
                REFERENCE:
              </div>
              <?php echo $job_ref ?>
            </div>
            <div class="col-md-4">
              <div class="label">
                LOCATION:
              </div>
              <?php echo $job_location ?>
            </div>
            <div class="col-md-4">
              <div class="label">
                TYPE:
              </div>
              <?php echo $job_type ?>
            </div>
          </div>

        </div>

        <div class="col-md-4 careermatch wow fadeInRight">
          <div class="label">
            SYNOPSIS:
          </div>
          <p><?php echo $job_synopsis ?></p>

          <div class="buttons">
            <a href="<?php the_permalink(); ?>">View Details</a>
            <a href="#" onclick="openApp<?php echo $i ?>()">Apply Now</a>
          </div>

        </div>

        <script type="text/javascript">
        /* Open when someone clicks on the span element */
        function openApp<?php echo $i ?>() {
            document.getElementById("myApp<?php echo $i ?>").style.height = "100%";
        }

        /* Close when someone clicks on the "x" symbol inside the overlay */
        function closeApp<?php echo $i ?>() {
            document.getElementById("myApp<?php echo $i ?>").style.height = "0%";
        }
        </script>


        <!-- The overlay -->
    			<div id="myApp<?php echo $i ?>" class="overlay">

    			  <!-- Button to close the overlay navigation -->
    			  <a href="javascript:void(0)" class="closebtn" onclick="closeApp<?php echo $i ?>()">&times;</a>

    			  <!-- Overlay content -->
    			  <div class="container overlay-content">

    					<div class="row">

                <?php echo do_shortcode('[contact-form-7 id="165" title="Job Application"]') ?>


    					</div>

    				</div>
    			</div>



      </div>




      <?php $i++; endwhile; wp_reset_postdata(); ?>

  <?php else : ?>

    <div class="row">

      <div class="col-md-12">
        FUEL are not currently recruiting. However, please continue to review this page periodically for any update.
      </div>

    </div>

  <?php endif ?>

</div>
