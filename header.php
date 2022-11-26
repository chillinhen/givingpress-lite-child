<?php
/**
 * The Header for our theme.
 * Displays all of the <head> section and everything up till <div id="wrap">
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<!-- Mobile View -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php echo esc_url( bloginfo( 'pingback_url' ) ); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- BEGIN #wrapper -->
<div id="wrapper">

<!-- BEGIN #top-info -->
<div id="top-info">

	<?php if ( get_theme_mod( 'givingpress_lite_contact_email', 'info@givingpress.com' ) || get_theme_mod( 'givingpress_lite_contact_phone', '808.123.4567' ) || get_theme_mod( 'givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761' ) ) { ?>

	<!-- BEGIN #contact-info -->
	<div id="contact-info">

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN .content -->
			<div class="content">

				<div class="align-left">

				<?php if ( get_theme_mod( 'givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761' ) ) { ?>
					<span class="contact-address"><i class="fa fa-map-marker"></i> <?php echo esc_html( get_theme_mod( 'givingpress_lite_contact_address', '231 Front Street, Lahaina, HI 96761' ) ); ?></span>
				<?php } ?>

				<?php if ( get_theme_mod( 'givingpress_lite_contact_email', 'info@givingpress.com' ) ) { ?>
					<span class="contact-email text-right"><i class="fa fa-envelope"></i> <a class="link-email" href="mailto:<?php echo esc_html( get_theme_mod( 'givingpress_lite_contact_email', 'info@givingpress.com' ) ); ?>"><?php echo esc_html( get_theme_mod( 'givingpress_lite_contact_email', 'info@givingpress.com' ) ); ?></a></span>
				<?php } ?>

				<?php if ( get_theme_mod( 'givingpress_lite_contact_phone', '808.123.4567' ) ) { ?>
					<span class="contact-phone text-right"><i class="fa fa-phone"></i> <?php echo esc_html( get_theme_mod( 'givingpress_lite_contact_phone', '808.123.4567' ) ); ?></span>
				<?php } ?>

				</div>

				<?php if ( '1' == get_theme_mod( 'givingpress_lite_display_header_search', '1' ) ) { ?>

				<div class="align-right">

					<div class="header-search"><i class="fa fa-search"></i> <?php get_template_part( 'searchform' ); ?></div>

				</div>

				<?php } ?>

			<!-- END .content -->
			</div>

		<!-- END .row -->
		</div>

	<!-- END #contact-info -->
	</div>

	<?php } ?>

	<!-- BEGIN #top-nav -->
	<div id="top-nav">

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN .content -->
			<div class="content no-bg container">
                            <div class="logo">
                                <a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('title'); ?>">
                                    <?php echo bloginfo('title'); ?> - 
                                    <?php echo bloginfo('description'); ?>
                                </a>
                            </div>

			<?php if ( has_nav_menu( 'main-menu' ) ) { ?>

				<!-- BEGIN #navigation -->
				<nav id="navigation" class="navigation-main">

					<button class="menu-toggle" aria-label="menu"><i class="fa fa-bars"></i></button>

					<?php wp_nav_menu( array(
						'theme_location' 		=> 'main-menu',
						'title_li' 					=> '',
						'depth' 						=> 4,
						'fallback_cb'     	=> 'wp_page_menu',
						'container_class' 	=> '',
						'menu_class'      	=> 'menu',
						)
					); ?>

				<!-- END #navigation -->
				</nav>

			<?php } elseif ( current_user_can( 'publish_posts' ) ) { ?>

				<!-- BEGIN #navigation -->
				<nav id="navigation" class="navigation-main vertical-center">

					<p class="instruction"><?php printf( wp_kses( __( 'Create a Custom Navigation Menu <a href="%1$s">here</a>.', 'givingpress-lite' ), array( 'a' => array( 'href' => array() ) ) ), esc_url( admin_url( 'nav-menus.php' ) ) ); ?></p>

				<!-- END #navigation -->
				</nav>

			<?php } ?>

			<!-- END .content -->
			</div>

		<!-- END .row -->
		</div>

	<!-- END #top-nav -->
	</div>

<!-- END #top-info -->
</div>

<?php $header_image = get_header_image(); ?>

<?php if ( is_home() || is_page_template( 'template-home.php' ) || is_single() || is_404() || is_attachment() || is_archive() || is_search() || is_page() && ! has_post_thumbnail() ) { ?>
	<?php if ( 'blank' != get_theme_mod( 'header_textcolor' ) || ! empty( $header_image ) ) { ?>


<?php } ?>
<?php } ?>
