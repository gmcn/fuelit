<div class="container-fluid title">
  <div class="row">
    <div class="col-md-6">

      <?php if (is_single() && 'post' == get_post_type()) : ?>

        <h1>News & Events</h1>

      <?php elseif ( $post->post_parent == 142 || $post->post_parent == 398 ) : ?>
        <h1><?php echo get_the_title( wp_get_post_parent_id( get_the_ID() ) ); ?> </h1>
      <?php elseif ( have_posts() ) : ?>
        <h1><?php single_post_title(); ?></h1>
      <?php else : ?>
        <h1><?php the_title(); ?></h1>
      <?php endif; ?>

    </div><!-- /.col-md-6 -->
    <div class="col-md-6 breadcrumb">
      <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
        }
      ?>
    </div><!-- /.col-md-6 -->
    <hr />
  </div><!-- /.row -->
  <div class="row">
    <div class="col-md-6 title__content">



      <?php if ( $post->post_parent == 142 || $post->post_parent == 398) : ?>
        <?php echo the_field('sub_heading_text', $post->post_parent); ?>
      <?php else : ?>
        <?php //the_content(); ?>
        <?php echo the_field('sub_heading_text'); ?>
      <?php endif; ?>



    </div><!-- /.col-md-8 -->
  </div><!-- /.row -->
</div><!-- /.container-fluid  -->
