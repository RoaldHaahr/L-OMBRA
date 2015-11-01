<?php get_header(); ?>

<div class="wine-container">

	<div class="long-divider"></div>

	<nav class="wine-links clearfix">
		<ul>
			<li><a class="trigger current-item" href="#all-wine">All</a>
			<li><a class="trigger" href="#red-wine">Red</a></li>
			<li><a class="trigger" href="#white-wine">White</a></li>
		</ul>
	</nav>

	<div class="long-divider"></div>

	<div class="wines clearfix" id="all-wine">

		<?php

		$wine = new WP_Query('category_name=Wine');

		if($wine -> have_posts()) : ?>
			<?php while($wine -> have_posts()) : $wine -> the_post(); ?>
				<article class="wine">
					<h2><?php the_title(); ?></h2>
					<?php the_post_thumbnail('wine-image'); ?>
					<a class="post-link" href="<?php the_permalink(); ?>">Read More</a>
				</article>
			<?php endwhile; ?>
		<?php endif; ?>
		
		<?php wp_reset_query(); ?>

	</div>

	<div class="wines clearfix" id="red-wine" style="display: none;">
		

		<?php

		$wine = new WP_Query('category_name=Red Wine');

		if($wine -> have_posts()) {
			while($wine -> have_posts()) { ?>
			<article class="wine"><?php
				$wine -> the_post();
				?><h2><?php the_title(); ?></h2><?php
				the_post_thumbnail(); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</article><?php
			}
		}

		wp_reset_query();
		?>

	</div>

	<div class="wines clearfix" id="white-wine" style="display: none;">
		

		<?php

		$wine = new WP_Query('category_name=White Wine');

		if($wine -> have_posts()) {
			while($wine -> have_posts()) { ?>
			<article class="wine">
				<?php $wine -> the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_post_thumbnail('wine-image'); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</article><?php
			}
		}

		wp_reset_query();
		?>

	</div>

	<div class="wines clearfix" id="rose" style="display: none;">
		<h2>Rosé</h2>

		<?php

		$wine = new WP_Query('category_name=Rosé');

		if($wine -> have_posts()) {
			while($wine -> have_posts()) { ?>
			<article class="wine"><?php
				$wine -> the_post();
				?><h2><?php the_title(); ?></h2><?php
				the_content(); ?>
				<a href="<?php the_permalink(); ?>">Read More</a>
			</article><?php
			}
		}

		wp_reset_query();
		?>

	</div>

	<script type="text/javascript">
		$('.trigger').click(function(e) {
			e.preventDefault();
			var category = $(this).attr("href");

			$('.trigger').removeClass('current-item');
			$(this).addClass('current-item');

			$('.wines').fadeOut(300).delay(200);
			$(category).fadeIn(500);
		});

	</script>

</div>

<?php get_footer(); ?>