<?php get_header(); ?>

<?php 
	$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
	$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
	$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
	$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
	if($iPod || $iPhone || $iPad || $Android) {
		$mobile = true;
	}
?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="inner">
				<?php if(!$mobile) : ?>
				<header class="post-header">
					<a class="post-back" href="<?php echo icl_get_home_url() ?>"><i class="fa fa-angle-left"></i> <?php _e('Index','hoccer'); ?></a>
					<h1 class="post-title">
						<?php the_title(); ?>
					</h1>
				</header>
				<?php endif; ?>
				<article class="post-article">
					<?php the_content(); ?>
				</article>
				<div class="clear"></div>
			</div>
		</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>