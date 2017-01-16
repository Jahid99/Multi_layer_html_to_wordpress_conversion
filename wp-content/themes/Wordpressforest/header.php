<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content='<?php bloginfo('html_type'); ?>;charset=<?php bloginfo('charset'); ?>'/>
	<title><?php bloginfo('name') ; ?><?php wp_title('||'); ?></title>
	<link rel="stylesheet" href='<?php bloginfo('stylesheet_url'); ?>' type="text/css" media='screen'>
</head>
<body>
	<div id="wrap">	

		<div id="header">
			<h1><a href="<?php echo get_option('home');?>/"><?php bloginfo('name') ; ?></a></h1>
			<ul id='nav'><?php wp_list_pages('title_li='); ?></ul>
		</div>	