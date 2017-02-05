<?php 

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_image_size( 'media_library', 333, 230, true );

register_nav_menu('mainmenu', 'Main Menu');


/*function custom_excerpt()
{
	return 30;
}

add_filter('excerpt_length', 'custom_excerpt');*/

function read_more($limit)
{
	$content = explode(" ", get_the_content());
	
	$less = array_slice($content, 0, $limit);
	
	echo implode(" ", $less);
}
register_post_type("hasinur", array( 
	'labels' => array(
		'name' => 'Custom-Post'
	),
	
	'public' => true,
	
	'supports' => array('title', 'editor', 'thumbnail')
));
//add_action('after_setup_theme', 'read_more');