<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 home_title">
      <h2>Our<br />Services</h2>
      <p>Click on a service to find out more.</p>
    </div>
    <div class="col-md-8 home_services">
      <div class="col-md-10 home_services__wrapper">


        <?php

          $args = array(
              'post_type'      => 'page',
              'posts_per_page' => -1,
              'post_parent'    => 27,
              'order'          => 'ASC',
              'orderby'        => 'menu_order'
              // 'orderby'        => 'date'
           );


          $parent = new WP_Query( $args );

          if ( $parent->have_posts() ) : ?>

              <?php while ( $parent->have_posts() ) : $parent->the_post();

              $serviceIcon = get_field('service_icon');

              ?>

                <div id="parent-<?php the_ID(); ?>" class="col-xs-6 col-md-4 child-page">

                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                    <img src="<?php echo $serviceIcon ?>" alt="<?php the_title(); ?>">

                    <h1><?php the_title(); ?></h1>

                  </a>
                </div>

              <?php endwhile; ?>

          <?php endif; wp_reset_postdata(); ?>



      </div>
    </div>
  </div>
</div>
