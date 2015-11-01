<?php get_header(); ?>

<main class="clearfix" id="contact">
	<section class="restaurant-information">
		<?php $restaurant_info = new WP_Query('category_name=Contact Information&postsperpage=1'); ?>
		<?php if( $restaurant_info -> have_posts() ) : ?>
			<?php while( $restaurant_info -> have_posts() ) : $restaurant_info -> the_post(); ?>

				<article>
					<h4><?php the_title(); ?></h4>
					<div class="short-divider"></div>
					<?php the_content(); ?>
				</article>

			<?php endwhile; ?>
		<?php endif; ?>

		<?php $opening_hours = new WP_Query('category_name=Opening Hours&postsperpage=1'); ?>
		<?php if( $opening_hours -> have_posts() ) : ?>
			<?php while( $opening_hours -> have_posts() ) : $opening_hours -> the_post(); ?>

				<article class="opening-hours">
					<h4><?php the_title(); ?></h4>
					<div class="short-divider"></div>
					<?php the_content(); ?>
				</article>

			<?php endwhile; ?>
		<?php endif; ?>
	</section>

	<div class="google-maps-embed-api">
		<iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=Mejlgade%2035B&key=AIzaSyDmbkvFlBM_kVlZ3O0mBaqx_7YEx9iBDAw"></iframe>
	</div>

</main>

<?php get_footer(); ?>