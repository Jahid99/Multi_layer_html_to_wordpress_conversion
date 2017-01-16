<?php

//Read More Button For Excerpt
function themeprefix_excerpt_read_more_link( $output ) {
	global $post;
	return $output . ' <a href="' . get_permalink( $post->ID ) . '" class="more-link" title="Continue reading">Continue reading...</a>';
}
add_filter( 'the_excerpt', 'themeprefix_excerpt_read_more_link' );

//Search Options
function SearchFilter($query) {

if ( $query->is_search) {


$query->set( 'post_type', array( 'post', 'blog_posts' , 'all_products') );

}

return $query;

}
add_filter('pre_get_posts','SearchFilter');




//Style Functionality
function multi_layer_fallback_style(){ ?>

<style type="text/css">
			body {
			background-image: url(<?php echo get_template_directory_uri(); ?>/images/templatemo_body2.jpg);
			
		}
		</style>

<?php }