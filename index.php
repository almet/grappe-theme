<?php get_header(); ?>

	<?php if (have_posts()) : ?>
	
		<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
		    <div class="post-content">
		    
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <div class="hr"><hr /></div>
		    <?php the_content('Lire la suite &raquo;'); ?>
		    </div>
		</div>
		<?php endwhile; ?>
		<a id="archives" href="/archives"> voir les archives</a>
		
	<?php else : ?>
	
		<h2>Rien à voir ..</h2>
		<p class="center">Aucun article ici ...</p>
		<?php get_search_form(); ?>
		
	<?php endif; ?>
<?php get_footer(); ?>
