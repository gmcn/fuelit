<?php

$pageColour = get_field('page_colour');
$contentBackground = get_field('content_background');

 ?>



  <?php if( have_rows('content_rows') ): ?>

    <div class="container-fluid about" style="background: url(<?php echo $contentBackground ?>) no-repeat bottom center; border-top: 50px solid <?php echo $pageColour; ?>">

      <div class="container">
    	<?php $i = 1; while( have_rows('content_rows') ): the_row();

    		// vars
    		$contentRowHeading = get_sub_field('content_row_heading');
    		$contentRowCopy = get_sub_field('content_row_copy');
    		$contentRowImg = get_sub_field('content_row_img');

    		?>

        <div class="row">

          <?php if($i % 2) : ?>
            <div class="col-sm-6 img__holder wow fadeInLeft matchheight" style="border-right: 2px dotted #AEAFAF">
              <img src="<?php echo $contentRowImg ?>" alt="<?php echo $contentRowHeading ?>">
            </div>
            <div class="col-sm-6 wow fadeInRight matchheight">
              <span style="color: <?php echo $pageColour; ?>">#0<?php echo $i; ?></span>
              <h2 style="color: <?php echo $pageColour; ?>"><?php echo $contentRowHeading ?></h2>
              <?php echo $contentRowCopy ?>
            </div>
          <?php else : ?>
            <div class="col-sm-6 right wow fadeInRight matchheight">
              <span style="color: <?php echo $pageColour; ?>">#0<?php echo $i; ?></span>
              <h2 style="color: <?php echo $pageColour; ?>"><?php echo $contentRowHeading ?></h2>
              <?php echo $contentRowCopy ?>
            </div>
            <div class="col-sm-6 img__holder wow fadeInLeft matchheight" style="border-left: 2px dotted #AEAFAF">
              <img src="<?php echo $contentRowImg ?>" alt="<?php echo $contentRowHeading ?>">
            </div>
          <?php endif; ?>

        </div>

    	<?php $i++; endwhile; ?>
    </div>
  </div>
  <?php endif; ?>
