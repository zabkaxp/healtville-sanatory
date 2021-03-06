<?php

function sanatory_post_types(){
     register_post_type('event', array(
     'supports' => array('title', 'editor', 'excerpt'),
     'rewrite' => array('slug' => 'events'),
     'has_archive' => true,
     'public' => true,
     'labels' => array(
          'name'=> 'Events',
          'add_new_item' => 'Add New Event',
          'edit_item' => 'Edit Event',
          'all_items'=> 'All Events',
          'singular_name' => 'Event'
		),
     'menu_icon' => 'dashicons-calendar'
));

    register_post_type('treatment', array(
    'supports' => array('title', 'editor'),
    'rewrite' => array('slug' => 'treatments'),
    'has_archive' => true,
    'public' => true,
    'labels' => array(
      'name' => 'Treatments',
      'add_new_item' => 'Add New Treatment',
      'edit_item' => 'Edit Treatment',
      'all_items' => 'All Treatments',
      'singular_name' => 'Treatment'   ),
    'menu_icon' => 'dashicons-awards'  ));

    
     register_post_type('doctor', array(
    'supports' => array('title', 'editor', 'thumbnail'),
    'public' => true,
    'labels' => array(
      'name' => 'Doctors',
      'add_new_item' => 'Add New Doctor',
      'edit_item' => 'Edit Doctor',
      'all_items' => 'All Doctors',
      'singular_name' => 'Doctor'   ),
    'menu_icon' => 'dashicons-awards'  ));

    register_post_type('campus', array(
     'supports' => array('title', 'editor', 'excerpt'),
     'rewrite' => array('slug' => 'campuses'),
     'has_archive' => true,
     'public' => true,
     'labels' => array(
          'name'=> 'Campuses',
          'add_new_item' => 'Add New Campus',
          'edit_item' => 'Edit Campus',
          'all_items'=> 'All Campuses',
          'singular_name' => 'Campus'
		),
     'menu_icon' => 'dashicons-calendar'
));
}
add_action('init', 'sanatory_post_types'); 