<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
			<p class="post-date"><span class="post-date">
		      <span class="date-d"><?php the_time('j'); ?></span>
		      <span class="date-m"><?php the_time('M'); ?>.</span>
		      <span class="date-y"><?php the_time('Y'); ?></span>
		      <span class="date-h"><a title="Lien permanent" href="<?php the_permalink() ?>"><?php the_time('G:i'); ?></a></span>
		    </span>
		    </p>
		    <div class="post-content">
		    
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		    <?php the_content('Lire la suite &raquo;'); ?>
		    </div>
		</div>
		<div class="hr"><hr /></div>
		<?php endwhile; ?>
		
	<?php else : ?>
	
		<h2>Rien à voir ..</h2>
		<p class="center">Aucun article ici ...</p>
		<?php get_search_form(); ?>
		
	<?php endif; ?>
<?php get_footer(); ?>
