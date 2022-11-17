<?php if ( isset( $attributes['link-anbieter'] ) ) : ?>
    <a href="<?php echo esc_url( $attributes['link-anbieter'] ); ?>" title="<?php echo esc_url( $attributes['link-anbieter']['title'] );?>">
        <?php if ( isset( $attributes['image-anbieter-logo']['url'] ) ) : ?>
            <img src="<?php echo esc_url( $attributes['image-anbieter-logo']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image-anbieter-logo']['alt'] ); ?>">
            <?php else: ?>
                <p>Image is required to show this block content.</p>
        <?php endif;?>
    </a>
<?php else: ?>
    <?php if ( isset( $attributes['image-anbieter-logo']['url'] ) ) : ?>
            <img src="<?php echo esc_url( $attributes['image-anbieter-logo']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image-anbieter-logo']['alt'] ); ?>">
            <?php else: ?>
                <p>Image is required to show this block content.</p>
        <?php endif;?>
<?php endif;?>
