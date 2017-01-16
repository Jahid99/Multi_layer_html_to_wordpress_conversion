<?php

function multi_layer_theme_css(){
	wp_enqueue_style('theme-style',get_template_directory_uri().'/css/jquery.ennui.contentslider.css');
	wp_enqueue_style('office-master-main-stylesheet',get_stylesheet_uri());
    wp_deregister_script('jquery');
    wp_register_script('jquery', ("http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"), false);
    wp_enqueue_script('jquery');
	wp_enqueue_script('ease-js',get_template_directory_uri().'/js/jquery.easing.1.3.js','jquery',null,true);
	wp_enqueue_script('slider-js',get_template_directory_uri().'/js/jquery.ennui.contentslider.js','jquery',null,true);
}
add_action('wp_enqueue_scripts','multi_layer_theme_css');

function footer_script(){?>   
                <script type="text/javascript">
                    $(function() {
                    $('#one').ContentSlider({
                    width : '920px',
                    height : '200px',
                    speed : 800,
                    easing : 'easeInOutBack'
                    });
                    });
                </script> 
<?php  }
add_action('wp_footer','footer_script');