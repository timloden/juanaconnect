<?php

/* Styles
--------------------------------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'juanaconnect_styles', 99);

function juanaconnect_styles()
{
    wp_enqueue_style('juanaconnect-styles', get_stylesheet_uri(), [], '1.0.0');
}

/* Scripts
--------------------------------------------------------------------------------------*/
add_action('wp_enqueue_scripts', 'juanaconnect_scripts');

function juanaconnect_scripts()
{
    wp_enqueue_script('juanaconnect-custom-js', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0.0', true);

    // only if we use vendor scripts
    //wp_enqueue_script('juanaconnect-vendor-js', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), '1.0.0', true);
}