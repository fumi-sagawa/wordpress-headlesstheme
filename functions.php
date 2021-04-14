<?php
add_theme_support('post-thumbnails', array('post'));
add_theme_support('menus'); 

function my_customize_rest_cors() {
  remove_filter( 'rest_pre_serve_request', 'rest_send_cors_headers' );
  add_filter( 'rest_pre_serve_request', function( $value ) {
    header( 'Access-Control-Allow-Origin: *' );
    return $value;
  });
}
add_action( 'rest_api_init', 'my_customize_rest_cors', 15 );

//addallposts
//https://qiita.com/webiscuit/items/535fa8c44c960f2c7192
//https://notes.sharesl.net/articles/751/
//hogehogetesttetsaaaaaaaaaaa
function custom_api_get_all_posts() {
    register_rest_route( 'custom/v1', '/allposts', array(
        'methods' => 'GET',
        'callback' => 'custom_api_get_all_posts_callback'
    ));
}
add_action( 'rest_api_init', 'custom_api_get_all_posts' );   

function custom_api_get_all_posts_callback( $request ) {
    $posts_data = array();
    $posts = get_posts( array(
            'posts_per_page' => -1
        )
    ); 
    foreach( $posts as $post ) {
        $id = $post->ID;
		  $category   = get_the_category($id);
        $posts_data[] = (object) array( 
            'id' => $id, 
            'slug' => $post->post_name,
            'title' => $post->post_title,
            'content' => $post->post_content,
			    	'category_name' => $category[0] ->cat_name,
		    		'time' => $post->post_date ,
		    		'thumbnail' => get_the_post_thumbnail( $id, 'full' ),
            

        );
    }                  
    return $posts_data;                   
} 

?>

