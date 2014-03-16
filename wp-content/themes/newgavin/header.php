<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php include('includes/seo.php'); ?>
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>

</head>

<body>
<div id="page">
	<div id="header">
		<div class="header-left">
		
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
		<img src="<?php bloginfo('stylesheet_directory'); ?>/images/blogname.png" alt="三子博客">
		</a>
		
		</div>
		
			<div class="topnav">	
			<?php if(function_exists('wp_nav_menu')) { wp_nav_menu(array('theme_location'=>'top-menu','menu_id'=>'nav','container'=>'ul'));}?>
			</div>
			<div class="topcom">	
			<li class="topcomred"><a href="<?php bloginfo('rss2_url'); ?>" target="_blank" rel="nofollow" title="订阅三子">订阅RSS</a></li>
			<li class="topcomblue"> <a href="http://list.qq.com/cgi-bin/qf_invite?id=9b50d93d8ac6ec2cd45aed11095fd1e3591a6404839700a6" target="_blank" rel="nofollow" title="订阅三子博客到邮箱">订阅到邮箱</a></li>
			</div>
		
		
		<div class="nav">		
		<?php if(function_exists('wp_nav_menu')) { wp_nav_menu(array('theme_location'=>'primary','menu_id'=>'nav','container'=>'ul'));}?>
			<div id="search">		
				<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
				<input type="text" x-webkit-speech onblur="if (this.value == '') {this.value = '搜搜更健康……';}" onfocus="if (this.value == '搜搜更健康……') {this.value = '';}" class="s" name="s" value="搜搜更健康……">
				<button type="submit"><?php _e("Search"); ?></button>
				</form>
			</div>
		</div> <div class="clr"></div> 
	</div>