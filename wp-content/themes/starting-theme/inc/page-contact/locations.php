
    <?php if( have_rows('office_locations') ): ?>

    	<div class="row locations">

    	<?php while( have_rows('office_locations') ): the_row();

    		// vars
    		$office_name = get_sub_field('office_name');
    		$office_address = get_sub_field('office_address');
    		$office_phone = get_sub_field('office_phone');
        $office_fax = get_sub_field('office_fax');
        $office_map = get_sub_field('office_map');
        $map_title_bg = get_sub_field('map_title_bg');
        $office_city = get_sub_field('office_city');

    		?>

        <div class="col-md-12 locations__name wow fadeInDown">
          <h2><?php echo $office_name ?> Address:</h2>
        </div><!-- /.col-md-4 -->

    		<div class="col-md-4 locations__details wow fadeInLeft">

            <?php echo $office_address; ?>
            <p class="number">
              T: <?php echo $office_phone; ?>
            </p>
            <p class="number">
              F: <?php echo $office_fax; ?>
            </p>

    		</div><!-- /.col-md-4 -->

        <div class="col-md-8 locations__map wow fadeInRight">

          <div class="locations__map__name" style="background: <?php echo $map_title_bg ?>">
            <?php echo $office_name ?> - <?php echo $office_city ?>
          </div>

          <?php echo $office_map ?>

        </div><!-- /.col-md-8 -->

    	<?php endwhile; ?>

    	</div><!-- /.row -->

    <?php endif; ?>



</div><!-- /.container-fluid contact__wrapper -->
