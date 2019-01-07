<div class="container-fluid blog">

  <div class="filter clear">

    <div class="filter__wrapper">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter by year <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by year ">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <?php wp_get_archives('type=yearly&format=html'); ?>
        </div>
      </div>
    </div>

    <div class="filter__wrapper">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="https://example.com" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter by type <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by type">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <?php wp_list_categories(array( 'title_li' => '' )); ?>
        </div>
      </div>
    </div>

    <div class="filter__wrapper">
      <a href="/news-events">Show All</a>
    </div>

  </div>

  <div class="row">

    <div class="col-md-9">
      <?php
      /* Start the Loop */
      while ( have_posts() ) : the_post();

      $terms = get_the_terms( get_the_ID(), 'category');
      $term = array_pop($terms);
      $post_colour = get_field('post_colour', $term );
      $category = get_the_category();
      ?>



          <?php if ($category[0]->cat_name == 'Advert'): ?>

            <div class="col-sm-6 col-md-4 blog__post wow fadeInLeft" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
            <div class="wrapper clear" style="background: <?php echo $post_colour ?>; width: 50%; padding: 10px;">
              Advert
              </div>
              <div class="wrapper__ad__inner">
                <h2><?php echo the_title(); ?></h2>
              </div>
            </div>

          <?php elseif ($category[0]->cat_name == 'Events'): ?>

            <div class="col-sm-6 col-md-4 blog__post wow fadeInLeft" style="background: #3A194A;">
              <div class="wrapper clear" style="background: <?php echo $post_colour ?>; width: 50%; padding: 10px;">
                <a href="<?php the_permalink(); ?>">Event</a>
              </div>
              <div class="wrapper__event__inner">
                <div class="date">
                  <?php echo get_the_date('d.m.y'); ?>
                </div>
                <h2><a href="<?php the_permalink(); ?>"><?php echo the_title(); ?></a></h2>
              </div>
            </div>

          <?php else : ?>

            <div class="col-sm-6 col-md-4 blog__post wow fadeInLeft" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center center; background-size: cover;">
            <div class="wrapper clear" style="background: <?php echo $post_colour ?>">
              <div class="col-md-2 blog__post__date">
                <?php echo get_the_date('d.m.y'); ?>
              </div>

              <div class="col-md-10 blog__post__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </div>
            </div>
          </div>

          <?php endif; ?>

          <?php endwhile;  ?>
    </div>

    <div class="col-md-3 social hidden-xs hidden-sm">
      <a href="https://www.facebook.com/ITFuel/" target="_blank">
        <div class="col-md-12 facebook wow fadeInRight"></div>
      </a>
      <a href="https://twitter.com/itfuel" target="_blank">
        <div class="col-md-12 twitter wow fadeInRight"></div>
      </a>
      <a href="https://www.linkedin.com/company/micro-computer-solutions-mcs-/?trk=top_nav_home" target="_blank">
        <div class="col-md-12 linkedin wow fadeInRight"></div>
      </a>
      <a href="#">
        <div class="col-md-12 youtube wow fadeInRight"></div>
      </a>
    </div>



    </div>

    <div class="pagi clear">
      <?php the_posts_navigation(); ?>
    </div>



</div><!-- /.container-fluid.blog -->
