<?php get_header(); ?>
<?php get_sidebar(); ?>
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post() ?>

				<a href="<?php the_permalink(); ?>" title="permalink to the <?php the_title_attribute(); ?>"><?php the_title(); ?></a>

		<?php the_content('Continue Reading...'); ?>

	<?php endwhile; ?>
	<p><?php previous_posts_link('Previous Entries'); ?><?php next_posts_link('Older Entries'); ?></p>
<?php else : ?>
	<h2>No Post Found</h2>
<?php endif; ?>
<?php include(TEMPLATEPATH . '/footer.php') ?>