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
<?php get_template_part( 'loop', 'page' ); ?>

<!-- END .post class -->
</div>

<?php get_footer(); ?>
