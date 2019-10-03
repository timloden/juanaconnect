<?php

/* Add options menu
--------------------------------------------------------------------------------------*/
if (function_exists('acf_add_options_page') ) {

    acf_add_options_page(
        array(
        'page_title'     => 'Site Options',
        'menu_title'    => 'Site Options',
        'menu_slug'     => 'site-options',
        'capability'    => 'edit_posts',
        'position'         => 1,
        'redirect'        => false,
        'update_button' => __('Save Options', 'acf'),
        'updated_message'    => __("Options Saved", 'acf'),
        )
    );


}