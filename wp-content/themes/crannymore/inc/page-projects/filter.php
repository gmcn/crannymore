<?php

  $project_types = get_terms( 'projects-type', 'orderby=count&hide_empty=1' );

 ?>


<div class="container-fluid projects_filter">
  <div class="row">
    <div class="col-md-8 col-md-push-4">
      <p>Keep up to date with our work by exploring<br /> some of our recent projects.</p>

        <div class="dropdown show">
              <a class="btn dropdown-toggle" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Filter by Project Type <img src="<?php echo get_template_directory_uri(); ?>/images/caret.svg" alt="Dropdown Arrow">
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

                <?php foreach ( $project_types as $project_type ) { ?>
                  <li>
                    <a href="/projects-type/<?php echo $project_type->slug ?>">
                        <?php echo $project_type->name ?>
                    </a>
                  </li>
                <?php  } ?>

            <li><a class="dropdown-item" href="/projects/">All</a></li>
              </div>

      </div>
    </div>
  </div>
</div>
