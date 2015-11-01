<?php

get_header();

?>

<main class="clearfix" id="home">

	<?php

		$our_story = new WP_Query('category_name=Our Story');

		if( $our_story -> have_posts() ) :
			while ( $our_story -> have_posts() ) : $our_story -> the_post(); ?>

				<article class="our-story">
					<h2><?php echo get_post_meta(get_the_ID(), 'Title', true); ?></h2>
                                        <div class="short-divider"></div>
					<?php the_excerpt(); ?>
				</article>

			<?php endwhile;
		endif; ?>

		<?php wp_reset_query();

	?>

	<?php

		$wine_preview = new WP_Query('category_name=Wine Preview');

		if( $wine_preview -> have_posts() ) :
			while ( $wine_preview -> have_posts() ) : $wine_preview -> the_post(); ?>

				<article class="preview first-row">
					<a class="preview-image-link" href="<?php bloginfo('template_directory'); ?>/wines"><?php the_post_thumbnail('frontpage-preview'); ?></a>
					<h2><?php the_title(); ?></h2>
					<div class="short-divider"></div>
					<?php the_content(); ?>
					<a class="preview-link" href="<?php bloginfo('template_directory'); ?>/wines">OUR WINES</a>
				</article>

			<?php endwhile;
		endif; ?>

		<?php wp_reset_query();

	?>

	<?php

		$food_preview = new WP_Query('category_name=Food Preview');

		if( $food_preview -> have_posts() ) :
			while ( $food_preview -> have_posts() ) : $food_preview -> the_post(); ?>

				<article class="preview first-row">					
					<a class="preview-image-link" href="<?php bloginfo('template_directory'); ?>/food"><?php the_post_thumbnail('frontpage-preview'); ?></a>
					<h2><?php the_title(); ?></h2>
					<div class="short-divider"></div>
					<?php the_content(); ?>
					<a class="preview-link" href="<?php bloginfo('template_directory'); ?>/food">FOOD CONCEPT</a>
				</article>

			<?php endwhile;
		endif; ?>

		<?php wp_reset_query();

	?>

	<?php

		$event_preview = new WP_Query( array(
			'category_name' => 'Event',
			'posts_per_page' => 10,
			'meta_key' => 'Event Date',
			'orderby' => 'meta_value_num',
			'order' => 'ASC') );

		$count = 0;

		if( $event_preview -> have_posts() ) :
			while ( $event_preview -> have_posts() ) : $event_preview -> the_post(); ?>

				<?php // Checks whether the event has expired. If so, the post containing the event doesn't show on the page
				if( time() < strtotime(get_post_meta(get_the_ID(), 'Event Date', true)) && $count != 1 ) : ?>

					<article class="preview first-row">
						<a class="preview-image-link" href="<?php bloginfo('template_directory'); ?>/events"><?php the_post_thumbnail('frontpage-preview'); ?></a>
						<h2><?php the_title(); ?></h2>
						<div class="short-divider"></div>
						<?php echo get_the_frontpage_excerpt(); ?>
						<a class="preview-link" href="<?php bloginfo('template_directory'); ?>/events">CALENDAR</a>
					</article>

					<?php $count = 1; ?>

				<?php endif; ?>

			<?php endwhile;
		endif; ?>

		<?php wp_reset_query();

	?>

	<?php

		$news = new WP_Query('category_name=News&posts_per_page=1');

		if( $news -> have_posts() ) :
			while ( $news -> have_posts() ) : $news -> the_post(); ?>

				<article class="news clearfix">
					<a class="preview-image-link" href="<?php bloginfo('template_directory'); ?>/news"><?php the_post_thumbnail(); ?></a>
					<div class="text-content">
						<h2><?php the_title(); ?></h2>
						<div class="short-divider"></div>
						<?php the_excerpt(); ?>
						<a href="<?php bloginfo('template_directory'); ?>/news">READ MORE</a>
					</div>
				</article>

			<?php endwhile;
		endif; ?>

		<?php wp_reset_query();

	?>

</main>


<?php get_footer();

?>