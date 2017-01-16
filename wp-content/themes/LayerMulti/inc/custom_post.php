<?php

function multi_layer_custom_post(){
	
	register_post_type('slider',array(
	'labels'=>array(
		'name'=>'Main Slider',
		'menu_name'=>'Slider Menu',
		'all_items'=>'All Sliders',
		'add_new'=>'Add New Slider',
		'add_new_item'=>'Add new slide now'
		),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','custom-fields','page-attributes'
		)
));


	
	register_post_type('recent_projects',array(
	'labels'=>array(
		'name'=>'Recent Projects',
		'menu_name'=>'Recent Projects Menu',
		'all_items'=>'All Projects',
		'add_new'=>'Add New Project',
		'add_new_item'=>'Add new project now'
		),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','page-attributes','editor'
		)
));


	
	register_post_type('all_products',array(
	'labels'=>array(
		'name'=>'All Products',
		'menu_name'=>'All Products Menu',
		'all_items'=>'All Products',
		'add_new'=>'Add New Product',
		'add_new_item'=>'Add new product now'
		),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','page-attributes','editor','comments'
			
		)
));

    
	register_post_type('blog_posts',array(
	'labels'=>array(
		'name'=>'Blog Posts',
		'menu_name'=>'Blog Posts Menu',
		'all_items'=>'Blog Posts',
		'add_new'=>'Add New Blog Post',
		'add_new_item'=>'Add new blog post now'
		),
		'public'=>true,
		'supports'=>array(
			'title','thumbnail','revisions','page-attributes','editor','comments'
			
		)
));



}

add_action('init','multi_layer_custom_post');