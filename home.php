<?php get_header(); ?>
	
	<?php 
		$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
		
		if ($iPod || $iPhone || $iPad) {
			$os = 'ios';
			echo '<style>.faq.android {display: none;}</style>';
		} elseif ($Android) {
			$os = 'android';
			echo '<style>.faq.ios {display: none;}</style>';
		}
	?>

	<?php if (have_posts()) : ?>
		<div id="faq" class="<?php echo $os; ?>">
			<?php while (have_posts()) : the_post(); ?>
				<section id="faq-<?php the_ID(); ?>" <?php post_class('faq'); ?>>
					<h2 class="faq-title">
						<?php the_title(); ?>
					</h2>
					<article class="faq-content">
						<?php the_content(); ?>
					</article>
					<div class="clear"></div>
				</section>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>
	
<?php get_footer(); ?>