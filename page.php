<?php get_header(); ?>
	<div id="page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content('<p class="serif">Lire le reste de cette page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Modifier cette page.', '<p>', '</p>'); ?>
	</div>
<?php get_footer(); ?>
