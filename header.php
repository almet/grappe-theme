<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="flux RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="flux Atom" href="<?php bloginfo('atom_url'); ?>" /> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen, projection">
	<!--[if lte IE 6]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/iestyle.css" type="text/css" media="screen, projection"><![endif]-->
</head>
<body>
<?php get_sidebar(); ?>


<div id="header">
    <div id='title'>
    	<h1><span class='important-text'>GR</span>oupement 	d'<span class='important-text'>A</span>ssociations <span class='important-text'>P</span>orteuses de <span class='important-text'>P</span>rojets en <span class='important-text'>E</span>nvironnement</span></h1>
    <p id='title-description'>
    	<span class='important-text small-size'>Organisateurs de la semaine de</span>
<!--    	<span class='important-text medium-size'>semaine de</span> -->
    	<span class='important-text big-size'>l'Environnement</span>
    </p>
    </div>
</div>
<div id="content">
<div id="menu">
<ul>
		<li><a class='button' href='<?php echo get_option('home'); ?>/qui-sommes-nous'><span><span><span>Le grappe ?</span></span></span></a></li>
		<li><a class='button' href='<?php echo get_option('home'); ?>/les-infos'><span><span><span>News</span></span></span></a></li>   				
<!--
       <li><a class='button' href='<?php echo get_option('home'); ?>/la-semaine-de-lenvironnement-programme'><span><span><span>Programme</span></span></span></a></li>
--> 
		<li><a class='button' href='<?php echo get_option('home'); ?>/galerie'><span><span><span>Galerie</span></span></span></a></li>
		<li><a class='button' href='<?php echo get_option('home'); ?>/politique-partenariale'><span><span><span>Partenaires</span></span></span></a></li>
		<li><a class='button' href='http://forums.reseaugrappe.org'><span><span><span>Forums</span></span></span></a></li>
		<li><a class='button' href='<?php echo get_option('home'); ?>/contact'><span><span><span>Contacts</span></span></span></a></li>
    </ul>
</div>
