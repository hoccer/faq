<!DOCTYPE HTML>
	<?php 
		$iPod = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
		$iPhone = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
		$iPad = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
		$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
		if ($iPod || $iPhone || $iPad) {
			$os = 'ios';
		} elseif ($Android) {
			$os = 'android';
		}
	?>
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"><![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js <?php echo $os; ?>" xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml"> <!--<![endif]-->
	<?php $template_url = get_bloginfo('template_url'); ?>
	<head>
		<title><?php wp_title(' ', true, 'right'); ?></title>

		<meta name="description" content="<?php bloginfo('description'); ?>" />

		<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss2_url'); ?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<link rel='canonical' href='<?php bloginfo('url'); ?>' />

		<link type="text/css" rel="stylesheet" href="<?php echo $template_url; ?>/style.css" media="screen" />
		
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
