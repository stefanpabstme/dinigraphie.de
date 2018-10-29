<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<?php wp_head(); ?>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script
				  src="https://code.jquery.com/jquery-3.3.1.min.js"
				  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
				  crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<header id="header" role="banner">
			<div class="container">
				<section>
					<span><img id="site-logo" src="<?php echo get_template_directory_uri() ?>/Dinigraphie_Logo_transparent_291018.png" /></span>
				</section>
				<nav id="menu" role="navigation">
					<span id="toggleNav" onclick="toggleNav()">
						Menu
						<span>
							<img id="toggleNavButton" src="<?php echo get_template_directory_uri() ?>/Blende_transparent_schwarz_291018.png" />
						</span>
					</span>
					<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
				</nav>
				<section id="branding">
					<h1 class="entry-title"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
					<div id="entry-image">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home">
							<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'header-intro-image', array( 'class' => 'header-img' ) ); } ?>
						</a>
					</div>
				</section>
			</div>
		</header>
		<div id="container">
