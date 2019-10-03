<?php

/* Menus
--------------------------------------------------------------------------------------*/
add_action( 'init', 'juanaconnect_menus' );

function juanaconnect_menus() {
    $locations = array(
    	'header-menu' => esc_html__( 'Header Menu', 'juanaconnect' ),
		'footer-menu' => esc_html__( 'Footer Menu', 'juanaconnect' ),
    );
    register_nav_menus( $locations );
 }
