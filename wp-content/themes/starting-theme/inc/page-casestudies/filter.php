<div class="container-fluid casestudies">

  <div class="filter clear">

    <div class="filter__wrapper">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter by Product<img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by Product">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <?php

           $case_studies_product = get_terms('case_studies_product', array('hide_empty' => false));

           foreach($case_studies_product as $case_studies_product_single) { ?>
             <li> <a href="<?php echo get_term_link($case_studies_product_single->slug, 'case_studies_product') ?>"> <?php echo $case_studies_product_single->name; ?></a></li>
           <?php } ?>
        </div>
      </div>
    </div>

    <div class="filter__wrapper">
      <div class="dropdown show">
        <a class="btn btn-secondary dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Filter by service <img src="<?php echo get_template_directory_uri() ?>/images/filter_dropicon.svg" alt="Filter by service">
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <?php

           $case_studies_product = get_terms('case_studies_service', array('hide_empty' => false));

           foreach($case_studies_product as $case_studies_product_single) { ?>
             <li> <a href="<?php echo get_term_link($case_studies_product_single->slug, 'case_studies_service') ?>"> <?php echo $case_studies_product_single->name; ?></a></li>
           <?php } ?>
        </div>
      </div>
    </div>

    <div class="filter__wrapper">
      <a href="/case_studies">Show All</a>
    </div>

  </div>
