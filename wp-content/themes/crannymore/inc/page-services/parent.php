<div class="container-fluid services-parent">
  <div class="row">
    <?php

      $args = array(
          'post_type'      => 'page',
          'posts_per_page' => -1,
          'post_parent'    => $post->ID,
          'order'          => 'ASC',
          'orderby'        => 'menu_order'
       );


      $parent = new WP_Query( $args );

      if ( $parent->have_posts() ) : ?>

          <?php while ( $parent->have_posts() ) : $parent->the_post();

          $serviceIcon = get_field('service_icon');

          ?>

            <div id="parent-<?php the_ID(); ?>" class="col-sm-6 col-md-4 child-page">
              <div class="child-page__wrap">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                  <h2><?php the_title(); ?></h2>

                  <div class="more">
                    <p>Find Out More</p>
                    <img src="<?php echo $serviceIcon ?>" alt="<?php the_title(); ?>">
                  </div>



                  <?php echo the_post_thumbnail( 'large' ); ?>

                </a>
              </div>
            </div>

          <?php endwhile; ?>

      <?php endif; wp_reset_postdata(); ?>
  </div>
</div>
