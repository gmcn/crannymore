<div class="container-fluid page_title">

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
