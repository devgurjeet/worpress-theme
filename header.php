<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aw_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'aw-theme' ); ?></a>

	<header id="header">
		<div id="head" class="parallax" parallax-speed="1">
			<h1 id="logo" class="text-center">
				<img class="img-circle" src="assets/images/guy.jpg" alt="">
				<?php
				if ( is_front_page() && is_home() ) : ?>
					<span class="site-title title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<?php else : ?>
					<span class="site-title title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<?php
				endif;

				$description = get_bloginfo( 'description', 'display' );
				if ( $description || is_customize_preview() ) : ?>
					<span class="site-description tagline"><?php echo $description; /* WPCS: xss ok. */ ?></span>
				<?php
				endif; ?>
			</h1>
		</div>
		
		<nav id="site-navigation" class="main-navigation navbar navbar-default navbar-sticky" role="navigation">
			
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				</div>

				<!-- <div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li><a href="index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sidebar-left.html">Left Sidebar</a></li>
								<li><a href="sidebar-right.html">Right Sidebar</a></li>
								<li><a href="single.html">Blog Post</a></li>
							</ul>
						</li>
						<li class="active"><a href="blog.html">Blog</a></li>
					</ul>					
				</div> --><!--/.nav-collapse -->
				<?php 
					wp_nav_menu( array( 'theme_location' => 'primary', 
						'menu_id' => 'primary-menu',
						'menu_class' => 'navbar-collapse collapse'		
					) ); 
			 	?>
			</div>
		</nav>
	</header>

	<div id="content" class="site-content">
	
