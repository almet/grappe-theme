<?php get_header(); ?>
	 <div class='post'>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
 
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
		

	<?php  comments_template(); ?>
	<?php endwhile; else: ?>
		<p>Désolé, aucun article ne correspond à vos critères.</p>
    <?php endif; ?>
	</div>
<?php get_footer(); ?>
