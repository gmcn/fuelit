<div class="container-fluid products">

  <div class="filter clear">

    <div class="filter__wrapper">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter by Area<img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by Area">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <?php

           $products_cat_area = get_terms('products_area', array('hide_empty' => false));

           foreach($products_cat_area as $products_cat_area_single) { ?>
             <li> <a href="<?php echo get_term_link($products_cat_area_single->slug, 'products_area') ?>"> <?php echo $products_cat_area_single->name; ?></a></li>
           <?php } ?>
        </div>
      </div>
    </div>

    <div class="filter__wrapper">
      <a href="/products">Show All</a>
    </div>

  </div>
