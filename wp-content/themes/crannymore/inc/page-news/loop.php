<?php if ( have_posts() ) : ?>

<div class="container-fluid" style="padding: 0 45px 50px 45px">
  <div class="row">
    <?php
    /* Start the Loop */
    while ( have_posts() ) : the_post(); ?>

    <div class="col-sm-6 col-md-4 news-loop wow fadeInUp">
      <a href="<?php echo the_permalink() ?>">
        <?php echo the_post_thumbnail('custom-medium'); ?>

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

<?php if(paginate_links()) : ?>

  <?php $args = array(
	'prev_next'          => true,
	'prev_text'          => __('< '),
	'next_text'          => __(' >'),
	'add_args'           => false,
	'before_page_number' => '',
	'after_page_number'  => ' |' ); ?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-push-4 paginate">
        <div class="paginate_wrap">
          <?php echo paginate_links( $args ); ?>
        </div>

      </div>
    </div>
  </div>
<?php endif; ?>

<?php endif; ?>
