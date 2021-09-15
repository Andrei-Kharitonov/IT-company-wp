<?php

add_action( 'wp_enqueue_scripts', 'it_company_style' );
add_action( 'wp_enqueue_scripts', 'it_company_scripts' );

function it_company_style() {
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function it_company_scripts() {
	wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.min.js', array(), null, true );
}

?>