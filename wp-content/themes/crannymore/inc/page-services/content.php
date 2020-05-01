<?php

  $time_to_completion = get_field('time_to_completion');
  $date_of_completion = get_field('date_of_completion');
  $project_requirements = get_field('project_requirements');
  $project_gallery = get_field('project_gallery');

 ?>


<div class="container-fluid services-single">
  <div class="row">
    <div class="col-md-4 matchheight">

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <a class="back" href="/our-services">Back to Services</a>

    </div>
    <div class="col-md-2 services-single__details matchheight">


        <div class="services-single_complete">
          <p>Related Projects</p>
          <a href="/projects-type/<?php echo $post->post_name ?>">See More</a>
        </div>

        <div class="services-single_complete">
          <p>Related News</p>
          <a href="/category/<?php echo $post->post_name ?>">See More</a>
        </div>


    </div>
    <div class="col-md-6 no-gutter services-single_gallery matchheight">

      <?php
        if( $project_gallery ): ?>
          <?php $i = 1; foreach( $project_gallery as $image ): ?>

            <?php if ($i == 1): ?>

              <div class="col-md-12">

                <a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" title="<?php echo esc_attr($image['alt']); ?>">

                  <img class="enlarge" src="<?php echo get_template_directory_uri() ?>/images/enlarge.svg" alt="Click to Enlarge/View Gallery">

                   <img src="<?php echo esc_url($image['sizes']['large']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                 </a>
              </div>

            <?php else : ?>

              <div class="col-xs-6 col-md-4">
                <a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" title="<?php echo esc_attr($image['alt']); ?>">

                     <img src="<?php echo esc_url($image['sizes']['custom-small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                 </a>
              </div>

            <?php endif; ?>



          <?php $i++; endforeach; ?>
        <?php endif; ?>

    </div>
  </div>


  <?php

  $currentID = get_the_ID();

    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => 27,
        'order'          => 'ASC',
        'orderby'        => 'menu_order',
        'post__not_in' => array($currentID)
     );


    $parent = new WP_Query( $args );

    if ( $parent->have_posts() ) : ?>

        <?php while ( $parent->have_posts() ) : $parent->the_post();

        $serviceIcon = get_field('service_icon');

        ?>

          <div id="parent-<?php the_ID(); ?>" class="col-sm-4 col-lg-2 child-page">
            <div class="child-page__wrap">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">

                <h2 class="headmatch"><?php the_title(); ?></h2>

                <div class="more">
                  <p>Find Out More</p>
                  <img src="<?php echo $serviceIcon ?>" alt="<?php the_title(); ?>">
                </div>

              </a>
            </div>
          </div>

        <?php endwhile; ?>

    <?php endif; wp_reset_postdata(); ?>

</div>
