<div class="container-fluid">
  <div class="row">
    <div class="col-md-4 home_title">
      <h2>Commercial<br />Clients</h2>
    </div>
    <div class="col-md-8 home_content clients">
      <div class="col-md-12 col-lg-10 home_content__wrapper">
        <?php if( have_rows('commercial_clients') ): ?>

        	<ul class="clientsslider">

        	<?php while( have_rows('commercial_clients') ): the_row();

        		// vars
        		$branding = get_sub_field('commercial-client_branding');
        		$name= get_sub_field('commercial-clients_name');
        		$link = get_sub_field('commercial-clients_website');

        		?>

        		<li class="slide">

        			<?php if( $link ): ?>
        				<a href="<?php echo $link; ?>" target="_blank">
        			<?php endif; ?>

        				<img src="<?php echo $branding['url']; ?>" alt="<?php echo $branding['alt'] ?>" />

                <br />

                <p><?php echo $name; ?></p>

        			<?php if( $link ): ?>
        				</a>
        			<?php endif; ?>



        		</li>

        	<?php endwhile; ?>

        	</ul>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
