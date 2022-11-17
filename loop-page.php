<?php
/**
 * This template displays the page loop.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php the_content( ); ?>

<?php edit_post_link( esc_html__( '(Edit)', 'givingpress-lite' ), '', '' ); ?>

<div class="clear"></div>

<?php endwhile; else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>
