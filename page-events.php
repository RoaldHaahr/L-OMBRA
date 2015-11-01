<?php get_header(); ?>

<main>

	<?php 

	/*
	* Creating a new query to loop through, displaying posts with the category 'Event'.
	* The custom field 'Event Date' holds the date for event to order the events, so
	* the closest upcoming event is the first one that is looped out.
	*/
	$events = new WP_Query( array(
		'category_name' => 'Event',
		'posts_per_page' => 10,
		'meta_key' => 'Event Date',
		'orderby' => 'meta_value_num',
		'order' => 'ASC'
	)); ?>

	<?php if( $events -> have_posts() ) : ?>
		<?php while( $events -> have_posts() ) : $events -> the_post(); ?>


			<?php // Checks whether the event has expired. If so, the post containing the event doesn't show on the page
			if( time() < strtotime(get_post_meta(get_the_ID(), 'Event Date', true)) ) : ?>

				<article class="event clearfix post" <?php post_class(); ?>>
					<?php the_post_thumbnail(); ?>
					<div class="text-content">
						<time class="event-date" datetime="<?php echo date('Y-m-d', strtotime(get_post_meta(get_the_ID(), 'Event Date', true))); ?>"><?php echo date('j M, Y', strtotime(get_post_meta(get_the_ID(), 'Event Date', true))); ?></time>
						<h2 class="post-title"><?php the_title(); ?></h2>
						<div class="short-divider divider"></div>
						<?php echo get_the_event_excerpt(); ?>
					</div>
				</article>

			<?php endif; ?>

		<?php endwhile; ?>
	<?php endif; ?>

	<?php wp_reset_query(); ?>

</main>

<?php get_footer(); ?>