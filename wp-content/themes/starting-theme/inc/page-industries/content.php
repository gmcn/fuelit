<?php

  $industrial_intro = get_field('industrial_intro');
  $industrial_main_copy = get_field('industrial_main_copy');
  $requirements = get_field('industry_popular_requirements');

 ?>

 <div class="container-fluid industrial__single">

   <div class="row no-gutters">

     <div class="col-md-6">
       <div class="back">
         <a href="/industries-we-work-in/"><img src="<?php echo get_template_directory_uri() ?>/images/back_btn.svg" alt="Back To Industries We Work In">Back To Industries We Work In</a>
       </div>
     </div>
     <div class="col-md-6">

       <?php $nextPost = get_next_post(); if($nextPost) { ?>
         <div class="next">
           <?php next_post_link('%link', 'View Next Industry'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
         </div>
       <?php } else {  ?>
         <div class="next">
           <?php previous_post_link('%link', 'View Next Industry'); ?><img src="<?php echo get_template_directory_uri() ?>/images/next_btn.svg" alt="%title">
         </div>
       <?php } ?>

     </div>

   </div>

 </div>



<div class="container-fluid industrial__content">
  <div class="row">
    <div class="col-md-6 industrial__content__intro  wow fadeInLeft">
      <?php echo $industrial_intro ?>
    </div><!-- /.col-md-6 -->
  </div>

  <div class="row industrial__content__title wow fadeInDown">

    <div class="col-md-6">
      <h2><?php the_title(); ?></h2>
    </div>
    <div class="col-md-6 hidden-xs hidden-sm industrial__content__title__requirementhead">
      Popular Requirements
    </div>

  </div>

  <div class="row industrial__content__main">
    <div class="col-md-6 wow fadeInLeft">
      <?php echo $industrial_main_copy ?>
    </div><!-- /.col-md-6 -->
    <div class="col-md-6 industrial__content__main__requirements wow fadeInRight">

      <?php if( $requirements ) : ?>
        <ul>
        	<?php foreach( $requirements as $requirement ): ?>
        		<li class="color-<?php echo $requirement['value']; ?>">
              <a href="/products_area/<?php echo $requirement['value']; ?>">
                <?php echo $requirement['label']; ?>
              </a>
            </li>
        	<?php endforeach; ?>
        </ul>
      <?php endif; ?>


    </div><!-- /.col-md-6 -->
  </div>
</div>
