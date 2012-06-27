<?php get_header(); ?>
		<?php if (have_posts()) : ?>
		<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		<?php /* If this is a category archive */ if (is_category()) { ?>
			<h2 class="pagetitle">Archive pour la catégorie &#8216;<?php single_cat_title(); ?>&#8217;</h2>
		<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?> 
			<h2 class="pagetitle">Articles taggés avec &#8216;<?php single_tag_title(); ?>&#8217;</h2> 
		<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('j F Y'); ?></h2>
		<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('F Y'); ?></h2>
		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2 class="pagetitle">Archive pour <?php the_time('Y'); ?></h2>
		<?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h2 class="pagetitle">Archive par auteur </h2>
		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="pagetitle">Archives du blog </h2>
		<?php } ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
		<div class='post'>
			<p class="post-date"><span class="post-date">
		      <span class="date-d"><?php the_time('j'); ?></span>
		      <span class="date-m"><?php the_time('M'); ?>.</span>
		    </span>
		    </p>
		    <div class="post-content">
		    
			<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Lien permanent vers <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		    <?php the_content('Lire la suite &raquo;'); ?>
		    </div>
		</div>
		<div class="hr"><hr /></div>
		<?php endwhile; ?>
		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Articles plus anciens') ?></div>
			<div class="alignright"><?php previous_posts_link('Articles plus récents &raquo;') ?></div>
		</div>
	<?php else : ?>
		<h2 class="center">Introuvable</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	<?php endif; ?>
<?php get_footer(); ?>
