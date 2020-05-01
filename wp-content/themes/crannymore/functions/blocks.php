<?php

function register_acf_block_types() {

    // register a testimonial block.
    acf_register_block_type(array(
        'name'              => 'team',
        'title'             => __('team'),
        'description'       => __('A custom team block.'),
        'render_template'   => 'inc/blocks/team/team.php',
        'category'          => 'formatting',
        'icon'              => 'dashicons-groups',
        'keywords'          => array( 'team' ),
    ));
}

// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}


 ?>
