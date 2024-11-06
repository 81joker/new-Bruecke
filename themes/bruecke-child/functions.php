<?php

function bruecke_child_scripts(){
    wp_enqueue_style( 'bruecke-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bruecke-child-style', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );



    wp_enqueue_style('custom-gallery', get_template_directory_uri() . '/css/custom-gallery.css', array(), '1.0.0', 'all');
}
add_action( 'wp_enqueue_scripts', 'bruecke_child_scripts' );

// add_action('init', 'my_register_gallery');
/**
 * Register the custom gallery block.
 */
function bruecke_register_block_styles(){
    register_block_style(
        'core/gallery',
        array(
            'name'  => 'gallery',
            'label' => 'Gallery Images',
            'is_default'    => true,
            'style_handle' => 'bruecke-block-style',
            
        )
    );
}
add_action( 'init', 'bruecke_register_block_styles' );




function my_custom_gallery_block($block_content, $block) {
    if ($block['blockName'] === 'core/gallery') {
      // Modify the gallery block HTML
      $block_content = '<section class="gallery gallery-page" id="gallery">
          <div class="container-fluid gallery py-5  px-0"> '
 . $block_content .
      '</div>
      </section>';
    //   $block_content = '<div class="my-custom-gallery">' . $block_content . '</div>';
    }
    return $block_content;
  }
  add_filter('render_block', 'my_custom_gallery_block', 10, 2);



  add_filter( 'block_editor_settings_all', 'remove_gallery_columns_setting' );
  function remove_gallery_columns_setting( $settings ) {
      if ( isset( $settings['allowedBlockTypes']['core/gallery'] ) ) {
          // Remove the "columns" attribute from the Gallery block
          unset( $settings['allowedBlockTypes']['core/gallery']['attributes']['columns'] );
      }
      return $settings;
  }