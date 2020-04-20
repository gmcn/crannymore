<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 home_title">
      <h2>Our<br />Projects</h2>
      <p>Click on a project to find out more.</p>
    </div>
    <div class="col-md-8 home_content">
      <div class="col-md-12 home_content__wrapper">

        <?php

        // WP_Query arguments
        $args = array (
        	'post_type'              => array( 'projects' ),
        	'post_status'            => array( 'publish' ),
          'posts_per_page'         => 4,
        	'nopaging'               => true,
        	'order'                  => 'ASC',
        	'orderby'                => 'date',
        );

        // The Query
        $projects = new WP_Query( $args );

        // The Loop
        if ( $projects->have_posts() ) :  ?>

        <!-- <div class="container-fluid"> -->
    			<!-- <div class="row"> -->

            <?php while ( $projects->have_posts() ) :  $projects->the_post(); ?>
              <div class="col-sm-6 col-md-3 projects-loop">
      					<a href="<?php echo the_permalink() ?>">
      						<?php echo get_the_post_thumbnail(); ?>
                  <div class="projects-loop__overlay">
                    <div class="vert-align">
                      <?php //echo the_title(); ?>
                      Read More
                    </div>

                  </div>

      					</a>
      				</div>
            <?php endwhile; ?>
            <?php else : ?>
          	No projects found
          <?php endif; wp_reset_postdata(); ?>

          <!-- </div> -->
        <!-- </div> -->

        <a class="more" href="/about">View All Projects</a>
      </div>
    </div>
  </div>
</div>
