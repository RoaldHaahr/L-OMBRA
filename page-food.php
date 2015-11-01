<?php get_header(); ?>

<main class="clearfix" id="food">


		<?php

		$food = new WP_Query('category_name=Food&order=ASC');

		if($food -> have_posts()) {
			while($food -> have_posts()) { ?>
			<article class="food"><?php
				$food -> the_post(); ?>
				<?php the_post_thumbnail(); ?>
				<div class="two-section clearfix">
					<h2><?php the_title(); ?></h2>
					<div class="short-divider divider"></div>
					<?php the_content(); ?>
					<a href="#"><?php echo get_post_meta(get_the_ID(), 'Link', true); ?></a>
				</div>
			</article><?php
			}
		}

		wp_reset_query();
		?>

</main>

<?php get_footer(); ?>