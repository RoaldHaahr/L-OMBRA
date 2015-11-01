<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
                <meta name="keywords" content="Food, Cicchetti, Social Dining, Italian Food, Food Sharing, A la carte, Italian Inspired Tapas, Tapas, Wine, Austria, Italy, White Wine, Red Wine, Events, Speed Dating, Wine Tasting, Music, Concert, Aarhus">
		<title><?php wp_title(); ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
		<?php wp_head(); ?>
                <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	</head>
	
<body <?php body_class(); ?>>

	<div id="page-overlay">
		<aside class="book-table">
			<img src="<?php bloginfo('template_directory'); ?>/images/close2.png" rel="close" />
			<h2>Book Table</h2>

			<form>
				<label for="first-name">First Name:</label>
				<input type="text" id="first-name" name="first-name" placeholder="Please enter your first name" />
				</br />
				<label for="last-name">Last Name:</label>
				<input type="text" id="last-name" name="last-name" placeholder="Please enter your last name" />
				</br />
				<label for="e-mail">E-mail:</label>
				<input type="e-mail" id="e-mail" name="e-mail" placeholder="Please enter your e-mail address" />
				</br />
				<label for="date time">Date and Time:</label>
				<input type="date" id="date" />
				<input type="time" id="time" />
				<br />
				<label for="last-name">Number of Guests:</label>
				<input type="number" id="number-of-guests" name="number-of-guests" />
				<input type="submit" value="Book!" name="reservation-button" />
			</form>
		</aside>
	</div>

	<nav class="mobile-menu">
		<img class="mobile-menu-close-button" src="<?php bloginfo('template_directory'); ?>/images/close2.png" rel="close-button" />
		<?php wp_nav_menu('theme_location=primary'); ?>
	</nav>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">

			<div class="banner">
				<a href="<?php echo home_url(); ?>"><img id="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" rel="" /></a>
			</div>
			
			<nav class="site-nav clearfix">
				<a class="mobile-menu-trigger clearfix" href="#menu"><img class="menu-icon" src="<?php bloginfo('template_directory'); ?>/images/menu-icon.png" rel="menu" /></a>

				<?php
				
				$args = array(
					'theme_location' => 'primary'
				);
				
				?>
				
				<?php wp_nav_menu( $args ); ?>
			</nav>
			
		</header><!-- /site-header -->