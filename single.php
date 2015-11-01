<?php get_header(); ?>

<main class="single">

	<?php if( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="clearfix">
				<?php the_post_thumbnail(); ?>
				<div>
                                    <h2 class="post-title"><?php the_title(); ?></h2>
				    <?php the_content(); ?>
                               </div>
			</article>
		<?php endwhile; ?>
	<?php endif; ?>

</main>

<?php get_footer(); ?>