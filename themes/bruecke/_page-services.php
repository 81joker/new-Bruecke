<?php get_header(); ?>
  <div class="container"> 


        <?php
        while (have_posts()) : the_post(); ?>

<?php 
 get_template_part('parts/content', 'page');

            if (comments_open() || get_comments_number()) {
                comments_template();
            }
        endwhile;
        ?>
          <?php
$parent_id = wp_get_post_parent_id(get_the_ID()); 

$children = get_pages(array(
    'child_of' => 106,
    'sort_column' => 'post_title',
    'sort_order' => 'asc',
));

foreach ($children as $child) {?>
   <h2><a href="<?php echo the_permalink($child->ID) ?>"> <?= $child->post_title ?> </a></h2>
<?php 
}
?>
<?php get_sidebar() ?>
</div>
<?php get_footer(); ?>