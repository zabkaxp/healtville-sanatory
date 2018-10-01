<?php 
function sanatory_files(){
	wp_enqueue_style('sanatory_main_styles', get_stylesheet_uri(), NULL, microtime()); 
    wp_enqueue_style('custom-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700');
    wp_enqueue_script('main-sanatory-js', get_theme_file_uri('/js/scripts.js'), array('jquery'), 1.0, true);
    wp_enqueue_script('googleMap', '//maps.googleapis.com/maps/api/js?key=AIzaSyDq3IY3tJQltQM4-Q84uT2qOHGNqrQaDeM', NULL, '1.0', true); 
    wp_localize_script('main-sanatory-js', 'sanatoryData', array('root_url'=> get_site_url() ));

}

add_action('wp_enqueue_scripts', 'sanatory_files'); 

function sanatory_features(){
	add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('doctorPortrait', 480, 650, true);
    add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'sanatory_features');	


function sanatory_adjust_queries($query){
      if(!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()){
          $query->set('meta_key', 'date');
          $query->set('orderby', 'meta_value_num');
          $query->set('order', 'ASC');
          $query->set('meta_query', array(
              array(
                'key' => 'date',
                'compare'=> '>=',
                'value'=> date('Ymd'),
                'type'=> 'numeric'
            )
          )
      );}

    if(!is_admin() AND is_post_type_archive('treatment') AND $query->is_main_query()){
      $query->set('orderby', 'title');
      $query->set('posts_per_page', -1);
    $query->set('order', 'ASC');
    }

}

add_action('pre_get_posts', 'sanatory_adjust_queries');

function sanatoryMapKey($api){
  $api['key']='AIzaSyDq3IY3tJQltQM4-Q84uT2qOHGNqrQaDeM';
  return $api;}

add_filter('acf/fields/google_map/api','sanatoryMapKey');\
    
function sanatory_custom_rest() {
  register_rest_field('post', 'authorName', array(
    'get_callback' => function() {return get_the_author();}  ));}

add_action('rest_api_init', 'sanatory_custom_rest'); 


