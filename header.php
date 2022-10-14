<!DOCTYPE html>
<html lang="en-us">
	<head>
		<?php wp_head(); ?>
	</head>
	<body ontouchstart <?php body_class(); ?>>
		<a class="skip-navigation bg-complementary text-inverse box-shadow-soft" href="#content">Skip to main content</a>
		<div class = "top_header"></div>
		<?php
		$locations = get_nav_menu_locations();
        $menu_id   = $locations[ 'header-menu' ] ;
        $menu = wp_get_nav_menu_object($menu_id);
		$header_img = get_field( "header_image", $menu );
		$header_bg_img = get_field("header_background_image", $menu);
		?>

		<?php do_action( 'wp_body_open' ); ?>

		<?php if ( $ucfwp_header_markup = ucfwp_get_header_markup() ) : ?>
		<div class = "hero" style = "background-image: url('<?php echo $header_bg_img['url']; ?>')">
			<div class = "container">
				<img class = "top_header_img" src = "<?php echo $header_img['url']; ?>">
				<header class="site-header" aria-label="Site header">
					<?php echo $ucfwp_header_markup; ?>
				</header>
			</div>
		</div>
		<?php endif; ?>

		<main class="site-main">
			<?php echo ucfwp_get_subnav_markup(); ?>
			<div class="site-content" id="content" tabindex="-1">
