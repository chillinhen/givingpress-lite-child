<div class="sidebar">
<?php while ( have_rows('ind-sidebar-de') ) : the_row();?>
    <div class="widget">
      <h6 class="widget-title"><?php the_sub_field('headline');?></h6>
    <?php the_sub_field('textblock');?>
  </div>
<?php  endwhile;?>
</div>
