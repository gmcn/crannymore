<?php if (is_tax()) : ?>
  <div class="container-fluid projects_title">



    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft"><?php echo single_cat_title(); ?></h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>


  </div>
<?php elseif (is_post_type_archive('projects')) : ?>
  <div class="container-fluid projects_title">
    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft">Portfolio</h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>
  </div>
<?php elseif (is_archive()) : ?>
  <div class="container-fluid news_title">

    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft"><?php echo single_cat_title(); ?></h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>

  </div>
<?php elseif (is_singular('projects')) : ?>
  <div class="container-fluid projects_title">

    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft">Portfolio</h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>


  </div>
<?php elseif (is_home() || is_single()) : ?>
  <div class="container-fluid news_title">
    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft">News</h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>
  </div>
<?php else : ?>
  <div class="container-fluid services_title">
    <div class="row">
      <div class="col-md-6">
        <h1 class="wow fadeInLeft"><?php echo the_title(); ?></h1>
      </div>
      <div class="col-md-6 page_title__breadcrumbs">
        <?php
          if ( function_exists('yoast_breadcrumb') ) {
            yoast_breadcrumb( '<p>','</p>' );
          }
          ?>
      </div>
    </div>
  </div>
<?php endif; ?>
