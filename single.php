<?php get_header(); ?>
	<div id="content" class="widecolumn">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
		<p class='aright' style='margin-left: 10px; font-size: 13px; color: rgb(170, 170, 170);'>le <?php the_time('j F Y') ?></small>
			<h1><?php the_title(); ?></h1>
			<h2>par <a href="<?php echo get_option('home'); ?>/"><?php the_author() ?></a></h2>
			
			<div class='message info'><?php the_excerpt(); ?></div>
			
			<div class="entry">
				<?php the_content('<p class="serif">Lire la suite de l\'article &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?> 
			</div>

	<?php  comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Désolé, aucun article ne correspond à vos critères.</p>
    <?php endif; ?>
	</div>
<?php get_footer(); ?>
