<div id="sidebar">    
    <div id="logo">Grappe logo</div>
<h2>Nos projets</h2>
    <div class='text'>
	<ul>

	<?php get_links(19, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
        </ul>
	</div>
<?php    if (defined('SIDEBAR')){ ?>

<?php
$page_id = SIDEBAR;
$sidebar_page = get_post($page_id);
setup_postdata($sidebar_page);
?>

<h2><?php echo $sidebar_page->post_title; ?></h2>
<div class='text'>
	<?php the_content(); ?>
</div>

<?php } else { ?>
    <h2>Les assos du réseau</h2>
	<div class='text'>
	<ul>
	<?php get_links(18, '<li>', '</li>', '', TRUE, 'url', FALSE); ?>
	</ul>
	</div>

<?php
$page_id = 1578;
$sidebar_page = get_post($page_id);
setup_postdata($sidebar_page);
?>

<h2><?php echo $sidebar_page->post_title; ?></h2>
<div class='text'>
	<?php the_content(); ?>
</div>

<?php } ?>	
</div>
