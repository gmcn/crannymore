<?php
if ( have_posts() ) : ?>

<div class="container-fluid">
  <div class="row">
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

    <div class="col-sm-6 col-md-4 projects-loop wow fadeInUp">
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
  </div>
</div>



<?php endif; ?>
