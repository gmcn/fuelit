<?php

$menu_order = get_post_field( 'menu_order', $post->ID);
$job_role = get_field('job_role');
$profile_email = get_field('profile_email');
$profile_facebook = get_field('profile_facebook');
$profile_twitter = get_field('profile_twitter');
$profile_linkedin = get_field('profile_linkedin');

 ?>
 <div class="person__backto">
   <a href="/people/">
     <img src="<?php echo get_template_directory_uri(); ?>/images/back_btn.svg" alt="Back to Our People"> Back to Our People
   </a>
 </div>
<div class="container-fluid person">
  <div class="row">

    <div class="col-sm-5 col-md-offset-1 person__photo matchheight wow fadeInLeft">
      <?php echo the_post_thumbnail(); ?>
    </div>
    <div class="col-sm-5 person__profile matchheight wow fadeInRight">
      <div class="vert-align">
        <span class="person__count">#<?php if ($menu_order < 10): ?>0<?php endif; ?><?php echo $menu_order ?></span>
        <h2><?php the_title(); ?></h2>
        <h3><?php echo $job_role; ?></h3>
        <?php the_content(); ?>
      </div>

      <div class="row person__contact">
        <div class="col-sm-6 col-md-6 col-lg-4 profile__social matchheight">
          <p>Follow/Friend me on social media:</p>

          <?php if ($profile_facebook): ?>
            <a href="<?php echo $profile_facebook; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/profile_facebook.svg" alt="Follow <?php the_title(); ?> on Facebook">
            </a>
          <?php endif; ?>

          <?php if ($profile_twitter): ?>
            <a href="<?php echo $profile_twitter; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/profile_twitter.svg" alt="Follow <?php the_title(); ?> on Twitter">
            </a>
          <?php endif; ?>

          <?php if ($profile_linkedin): ?>
            <a href="<?php echo $profile_linkedin; ?>" target="_blank">
              <img src="<?php echo get_template_directory_uri(); ?>/images/profile_linkedin.svg" alt="Follow <?php the_title(); ?> on Linkedin">
            </a>
          <?php endif; ?>

        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 profile__email matchheight">
          <p>Email us now:</p>
          <a href="mailto:<?php echo $profile_email; ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/profile_email.svg" alt="Email <?php the_title(); ?>"></a>
        </div>
      </div>

    </div>
  </div>
</div>
