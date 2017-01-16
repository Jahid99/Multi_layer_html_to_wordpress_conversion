<?php get_header(); ?>

		<center style="margin-top: 20px;"><h2><?php printf('Search Result for : %s ', get_search_query() );?></h2></center>
		
		<?php if( have_posts() && $_GET['s']!='' ){
			while( have_posts() ){
				
				the_post(); ?>
				<center><div style="color:black;" class="single_search_item">
					
					<h2><a href="<?php the_permalink();	?>"><?php the_title('<h3 style="color:black">', '</h3>'); ?></a></h2>
					<?php the_content() ; ?>
					<hr>
					
				</div></center>
				
			<?php } ?>
			<center> <?php
			 the_posts_pagination(); ?>
			 </center><div class="margin_pagination"></div> <?php
		}else if($_GET['s']==''){
			echo '<center style="margin-bottom: 20px;">Please Enter Somthing Into The Search Box</center>'; ?>	
				<?php
		}


		else{
				echo '<center style="margin-bottom: 20px;">No Post Found</center>'; ?>
				
				<?php

			}

	?>

	
<?php multi_layer_fallback_style(); ?>

<?php get_footer(); ?>