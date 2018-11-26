<div class="container-fluid title">
  <div class="row">
    <div class="col-md-6">
      <h1><?php the_title(); ?></h1>
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
      <?php the_content(); ?>
    </div><!-- /.col-md-8 -->
  </div><!-- /.row -->
</div><!-- /.container-fluid  -->
