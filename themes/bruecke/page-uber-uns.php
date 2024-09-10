<?php get_header(); ?>




<?php echo do_shortcode("[mv_imagetext/]"); ?>
<?php
if (have_posts()) :
    while (have_posts()) : the_post();?>



<?php 
    the_content();
?>
<?php
    endwhile;
?>
  

<?php endif; ?> 




<?php get_footer(); ?>