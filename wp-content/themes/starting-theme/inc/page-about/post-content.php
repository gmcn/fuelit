<?php


$content_footer_bg = get_field('content_footer_bg');
$content_footer_image = get_field('content_footer_image');
$content_footer_gradient_colour_1 = get_field('content_footer_gradient_colour_1');
$content_footer_gradient_colour_2 = get_field('content_footer_gradient_colour_2');
$content_footer_copy = get_field('content_footer_copy');

 ?>


<?php if($content_footer_bg) : ?>

<div class="container-fluid post__content" style="

<?php if($content_footer_bg == 'Image') : ?>

  background: url(<?php echo $content_footer_image ?>); background-size:cover;

<?php elseif($content_footer_bg == 'Gradient') : ?>
  background: <?php echo $content_footer_gradient_colour_1; ?>;
  background: -moz-linear-gradient(-45deg, <?php echo $content_footer_gradient_colour_1; ?> 0%, <?php echo $content_footer_gradient_colour_2; ?> 100%);
  background: -webkit-gradient(left top, right top, color-stop(0%, <?php echo $content_footer_gradient_colour_1 ?>), color-stop(100%, <?php echo $content_footer_gradient_colour_2 ?>));
  background: -webkit-linear-gradient(-45deg, <?php echo $content_footer_gradient_colour_1; ?> 0%, <?php echo $content_footer_gradient_colour_2; ?> 100%);
  background: -o-linear-gradient(-45deg, <?php echo $content_footer_gradient_colour_1; ?> 0%, <?php echo $content_footer_gradient_colour_2; ?> 100%);
  background: -ms-linear-gradient(-45deg, <?php echo $content_footer_gradient_colour_1; ?> 0%, <?php echo $content_footer_gradient_colour_2; ?> 100%);
  background: linear-gradient(135deg, <?php echo $content_footer_gradient_colour_1; ?> 0%, <?php echo $content_footer_gradient_colour_2; ?> 100%);
<?php endif; ?>

">

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php echo $content_footer_copy; ?>
    </div>
  </div>
  <div class="row social">
    <div class="col-md-6">
      Follow/Friend us on social media:
      <a href="https://www.linkedin.com/company/micro-computer-solutions-mcs-/?trk=top_nav_home" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="Follow Fuel IT on Linkedin">
      </a>
      <a href="https://twitter.com/itfuel" target="_blank">
        <img src="<?php echo get_template_directory_uri(); ?>/images/twitter.svg" alt="Follow Fuel IT on Linkedin">
      </a>
    </div>
    <div class="col-md-6">
      Email us now:
      <a href="mailto:info@itfuel.com">
        <img src="<?php echo get_template_directory_uri(); ?>/images/paper-airplane-outline.svg" alt="Email us now">
      </a>
    </div>
  </div>
</div>




</div>

<?php endif; ?>
