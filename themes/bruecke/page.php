<?php

  get_header();

  while(have_posts()) {
    the_post();
     ?>
    <div class="container container--narrow page-section position-relative">
    
    <?php
      // $theParent =106;
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
      <?php }
    ?>
  </div>
    <?php 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
    <div class="container py-5"> 
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php } ?>
<!-- Start Content Parent  -->
 <?php
 if (!$theParent) {?>
  <?php 
    // Fetch the child pages
    $childPages = get_pages(array(
      'child_of' => $findChildrenOf, 
      'post_type' => 'page', 
      'sort_column' => 'menu_order'
    ));
   ?>


    <?php  get_template_part('parts/content', 'parent'); ?>

 <?php
 }
?>
<!-- End Content Parent  -->
    <div class="generic-content">
      <?php the_content(); ?>
    </div>

    </div>
  <?php }

  get_footer();

?>