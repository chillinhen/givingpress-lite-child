<?php if( have_rows('ind-sidebar-de') || have_rows('ind-sidebar-en')): ?>

<div class="sidebar">
<?php while ( have_rows('ind-sidebar-de') || have_rows('ind-sidebar-en')) : the_row();?>
    <div class="widget">
      <h6 class="widget-title"><?php the_sub_field('headline');?></h6>
    <?php the_sub_field('textblock');?>
  </div>
<?php  endwhile;?>
</div>

<?php endif;?>
