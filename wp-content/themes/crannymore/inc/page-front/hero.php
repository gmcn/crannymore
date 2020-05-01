<?php
/**
 * Note: The design shows a section in the banner 'tile' that seems to indicate that there should
 * be reference made to a particular project however none of the slides in the banner relate to
 * projects so this is not being coded.
 */
?>

<!-- BX Slider with Caption & Read More Link -->
<div id="bxslider">

	<?php if(have_rows('slider')): ?>

		<ul class="bxslider">

			<?php while(have_rows('slider')) : the_row();
					// ACF Sub fields
      		$slide_image = get_sub_field('slide_image');
      		$slide_title = get_sub_field('slide_title');
					$slide_link = get_sub_field('slide_link');
					$slide_desc = get_sub_field('slide_description');
					?>

				<li class="slide">

					<?php if ($slide_link): ?>
            <a href="<?php echo $slide_link ?>">
          <?php endif; ?>

          <div class="overlay">

          </div>

          <div class="vert-align wow fadeIn">
            <h1><?php echo $slide_title; ?></h1>
            <p><?php echo $slide_desc; ?></p>
          </div>

          <img src="<?php echo $slide_image; ?>" alt="">

          <?php if ($slide_link): ?>
          </a>
          <?php endif; ?>

				</li>

			<?php endwhile; ?>

		</ul>
  <?php endif; ?>
</div>
