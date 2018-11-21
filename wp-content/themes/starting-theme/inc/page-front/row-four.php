<div class="row row-four">


  <!-- 3xcolumns -->

  <?php if( have_rows('pre-partners') ): while( have_rows('pre-partners') ): the_row();

      // vars
      $column_background_colour = get_sub_field('column_background_colour');
      $column_background_img = get_sub_field('column_background_img');
      $column_title = get_sub_field('column_title');
      $column_desc = get_sub_field('column_desc');
      $column_link = get_sub_field('column_link');

      ?>

      <div class="col-md-3 pre-partners wow fadeInLeft" style="background: url(<?php echo $column_background_img ?>) <?php echo $column_background_colour ?> center center;">

        <a href="<?php echo $column_link ?>">
          <img class="dots" src="<?php echo get_template_directory_uri() ?>/images/contact_dots.png" alt="Contact FuelIT"><br />
          <?php echo $column_title ?></a>
        <p><?php echo $column_desc ?></p>

      </div>

    <?php endwhile; ?>

  <?php endif; ?>

  <div class="col-md-6 partners wow fadeInRight">

    <div class="row">
      <div class="col-md-2">
        <p>Partners</p>
      </div>
      <div class="col-md-10 partner">

        <?php if( have_rows('partners') ): while( have_rows('partners') ): the_row();

            // vars
            $partner_logo = get_sub_field('partner_logo');
            $partner_name = get_sub_field('partner_name');
            ?>

            <div class="col-md-2 partnerheight">

              <img src="<?php echo $partner_logo ?>" alt="<?php echo $partner_name ?>">

            </div>

          <?php endwhile; ?>

        <?php endif; ?>

      </div>
    </div>

  </div>

</div>


</div> <!-- /.container-fluid -->
