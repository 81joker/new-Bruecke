<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <!-- Header Section Begin -->
    <?php  get_template_part('parts/content', 'navbar'); ?>
    <!-- Header End -->



<?php
if (!is_front_page()) :
        $args = $_SERVER['REQUEST_URI'];
        $args = ltrim($args, '/'); 
        $args = rtrim($args, '/'); 
        $args = ucfirst($args);
        get_template_part( 'parts/content', 'breadcrumb' , $args);
        ?>

<?php endif;?>
    
