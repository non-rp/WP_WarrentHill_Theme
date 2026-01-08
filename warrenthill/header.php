<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WarrentHill
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>Warrent Hill</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="format-detection" content="telephone=no">
	<!-- <style>body{opacity: 0;}</style> -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- <meta name="robots" content="noindex, nofollow"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'warrenthill' ); ?></a>
	<div class="wrapper">
		<header class="header">
			<div class="header__container">
				<a href="" class="header__logo _anim-items _anim-no-hide">
					<img src="<?php the_field('logo', 'options'); ?>" alt=""></a>
				<div class="header__menu menu">
					<button type="button" class="menu__icon icon-menu"><span></span></button>
					<?php 
					$args = [
						'theme_location'  => 'main',
						'container'       => 'nav',
						'container_class' => 'menu__body',
						'menu_class'      => 'menu',
						'echo'            => true,
						'items_wrap'      => '<ul id="%1$s" class="%2$s menu__list">%3$s</ul>',
						'depth'           => 0,
						'link_class'   => 'menu__link',
						'walker'          => '',
					];
					
					wp_nav_menu($args); ?>
				</div>
			</div>
		</header>
