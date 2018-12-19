<?php

$looking_forward_heading = get_field('looking_forward_heading');
$looking_forward_content = get_field('looking_forward_content');

?>

<?php if($looking_forward_heading) : ?>

<div class="container-fluid history">
  <div class="row">
    <div class="col-md-6 looking_back matchheight">

      <h2><span>Looking Back:</span> with fondness</h2>

      <?php if( have_rows('looking_back') ): ?>

        <div class="looking_back__timeline">

      	<?php while( have_rows('looking_back') ): the_row();

      		// vars
      		$year = get_sub_field('year');
      		$year_content = get_sub_field('year_content');
      		$year_img = get_sub_field('year_img');

      		?>



            <div class="wrapper wow fadeInDownBig">
              <div class="dot">

              </div>
        			<h4> <?php echo $year; ?></h4>
              <img src="<?php echo $year_img; ?>" alt="<?php echo $year; ?>">
              <?php echo $year_content; ?>
            </div>

            <div class="clear">

            </div>


      	<?php endwhile; ?>

        </div>

        <h5>THE EXCITING <br />FUTURE…</h5>

      <?php endif; ?>


    </div>

    <div class="col-md-6 looking_forward matchheight">
      <h2><span>Looking Forward:</span> with excitement</h2>
      <h3><?php echo $looking_forward_heading; ?></h3>
      <?php echo $looking_forward_content; ?>
    </div>
  </div>
</div>

<?php endif; ?>
