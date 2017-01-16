<?php get_header(); ?>
<?php get_sidebar(); ?>
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post() ?>

				<a href="<?php the_permalink(); ?>" title="permalink to the <?php the_title_attribute(); ?>"><?php the_title(); ?></a><br>
			<em>Article posted on <?php the_time('l,F,jS,Y') ?> at <?php the_time() ?></em>
		<?php the_content() ; ?>
		<?php the_tags(); ?>

		<?php edit_post_link('Edit This post','<strong>','</strong>'); ?>
		<div class='promote'>
			<h2>Enjoy This Article</h2>
			<p>If you have enjoyed this article please subscribe to our <a href="<?php bloginfo('rss2_url') ; ?>">RSS Feed</a></p>
		</div>
	<?php endwhile; ?>
	
<?php else : ?>
	<h2>No Post Found</h2>
<?php endif; ?>

<?php get_footer() ?>

<?php include(TEMPLATEPATH . '/footer.php') ?>