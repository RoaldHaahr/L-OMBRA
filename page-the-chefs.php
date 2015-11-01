<?php get_header(); ?>

<main id="the-chefs">
	<?php $the_chefs = new WP_Query( array(
			'category_name' => 'The Chefs',
			'posts_per_page' => 2,
			'order' => 'ASC')); ?>

	<?php if( $the_chefs -> have_posts() ) : ?>
			<?php while ( $the_chefs -> have_posts() ) : $the_chefs -> the_post(); ?>

				<article class="chef clearfix">
					<?php the_post_thumbnail(); ?>
					<div class="two-section">
						<h2><?php the_title(); ?></h2>
						<div class="short-divider divider"></div>
						<?php the_content(); ?>
					</div>
				</article>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

</main>

<?php get_footer(); ?>