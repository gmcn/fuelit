<?php

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

<div class="container-fluid career-single">
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

        <div class="col-md-12 content">
          <?php the_content() ?>
        </div>
      </div>

    </div>

    <div class="col-md-4 career__right careermatch  wow fadeInRight">
      <div class="label">
        SYNOPSIS:
      </div>
      <p><?php echo $job_synopsis ?></p>

      <div class="label">
        Start Date:
      </div>
      <p><?php echo $start_date ?></p>
      <div class="label">
        Salary:
      </div>
      <p><?php echo $salary ?></p>
      <div class="label">
        Contract Duration:
      </div>
      <p><?php echo $contract_duration ?></p>

      <div class="buttons">
        <a href="#" onclick="openApp<?php echo $i ?>()">Apply Now</a>
      </div>

    </div>
    <!-- Modal -->
    <div id="application<?php echo $i ?>" class="modal  fade" role="dialog">
      <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
            <div class="row">
              <?php echo do_shortcode('[contact-form-7 id="165" title="Job Application"]') ?>
            </div>

          </div>
        </div>

      </div>
    </div>



    <script type="text/javascript">
    /* Open when someone clicks on the span element */
    function openApp() {
        document.getElementById("myApp").style.height = "100%";
    }

    /* Close when someone clicks on the "x" symbol inside the overlay */
    function closeApp() {
        document.getElementById("myApp").style.height = "0%";
    }
    </script>


    <!-- The overlay -->
      <div id="myApp" class="overlay">

        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeApp()">&times;</a>

        <!-- Overlay content -->
        <div class="container overlay-content">

          <div class="row">

            <?php echo do_shortcode('[contact-form-7 id="165" title="Job Application"]') ?>


          </div>

        </div>
      </div>



  </div>

</div>
