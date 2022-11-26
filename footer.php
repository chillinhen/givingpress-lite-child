<?php
/**
 * The footer for our theme.
 * This template is used to generate the footer for the theme.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

?>
<!-- END #wrapper -->
</div>
<!-- BEGIN .footer -->
<div class="footer">

	<!-- BEGIN .content -->
	<div class="content no-bg">

		<?php if ( is_active_sidebar( 'footer' ) ) { ?>

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN .footer-widgets -->
			<div class="footer-widgets">

				<?php dynamic_sidebar( 'footer' ); ?>

			<!-- END .footer-widgets -->
			</div>

		<!-- END .row -->
		</div>

		<?php } ?>

		<!-- BEGIN .row -->
		<div class="row">

			<!-- BEGIN .footer-information -->
			<div class="footer-information">

				

				<?php if ( has_nav_menu( 'footer-menu' ) ) { ?>

				<?php wp_nav_menu( array(
						'theme_location' => 'footer-menu',
						'title_li' => '',
						'depth' => 1,
						'container_class' => 'footer-menu',
						'menu_class'      => 'footer-links',
						)
					); ?>

				<?php } ?>
                            <span class="copyright">
                                <?php esc_html_e( 'Copyright', 'givingpress-lite' ); ?> &copy; <?php echo date( esc_html__( 'Y', 'givingpress-lite' ) ); ?> &middot; <?php esc_html_e( 'All Rights Reserved', 'givingpress-lite' ); ?> &middot; <?php bloginfo( 'name' ); ?>
                            </span>

			<!-- END .footer-information -->
			</div>

		<!-- END .row -->
		</div>

	<!-- END .content -->
	</div>

<!-- END .footer -->
</div>
<div class="top-fixed">
    <?php
    if (is_active_sidebar('language')) :
        dynamic_sidebar('language');
    endif;
    ?>
</div>

<?php wp_footer(); ?>

</body>
</html>
