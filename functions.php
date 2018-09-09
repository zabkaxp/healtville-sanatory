<?php 
function sanatory_files(){
	wp_enqueue_style('sanatory_main_styles', get_stylesheet_uri(), NULL, microtime()); 
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');
    wp_enqueue_script('main-sanatory-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime());
}

add_action('wp_enqueue_scripts', 'sanatory_files'); 

function sanatory_features(){
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'sanatory_features');	
