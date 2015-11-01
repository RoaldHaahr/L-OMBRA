<?php get_header(); ?>
<main id="about">
	<?php $our_story = new WP_Query( array(
			'category_name' => 'Our Story',
			'posts_per_page' => 1
		)); ?>

	<?php if( $our_story -> have_posts() ) : ?>
			<?php while ( $our_story -> have_posts() ) : $our_story -> the_post(); ?>

				<article class="our-story-page clearfix">
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

	<?php $lombra = new WP_Query( array(
			'category_name' => 'Lombra',
			'posts_per_page' => 1
		)); ?>

	<?php if( $lombra -> have_posts() ) : ?>
				<?php while ( $lombra -> have_posts() ) : $lombra -> the_post(); ?>

					<article class="lombra clearfix">
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