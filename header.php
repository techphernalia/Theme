<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<!-- TODO -->
	<link rel='stylesheet' id='main-css'  href='<?php echo get_template_directory_uri(); ?>/style.css?ver=3.6' type='text/css' media='all' />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="taskbar" class="taskbar glossy">
		<div id="taskbar-items" class="taskbar-items">
			<div id="start-button-div" class="taskbar-item button pointer btn-green shadow glossy">Start</div>
			<div id="taskbar-buttons" class="taskbar-item"></div>
			<div class="separator taskbar-item" style="top:2px;left:100px;"></div>
			<div class="applications taskbar-item">
				<div class="application taskbar-item"></div>
				<div class="application taskbar-item"></div>
			</div>
			<div class="separator taskbar-item" style="top:2px;left:1000px;"></div>
			<div class="time" id="time">
			</div>
		</div>
	</div>