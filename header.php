<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php wp_title(); ?> <?php bloginfo('name'); ?></title>
	<link rel="alternate" type="application/rss+xml" title="flux RSS" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="flux Atom" href="<?php bloginfo('atom_url'); ?>" /> 
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen, projection">
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-10959673-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</head>
<body>
<?php 
if (!defined('NO_SIDEBAR')){
    get_sidebar(); 
}

?>


<div id="header">
	<div id='background'>
		<div id='title'>
			<a href='<?php echo get_option('home'); ?>'><h1><span class='important-text'>GR</span>oupement 	d'<span class='important-text'>A</span>ssociations <span class='important-text'>P</span>orteuses de <span class='important-text'>P</span>rojets en <span class='important-text'>E</span>nvironnement</span></h1>
		<div id='title-description'>
<?php 
if (function_exists('stray_random_quote')){
    echo "<span class='important-text small-size'>";
    stray_random_quote('slogan',false,'',false,1,0,'quoteID','ASC', false, '');
    echo "</span>";
} else { 
?>
<span class='important-text small-size'>Organisateurs de la semaine de</span>
<span class='important-text big-size'>l'Environnement</span>
<?php } ?>
		</div>
		</a>
		</div>
	</div>
</div>
<div id="content">
<div id="menu">
<ul>
		<li><a class='button' href='<?php echo get_option('home'); ?>/qui-sommes-nous'><span><span><span>Le grappe ?</span></span></span></a></li>		

&nbsp;      
       
       <li><a class='button' href='<?php echo get_option('home'); ?>/outils'><span><span><span>Boîte à outils</span></span></span></a></li>
       
 
		<li><a class='button' href='<?php echo get_option('home'); ?>/galerie'><span><span><span>Galerie</span></span></span></a></li>
		<li><a class='button' href='<?php echo get_option('home'); ?>/politique-partenariale'><span><span><span>Partenaires</span></span></span></a></li>
         <li><a class='button' href='<?php echo get_option('home'); ?>/liens'><span><span><span>Liens</span></span></span></a></li>
       
		<li><a class='button' href='http://forums.reseaugrappe.org'><span><span><span>Forums</span></span></span></a></li>
		<li><a class='button' href='<?php echo get_option('home'); ?>/contact'><span><span><span>Contacts</span></span></span></a></li>
    </ul>
</div>
<!--
<div id="menu2">
<ul>
		<li><a class='button' href="<?php echo get_option('home'); ?>/consommation"><span><span><span>Consommation</span></span></span></a></li>
		<li><a class='button' href="<?php echo get_option('home'); ?>/alimentation"><span><span><span>Alimentation</span></span></span></a></li>
    </ul>
</div>
-->
