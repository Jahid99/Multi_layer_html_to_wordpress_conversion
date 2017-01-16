<?php
/**
 * Get the bootstrap!
 */
if ( file_exists(  __DIR__ . '/cmb2/init.php' ) ) {
  require_once  __DIR__ . '/cmb2/init.php';
} elseif ( file_exists(  __DIR__ . '/CMB2/init.php' ) ) {
  require_once  __DIR__ . '/CMB2/init.php';
}

add_action( 'cmb2_admin_init', 'multi_layer_cmb2' );

function multi_layer_cmb2(){
		$pref='_multi-layer_';
	    $slider_item = new_cmb2_box( array(
        'id'            => 'slider_metabox',
        'title'         => __( 'Slider Metabox', 'multi_layer' ),
        'object_types'  => array( 'slider'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

    
     $slider_item->add_field( array(
        'name'       => __( 'Slider Caption', 'multi_layer' ),
        'desc'       => __( 'Write here your slider caption', 'multi_layer' ),
        'id'         => $pref.'slider_caption',
        'type'       => 'textarea'   
    ) );



     $slider_item->add_field( array(
        'name'       => __( 'Read More', 'multi_layer' ),
        'desc'       => __( 'Read More', 'multi_layer' ),
        'id'         => $pref.'slider_read_more',
        'type'       => 'text'   
    ) );

      $recent_project = new_cmb2_box( array(
        'id'            => 'project_metabox',
        'title'         => __( 'Project Metabox', 'multi_layer' ),
        'object_types'  => array( 'recent_projects'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

  
     $recent_project ->add_field( array(
        'name'       => __( 'Project Link', 'multi_layer' ),
        'desc'       => __( 'Write here your project link', 'multi_layer' ),
        'id'         => $pref.'project_link',
        'type'       => 'text'   
    ) );

  
     $recent_project ->add_field( array(
        'name'       => __( 'Project Title', 'multi_layer' ),
        'desc'       => __( 'Write here your project title', 'multi_layer' ),
        'id'         => $pref.'project_title',
        'type'       => 'text'   
    ) );



    $home_page_group = new_cmb2_box( array(
        'id'            => 'group_page_metabox',
        'title'         => __( 'Post Metabox', 'multi_layer' ),
        'object_types'  => array( 'page' ), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
        'show_on'    => array(
            'key' => 'id',
            'value' => 13
        )
    ) );
    
    $home_group_para = $home_page_group->add_field( array(
        'name'       => __( 'Groupable Field', 'multi_layer' ),
        'id'         => $pref.'about_group_meta_field',
        'type'       => 'group'
    ) );
    
    $home_page_group->add_group_field($home_group_para, array(
        'name'       => __( 'Heading', 'multi_layer' ),
        'id'         => $pref.'heading',
        'type'       => 'text'
    ) );
    
    $home_page_group->add_group_field($home_group_para, array(
        'name'       => __( 'Description', 'multi_layer' ),
        'id'         => $pref.'about_description',
        'type'       => 'textarea'
    ) );
    
     $product_item = new_cmb2_box( array(
        'id'            => 'product_metabox',
        'title'         => __( 'product Metabox', 'multi_layer' ),
        'object_types'  => array( 'all_products'), // Post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

       $product_item->add_field( array(
        'name'       => __( 'Product Url', 'multi_layer' ),
        'desc'       => __( 'Write product url', 'multi_layer' ),
        'id'         => $pref.'product_url',
        'type'       => 'text'   
    ) );
    
     $product_slider = new_cmb2_box( array(
        'id'            => 'product_slider_metabox',
        'title'         => __( 'product Slider Metabox', 'multi_layer' ),
        'object_types' => array( 'page' ), // post type
        'show_on'      => array( 'key' => 'id', 'value' => array( 36, 18,11,167 ) ),
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

       $product_slider->add_field( array(
        'name'       => __( 'Product Slider Title', 'multi_layer' ),
        'desc'       => __( 'Write product slider title', 'multi_layer' ),
        'id'         => $pref.'product_slider_title',
        'type'       => 'text'   
    ) );

       $product_slider->add_field( array(
        'name'       => __( 'Product Slider description', 'multi_layer' ),
        'desc'       => __( 'Write product slider description', 'multi_layer' ),
        'id'         => $pref.'product_slider_description',
        'type'       => 'textarea'   
    ) );

       $product_slider->add_field( array(
        'name'       => __( 'Product Slider Read More', 'multi_layer' ),
        'desc'       => __( 'Write product slider read more', 'multi_layer' ),
        'id'         => $pref.'product_slider_read_more',
        'type'       => 'text'   
    ) );

       $product_slider->add_field( array(
        'name'       => __( 'Product Slider Read More Link', 'multi_layer' ),
        'desc'       => __( 'Write product slider read more link', 'multi_layer' ),
        'id'         => $pref.'product_slider_read_more_link',
        'type'       => 'text'   
    ) );

        $blog_post = new_cmb2_box( array(
        'id'            => 'blog_post_metabox',
        'title'         => __( 'Blog post Metabox', 'multi_layer' ),
        'object_types' => array( 'blog_posts' ), // post type
        'context'       => 'normal',
        'priority'      => 'high',
        'show_names'    => true, // Show field names on the left
    ) );

       $blog_post->add_field( array(
        'name'       => __( 'Blog post Web Site Title', 'multi_layer' ),
        'desc'       => __( 'Write web site title', 'multi_layer' ),
        'id'         => $pref.'blog_post_site_title',
        'type'       => 'text'   
    ) );

       $blog_post->add_field( array(
        'name'       => __( 'Blog post Web Site Url', 'multi_layer' ),
        'desc'       => __( 'Write web site url', 'multi_layer' ),
        'id'         => $pref.'blog_post_site_url',
        'type'       => 'text'   
    ) );

       $blog_post->add_field( array(
        'name'       => __( 'Blog post Web Site Url Link', 'multi_layer' ),
        'desc'       => __( 'Write web site url link', 'multi_layer' ),
        'id'         => $pref.'blog_post_site_url_link',
        'type'       => 'text'   
    ) );
      
       $blog_post->add_field( array(
        'name'       => __( 'Blog post Web Site Target', 'multi_layer' ),
        'desc'       => __( 'Write web site target', 'multi_layer' ),
        'id'         => $pref.'blog_post_site_target',
        'type'       => 'text'   
    ) );
}