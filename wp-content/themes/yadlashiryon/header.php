<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title><?php wp_title( '|', true, 'right' );?></title>
	<?php wp_head();?>
	<!-- HTML5 Shim for IE -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<?php get_styles(); ?>
</head>

<body <?php body_class();?> role="application">

<div id="header" class="clearfix" role="banner">
	<div class="<?php the_container(); ?>">
		<div class="row">
			<div class="col-sm-2">
				<?php the_logo(); ?>
			</div>
			<div class="col-sm-10">
				<?php cnr_social_menu('social'); ?>
				<?php bootstrap_menu('main'); ?>
			</div>
		</div>



    </div>
</div>
<div id="main">