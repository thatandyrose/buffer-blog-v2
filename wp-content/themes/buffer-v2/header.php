<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Buffer
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<title>BTMetrics <?php wp_title( '|', true, 'left' ); ?></title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href="//brick.a.ssl.fastly.net/Merriweather:400,900,400i,900i/Open+Sans:300,400,700,300i,400i,700i" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">

	<!-- Favicon and Feed -->
	<link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
	<link rel="alternate" type="application/rss+xml" title="BTMetrics <?php bloginfo( 'name' ); ?> Feed" href="<?php echo site_url(); ?>/feed/">

	<!--  iPhone Web App Home Screen Icon -->
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-icon-114x114.png" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/devices/apple-icon.png" />

	<?php wp_head(); ?>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-59940062-2', 'auto');
		ga('send', 'pageview');
	</script>
</head>

<body <?php body_class(); ?>>

	<nav id="nav-wrap" role="navigation">
		<ul class="top-nav">
		</ul>
	</nav><!-- #navigation -->

<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home <?php bloginfo( 'name' ); ?>" class="site-title">
				<?php bloginfo( 'name' ); ?>
			</a>
			<div class="tagline"><?php bloginfo( 'description' ); ?></div>
		</div>

		<div class="header-sign-up">
			Get actionable insights into your most important SaaS metrics. <a href="http://www.btmetrics.com/?utm_source=blog&utm_medium=10K-Journey&utm_campaign=top-blog-link">Visit BTMetrics.com to learn more.</a>
		</div>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
