<?php

/**
 * Team Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'team-' . $block['id'];
if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'team';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}



?>

<?php if( have_rows('team_members') ): ?>
  <div class="row">


	<?php while( have_rows('team_members') ): the_row();

    // Load values and assign defaults.
    $name = get_sub_field('team_member_name') ?: 'Your name here...';
    $photo = get_sub_field('team_member_photo') ?: 'Photo here...';
    $sig = get_sub_field('team_member_sig') ?: 'Signature Image here...';

		?>

		<div class="col-md-6 team_members">

        <img src="<?php echo $photo; ?>" alt="<?php echo $name; ?>">
        <p><?php echo $name; ?></p>
        <?php if ($sig): ?>
          <img class="sig hidden-sm" src="<?php echo $sig; ?>" alt="<?php echo $name; ?>">
        <?php endif; ?>


		</div>

	<?php endwhile; ?>
  </div>
<?php endif; ?>
