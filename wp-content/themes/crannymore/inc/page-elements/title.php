<?php if (is_tax()) : ?>
  <div class="container-fluid projects_title">
    <h1 class="wow fadeInLeft"><?php echo single_cat_title(); ?></h1>
  </div>
<?php elseif (is_archive('projects')) : ?>
  <div class="container-fluid projects_title">
    <h1 class="wow fadeInLeft">Portfolio</h1>
  </div>
<?php elseif (is_singular('projects')) : ?>
  <div class="container-fluid projects_title">
    <h1 class="wow fadeInLeft">Portfolio</h1>
  </div>
<?php else : ?>
  <div class="container-fluid">
    <h1 class="wow fadeInLeft"><?php echo the_title(); ?></h1>
  </div>
<?php endif; ?>
