<?php

  $time_to_completion = get_field('time_to_completion');
  $date_of_completion = get_field('date_of_completion');
  $project_requirements = get_field('project_requirements');
  $project_gallery = get_field('project_gallery');

 ?>


<div class="container-fluid news-single">
  <div class="row">
    <div class="col-md-4 matchheight">

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

      <a class="back" href="/news">Back to news</a>

    </div>
    <div class="col-md-2 news-single__details matchheight">


            <h3>
              <?php


              $all_categories=get_categories();
              foreach($all_categories as $categories_item)
              {
                echo  $categories_item->name . " " ;//you get the idea
              }

               ?>
            </h3>


      <?php if ($time_to_completion) : ?>
        <div class="news-single_complete">
          <p>Time to completion</p>
          <?php echo $time_to_completion ?>
        </div>
      <?php endif; ?>

      <?php if ($date_of_completion) : ?>
        <div class="news-single_complete">
          <p>Date of completion</p>
          <?php echo $date_of_completion ?>
        </div>

      <?php endif; ?>

      <?php if( have_rows('project_requirements') ): ?>

        <div class="news-single_complete">
          <p>Requirements</p>
          <ul class="requirements">

        	<?php while( have_rows('project_requirements') ): the_row();

        		// vars
        		$requirement = get_sub_field('requirement');

        		?>

        		<li><?php echo $requirement; ?></li>

        	<?php endwhile; ?>

        	</ul>
        </div>
      <?php endif; ?>

    </div>
    <div class="col-md-6 no-gutter news-single_gallery matchheight">

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

              <div class="col-xs-6 col-md-4 <?php if( $i > 10 ) { echo 'hidden'; } ?>">
                <a class="fancybox" rel="group" href="<?php echo esc_url($image['sizes']['large']); ?>" title="<?php echo esc_attr($image['alt']); ?>">

                     <img src="<?php echo esc_url($image['sizes']['custom-small']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

                 </a>
              </div>

            <?php endif; ?>



          <?php $i++; endforeach; ?>
        <?php endif; ?>

    </div>
  </div>
</div>
