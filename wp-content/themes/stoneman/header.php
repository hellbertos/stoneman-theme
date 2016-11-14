<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=9,chrome=1" />
	<meta charset="UTF-8">
	<title><?php if (is_home()) {
	echo bloginfo('name');
} elseif (is_category()) {
	echo __('Category &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right');
	echo bloginfo('name');
} elseif (is_tag()) {
	echo __('Tag &raquo; ', 'blank'); wp_title('&laquo; @ ', TRUE, 'right');
	echo bloginfo('name');
} elseif (is_search()) {
	echo __('Search results &raquo; ', 'blank');
	echo the_search_query();
	echo '&laquo; @ ';
	echo bloginfo('name');
} elseif (is_404()) {
	echo '404 '; wp_title(' @ ', TRUE, 'right');
	echo bloginfo('name');
} else {
	echo wp_title(' @ ', TRUE, 'right');
	echo bloginfo('name');
} ?></title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" type="text/css" media="screen" />
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head();?>
</head>



<body>

	<header></header>

		<div id="container">