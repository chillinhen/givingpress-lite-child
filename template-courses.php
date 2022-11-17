<?php
/**
 * Template Name: Course Provider
 * This template displays the default page content.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

get_header('courses'); ?>

<!-- BEGIN .post class -->
<div <?php post_class(); ?> id="page-<?php the_ID(); ?>">

<!-- BEGIN .row -->
<div class="row">

<!-- BEGIN .content -->
<div class="content">

		<!-- BEGIN .postarea -->
		<div class="postarea">

			<?php get_template_part( 'loop', 'courses' ); ?>

		<!-- END .postarea -->
		</div>


<!-- END .content -->
</div>

<!-- END .row -->
</div>

<!-- END .post class -->
</div>

<?php get_footer(); ?>
