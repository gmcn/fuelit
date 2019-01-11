<?php

$company_intro = get_field('company_intro');
$company_main = get_field('company_main');
$company_url = get_field('company_url');

$details_challange = get_field('details_challange');
$details_benefits = get_field('details_benefits');
$details_solution = get_field('details_solution');

$details_quote = get_field('quote');
$details_quote_by = get_field('quote_by');

 ?>


<div class="container-fluid casestudies__single">

  <div class="row no-gutters">

    <div class="col-md-6" style="background: #7D8D95">
      <div class="back">
        <a href="/case_studies/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to Case Studies">Back To Case Studies</a>
      </div>
    </div>
    <div class="col-md-6">

      <?php $nextPost = get_next_post(); if($nextPost) { ?>
        <div class="next">
          <?php next_post_link('%link', 'View Next Case Study'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } else {  ?>
        <div class="next">
          <?php previous_post_link('%link', 'View Next Case Study'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } ?>

    </div>

  </div>

    <div class="row no-gutters">

    <div class="casestudies__single__title__wrapper" style="background: url(<?php the_post_thumbnail_url(); ?>) center center; background-size: cover;">
      <div class="row">
        <div class="col-md-4 wow fadeInLeft">
          <h2><?php the_title(); ?></h2>
        </div>
        <div class="col-md-8 thumbimg wow fadeInRight">
          <?php if( have_rows('gallery') ): ?>

            <a class="fancybox" rel="group" href="<?php the_post_thumbnail_url(); ?>" title="<?php the_title(); ?>">

                <span>Click The Eye To View More Images. <img class="more" src="<?php echo get_template_directory_uri() ?>/images/view.svg" alt="View <?php the_title() ?>"></span>

            </a>

          <?php endif; ?>
        </div>
      </div>

    </div>

    <div class="row no-gutters casestudies__single__content">
      <div class="col-md-6 intro wow fadeInLeft">
          <?php echo $company_intro ?>
      </div><!-- /.col-md-6 -->
      <div class="col-md-6 main wow fadeInRight">
        <?php echo $company_main ?>
        <?php if ($company_url) : ?>
          <a href="<?php echo $company_url ?>" target="_blank"><?php echo $company_url ?></a>
        <?php endif; ?>
      </div><!-- /.col-md-6 -->
    </div><!-- /.row casestudies__single__content -->
  </div>

  <?php if ($details_challange): ?>
    <div class="row no-gutters casestudies__single__sub__content wow fadeInUp">
      <h3><span>#01</span>THE CHALLENGE</h3>
      <?php echo $details_challange ?>
    </div><!-- /.row -->
  <?php endif; ?>

  <?php if ($details_benefits): ?>
    <div class="row no-gutters casestudies__single__sub__content wow fadeInUp">
      <h3><span>#02</span>KEY BUSINESS BENEFITS</h3>
      <?php echo $details_benefits ?>
    </div><!-- /.row -->
  <?php endif; ?>

  <?php if ($details_solution): ?>
    <div class="row no-gutters casestudies__single__sub__content wow fadeInUp">
      <h3><span>#03</span>SOLUTION</h3>
      <?php echo $details_solution ?>
    </div><!-- /.row -->
  <?php endif; ?>

  <div class="row no-gutters">

    <div class="col-md-6" style="background: #7D8D95">
      <div class="back">
        <a href="/case_studies/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back to Case Studies">Back To Case Studies</a>
      </div>
    </div>
    <div class="col-md-6">

      <?php $nextPost = get_next_post(); if($nextPost) { ?>
        <div class="next">
          <?php next_post_link('%link', 'View Next Case Study'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } else {  ?>
        <div class="next">
          <?php previous_post_link('%link', 'View Next Case Study'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
        </div>
      <?php } ?>

    </div>

  </div>

  <?php if($details_quote) : ?>

    <div class="row no-gutters quote">
      <div class="quote__wrapper">
        <?php echo $details_quote ?>
      </div>
      <p class="quote__by"><?php echo $details_quote_by ?></p>
    </div>

  <?php endif; ?>


</div>


<?php if( have_rows('gallery') ): ?>
  <!-- Hidden Gallery -->
  <div class="hidden">
    <?php while( have_rows('gallery') ): the_row();

      // vars
      $image = get_sub_field('image');
      $image_title = get_sub_field('image_title');

      ?>

        <a class="fancybox" rel="group" href="<?php echo $image ?>" title="<?php if($image_title) : ?>
          <?php echo $image_title ?>
        <?php else : ?>
          <?php the_title(); ?>
        <?php endif; ?>">

            <img src="<?php echo $image ?>" alt="<?php if($image_title) : ?>
              <?php echo $image_title ?>
            <?php else : ?>
              <?php the_title(); ?>
            <?php endif; ?>" />

        </a>


    <?php endwhile; wp_reset_postdata(); ?>
  </div>
<?php endif; ?>
