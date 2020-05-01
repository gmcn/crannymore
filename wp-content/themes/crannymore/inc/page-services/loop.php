<?php
if ( have_posts() ) : ?>

<div class="container-fluid">
  <div class="row">
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

    <div class="col-sm-6 col-md-4 news-loop wow fadeInUp">
      <a href="<?php echo the_permalink() ?>">
        <?php echo get_the_post_thumbnail(); ?>

        <div class="news-loop__date">
          <?php echo the_date('d.m.y') ?>
        </div>

        <div class="vert-align">
          <h2><?php echo the_title(); ?></h2>
        </div>

        <div class="news-loop__more">
          Read More
        </div>

      </a>
    </div>

    <?php endwhile; ?>
  </div>
</div>



<?php endif; ?>
