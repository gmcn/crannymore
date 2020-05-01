<?php

  $project_types = get_terms( 'projects-type', 'orderby=count&hide_empty=1' );

 ?>


<div class="container-fluid news_filter">
  <div class="row">
    <div class="col-md-4">
      <h2>Latest News</h2>
    </div>
    <div class="col-md-8 ">
      <p>Keep up to date with what’s going on in <br /> the world of Cranny More Construction.</p>

        <div class="dropdown show">
              <a class="btn dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter by Category <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <?php wp_list_categories(array( 'title_li' => '' )); ?>

            <li><a class="dropdown-item" href="/news/">All</a></li>
              </div>

      </div>
    </div>
  </div>
</div>
