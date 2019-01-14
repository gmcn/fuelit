  <div class="row">

      	<?php while ( have_posts() ) : the_post();  ?>

          <div class="col-md-6 casestudies__post wow fadeInUp" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
            <div class="casestudies__post__wrapper">
              <h2><?php the_title(); ?></h2>
              <a href="<?php the_permalink(); ?>">View Project</a>
            </div>

          </div>

        <?php endwhile; ?>



    </div>

    <div class="pagi clear">
      <?php the_posts_navigation(); ?>
    </div>



</div><!-- /.container-fluid.casestudies -->
