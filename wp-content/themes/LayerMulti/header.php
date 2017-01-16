<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html <?php language_attributes();  global $multi_layer; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
<meta name="keywords" content="multi layer, website template, XHTML CSS" />
<meta name="description" content="Multi Layer" />
<?php wp_head();?>
</head>
<body>
<div id="templatemo_header_wrapper">

	<div id="templatemo_header">
    
    	<div id="site_title">
            <h1><a href="<?php echo site_url() ; ?>" target="_parent">
                <img src="<?php echo  $multi_layer['site_logo']['url']; ?>" alt="Web Templates" />
                <span><?php echo  $multi_layer['title_description']; ?></span>
            </a></h1>
        </div>
        
        
           <?php get_search_form(); ?>
       
        
        <div class="cleaner"></div>
	</div><!-- end of header -->

    

        <!-- Menus -->

        <?php if(is_user_logged_in()){ wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'container_id' => 'templatemo_menu'
        ))  ; }else{
            wp_nav_menu(array(
            'theme_location' => 'sec_menu'
        ))  ;
            } ?>



