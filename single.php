<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="inner">
				<header class="post-header">
					<h1 class="post-title">
						<?php the_title(); ?>
					</h1>
				</header>
				<article class="post-article">
					<?php the_content(); ?>
				</article>
				<div class="clear"></div>
			</div>
		</section>
	<?php endwhile; endif; ?>

<?php get_footer(); ?>