<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sabel-mechanical
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
<?php wp_body_open(); ?>
<div id="page" class="site">
	<?php global $phone,$phone_link; ?>
	<header id="masthead" class="site-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="header-menu-box">
						<nav id="site-navigation" class="main-navigation">
							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span><span></span><span></span></button>
							<div class="header-mob-menu">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>

							</div>
						</nav><!-- #site-navigation -->

					</div>
					<div class="main-logo for-mob">
					<a href="<?php echo home_url(); ?>" title="Sabel Mechanical"><img src="<?php the_field('logo','options'); ?>" alt="Sabel Mechanical" width="315" height="152"></a>

					</div>
					<div class="header-call for-mob">
					<a href="tel:+<?php echo $phone_link; ?>" title="<?php echo $phone; ?>" class="callus">
					<i class="fas fa-phone-alt"></i></a>
				</div>
				</div>
			</div>
		</div>

	</header><!-- #masthead -->
