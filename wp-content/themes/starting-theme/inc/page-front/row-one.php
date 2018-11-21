<?php

  $top_row_left_background_img = get_field('top_row_left_background_img');
  $top_row_left_title = get_field('top_row_left_title');
  $top_row_left_desc = get_field('top_row_left_desc');
  $top_row_left_link = get_field('top_row_left_link');

 ?>


<div class="container-fluid front-wrapper">

  <div class="row row-one no-gutters">
    <div class="col-md-7 matchheight">
      <div class="row">
        <div class="col-md-12 products wow fadeInDown" style="background: url(<?php echo $top_row_left_background_img ?>) top; background-size: cover; height: 50%;">
          <a href="<?php echo $top_row_left_link ?>">
            <img class="dots" src="<?php echo get_template_directory_uri() ?>/images/contact_dots.png" alt="Contact FuelIT"><br />
            <?php echo $top_row_left_title ?></a>
          <p><?php echo $top_row_left_desc ?></p>
        </div>


        <!-- 3xcolumns -->

        <?php if( have_rows('bottom_row') ): while( have_rows('bottom_row') ): the_row();

        		// vars
        		$column_background_colour = get_sub_field('column_background_colour');
        		$column_background_img = get_sub_field('column_background_img');
        		$column_title = get_sub_field('column_title');
            $column_desc = get_sub_field('column_desc');
            $column_link = get_sub_field('column_link');
            $column_title_colour = get_sub_field('column_title_colour');

        		?>

        		<div class="col-md-4 products wow fadeInLeft" style="background: url(<?php echo $column_background_img ?>) <?php echo $column_background_colour ?>; height: 50%;">

              <a href="<?php echo $column_link ?>" style="color: <?php echo $column_title_colour ?>">
                <img class="dots" src="<?php echo get_template_directory_uri() ?>/images/contact_dots.png" alt="Contact FuelIT"><br />
                <?php echo $column_title ?></a>

              <p style="color: <?php echo $column_title_colour ?>"><?php echo $column_desc ?></p>

        		</div>

        	<?php endwhile; ?>

        <?php endif; ?>


      </div><!-- /.row -->
    </div>
    <div class="col-md-5 wow fadeInRight ambassador matchheight">


      <!-- <ul class="slider">
        <li>one</li>
        <li>two</li>
      </ul> -->

      <?php if( have_rows('right_slider') ): ?>

        <ul class="slider_ambassador" style="height: 100%; width: 100%;">

        <?php while( have_rows('right_slider') ): the_row();

          // vars
          $slide_title = get_sub_field('slide_title');
          $slide_image = get_sub_field('slide_image');

          ?>

        <li class="col-md-12" style="background: url(<?php echo $slide_image ?>) center center; height: 100%; background-size: cover;">

          <div class="overlay">
            <?php echo $slide_title ?>
            <p>BRAND <br />AMBASSADOR</p>
          </div>

        </li>

        <?php endwhile; ?>

        </ul>

      <?php endif; ?>
    </div>
  </div>
