<?php get_header(); ?>

	<section class="page type-page status-publish hentry">
		<div class="inner">
			<header class="post-header">
				<h1 class="post-title">
					<?php _e('Index','hoccer') ?>
				</h1>
			</header>
			<article class="post-article">
					<ul id="index-list"><?php wp_list_pages('title_li='); ?></ul>
			</article>
			<div class="clear"></div>
		</div>
	</section>

<?php get_footer(); ?>