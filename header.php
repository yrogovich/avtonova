<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package electromobiles
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<navbar class="navbar">		
		<div class="navbar-top">
			<div class="container">
				<a href="<?php echo get_home_url(); ?>" class="logo">
					<img src="<?php bloginfo('template_url') ?>/src/img/logo.png" alt="автонова">
				</a>

				<div class="right-side">
					<a href="#" class="btn btn-flat">Записаться на тест драйв</a>
					<a href="#" class="btn btn-inverse">Заказать обратный звонок</a>
					<a href="tel:+375291569521" class="phone">+375 (29) 156-95-21</a>
				</div>

				<svg class="ham hamRotate" viewBox="0 0 100 100" width="60" onclick="this.classList.toggle('active')">
					<path
							class="line top"
							d="m 70,33 h -40 c 0,0 -6,1.368796 -6,8.5 0,7.131204 6,8.5013 6,8.5013 l 20,-0.0013" />
					<path
							class="line middle"
							d="m 70,50 h -40" />
					<path
							class="line bottom"
							d="m 69.575405,67.073826 h -40 c -5.592752,0 -6.873604,-9.348582 1.371031,-9.348582 8.244634,0 19.053564,21.797129 19.053564,12.274756 l 0,-40" />
				</svg>
			</div>
			<!-- ./container -->
		</div>
		<!-- ./navbar-top -->
		
		<div class="navbar-bottom">
			<div class="container">
				<?php
				wp_nav_menu( [
					'menu'            => 'primary-menu', 
					'container'       => false, 
					'menu_class'      => 'menu', 
				] );
				?>
				<a href="tel:+375291569521" class="phone">+375 (29) 156-95-21</a>
			</div>
			<!-- /.container -->
		</div>
		<!-- /.navbar-bottom -->
	</navbar>

	<div id="content" class="site-content">
