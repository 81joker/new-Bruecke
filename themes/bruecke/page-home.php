<?php get_header(); ?>
<?php get_template_part('parts/content', 'hero');?>
<div id="content" class="site-content">
    <?php get_template_part('parts/content', 'event'); ?>

    <?php include('static-page.php') ?>
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
</div>
</div>
<?php get_footer(); ?>