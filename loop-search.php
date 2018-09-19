<?php
/**
 * This template displays the post loop.
 *
 * @package GivingPress Lite
 * @since GivingPress Lite 1.0
 */

?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="post-date">
	<i class="fa fa-clock-o"></i> <?php the_time('F j, Y'); ?>
</div>

<h1 class="headline"><?php the_title(); ?></h1>

<!-- BEGIN .article -->
<div class="article">

	<?php the_excerpt(); ?>

<!-- END .article -->
</div>


<?php edit_post_link( esc_html__( '(Edit)', 'givingpress-lite' ), '', '' ); ?>


<!-- BEGIN .post-navigation -->
<div class="post-navigation">
	<div class="previous-post"><?php previous_post_link( '&larr; %link' ); ?></div>
	<div class="next-post"><?php next_post_link( '%link &rarr;' ); ?></div>
<!-- END .post-navigation -->
</div>

<div class="clear"></div>

<?php endwhile; else : ?>

	<?php get_template_part( 'content/content', 'none' ); ?>

<?php endif; ?>
