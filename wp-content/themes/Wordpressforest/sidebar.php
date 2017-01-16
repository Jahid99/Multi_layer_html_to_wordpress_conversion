<div id="sidebar">
	<ul>
		<?php
			if(!function_exists('dynamic_sidebar') || !dynamic_sidebar()):
		?>
		<li><?php get_search_form(); ?></li>
		<?php wp_list_pages('title_li=<h3>PAges</h3>'); ?>
		<li>
			<h3>Archives</h3>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		<?php wp_list_categories('title_li=<h3>Categories</h3>'); ?>
		<ul>
			<li><?php wp_loginout(); ?></li>
		</ul>
	<?php endif; ?>
	</ul>
	
</div>