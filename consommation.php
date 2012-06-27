<?php
/*
Template Name: consommation
*/
define('SIDEBAR', 1569);
get_header();
?>

<?php
$args = array( 'numberposts' => 3, 'order' => 'DESC', 'category' => 20 );
$lastposts = get_posts( $args );
foreach($lastposts as $post) : setup_postdata($post); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
<?php endforeach; ?>

	<div id="page">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php the_content('<p class="serif">Lire le reste de cette page &raquo;</p>'); ?>
				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	  <?php endwhile; endif; ?>
	<?php edit_post_link('Modifier cette page.', '<p>', '</p>'); ?>
	</div>
<?php get_footer(); ?>
