<?php

function multi_layer_theme_support(){
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
	add_image_size('slider-img',1500,500,true);
	add_image_size('sidebar-slider-img',265,192,true);
	add_image_size('team-member',100,80,true);
	add_image_size('post-thumb',850,490,true);
	register_nav_menus(array(
		'primary_menu'=>'Primary Menu'
	));
	register_nav_menus(array(
		'sec_menu'=>'Sec Menu'
	));
	add_theme_support('html5','search-form');
}
add_action('after_setup_theme','multi_layer_theme_support');