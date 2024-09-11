<?php
add_action('customize_register', 'themename_customize_register');
function themename_customize_register($wp_customize)
{

    // 1- Start  Copyright Section
    $wp_customize->add_section(
        'sec_copyright',
        array(
            'title' => __( 'Copyright Settings', 'environs' ),
            'description' => __( 'Copyright Settings', 'environs' )
        )
    );

            $wp_customize->add_setting(
                'set_copyright',
                array(
                    'type' => 'theme_mod',
                    'default' => __( 'Copyright X - All Rights Reserved', 'environs' ),
                    'sanitize_callback' => 'sanitize_text_field'
                )
            );

            $wp_customize->add_control(
                'set_copyright',
                array(
                    'label' => __( 'Copyright Information', 'environs' ),
                    'description' => __( 'Please, type your copyright here', 'environs' ),
                    'section' => 'sec_copyright',
                    'type' => 'text'
                )
            );
    // End Copyright Section

    $wp_customize->add_section('slides', array(
        'title'          => 'Slides Hero',
        'priority'       => 25,
    ));

    // $wp_customize->add_setting('slide_image_1', array(
    //     'default'        => '',
    // ));

    for ( $i = 1; $i <= 3; $i++ ) {

        // Title
        $wp_customize->add_setting(
            "slide_title_$i",
            array(
                'type' => 'theme_mod',
                'default' => __('Please, add some title', 'environs'),
                'sanitize_callback' => 'sanitize_text_field'
            )
        );
    
        $wp_customize->add_control(
            "slide_title_$i",
            array(
                'label' => __('Title '.''.$i, 'environs'),
                'description' => __('Please, type your here title here', 'environs'),
                'section' => 'slides',
                'type' => 'text'
            )
        );

      // Subtitle
        $wp_customize->add_setting(
            "slide_subtitle_$i",
            array(
                'type' => 'theme_mod',
                'default' => __('Please, add some subtitle', 'environs'),
                'sanitize_callback' => 'sanitize_textarea_field'
            )
        );
    
        $wp_customize->add_control(
            "slide_subtitle_$i",
            array(
                'label' => __('Subtitle '.''.$i, 'environs'),
                'description' => __('Please, type your subtitle here', 'environs'),
                'section' => 'slides',
                'type' => 'text'
            )
        );

        // Content
        // $wp_customize->add_setting(
        //     "slide_content_$i",
        //     array(
        //         'type' => 'theme_mod',
        //         'default' => __("Please, add some Text.$i", 'environs'),
        //         'sanitize_callback' => 'sanitize_textarea_field'
        //     )
        // );
        // $wp_customize->add_control(
        //     "slide_content_$i",
        //     array(
        //         'label' => __('Content '.''.$i, 'environs'),
        //         'description' => __('Please, type your Content here', 'environs'),
        //         'section' => 'slides',
        //         'type' => 'textarea'
        //     )
        // );


        $wp_customize->add_setting("slide_image_$i", array(
            'default'        => '',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "slide_image_$i", array(
            'label'   => 'First Slide',
            'section' => 'slides',
            'settings'   => "slide_image_$i",
        )));
    
    }




      // Start Gallery Footer 
       // Add section for the footer gallery
    //    $wp_customize->add_section( 'footer_gallery_section', array(
    //     'title' => __( 'Footer Gallery', 'environs' ),
    //     'priority' => 130,
    // ));
    

}
