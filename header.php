<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gocreateme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Alex+Brush" rel="stylesheet">
	<script
	  src="https://code.jquery.com/jquery-3.3.1.min.js"
	  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	  crossorigin="anonymous"></script>
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
			<ul class='logo'>
				<li><a href="<?php echo get_home_url(); ?>"><span class="go">Go</span> Create <span class="me">Me</span></a></li>
			</ul>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
			<div class='menu-btn'>
				<div class="menu-bar menu-btn-top"></div>
				<div class="menu-bar menu-btn-middle"></div>
				<div class="menu-bar menu-btn-bottom"></div>
			</div>
			
		</nav><!-- #site-navigation -->
		<?php
			wp_nav_menu( array(
				'theme_location' => 'mobile-menu',
				'menu_id'        => 'mobile-menu',
			) );
			?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
