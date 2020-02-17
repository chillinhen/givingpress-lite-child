<?php
/**
 * This template displays the default page content.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

get_header(); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

	<!-- BEGIN .row -->
	<div class="row">

		<!-- BEGIN .content -->
		<div class="content">
		<?php #if ( is_active_sidebar( 'sidebar-1' ) ||  have_rows('ind-sidebar') ) { ?>
			<?php if ( have_rows('ind-sidebar-de') ) { ?>

			<!-- BEGIN .eleven columns -->
			<div class="eleven columns">

				<!-- BEGIN .postarea -->
				<div class="postarea">

					<?php get_template_part( 'loop', 'page' ); ?>

				<!-- END .postarea -->
				</div>

			<!-- END .eleven columns -->
			</div>

			<!-- BEGIN .five columns -->
			<?php
			?>
			<div class="five columns">
				<?php
				get_sidebar();
				get_template_part('sidebar','individual');
				?>


			<!-- END .five columns -->
			</div>

		<?php } else { ?>

			<!-- BEGIN .sixteen columns -->
			<div class="sixteen columns">

				<!-- BEGIN .postarea full -->
				<div class="postarea full">
				<div id="breadcrumb"><?php breadcrumb_trail(); ?></div>

					<?php get_template_part( 'loop', 'page' ); ?>

				<!-- END .postarea full -->
				</div>

			<!-- END .sixteen columns -->
			</div>

		<?php } ?>

		<!-- END .content -->
		</div>

	<!-- END .row -->
	</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>
