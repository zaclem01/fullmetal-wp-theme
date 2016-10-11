<?php

$TEMPLATE_DIR = get_template_directory_uri();

// Global theme defaults for customizer and used in get_theme_mod()
$theme_defaults = array(
    'front_hero' => $TEMPLATE_DIR . '/images/home-placeholder.jpg',
    'front_overlay_title' => 'Overlay Title',
    'front_overlay_desc' => 'Lorem ipsum dolor set amit',
    'front_video' => 'https://www.youtube.com/embed/-XccUMOQ978',
    'front_testimonial_quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.',
    'front_testimonial_name' => 'Human I. Haveaface, Bride',
    'front_testimonial_location' => 'Anytown, USA'
);

function fullmetal_theme_options($wp_customize) {
    global $theme_defaults;
    // Add panel for Fullmetal options
    $wp_customize->add_panel( 'fullmetal_options', array(
        'title' => 'Fullmetal Options',
        'priority' => 1
    ));

    // Add section for front page section and settings
    $wp_customize->add_section( 'front', array(
        'title' => 'Front Page Options',
        'description' => 'Customize the front page here',
        'panel' => 'fullmetal_options',
        'priority' => 35
    ));

    // Front page hero images
    $wp_customize->add_setting( 'front_hero1', array(
        'default' => $theme_defaults['front_hero']
    ));
    $wp_customize->add_setting( 'front_hero2', array(
        'default' => $theme_defaults['front_hero']
    ));
    $wp_customize->add_setting( 'front_hero3', array(
        'default' => $theme_defaults['front_hero']
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control( 
        $wp_customize, 
        'front_hero1',
        array(
            'label' => 'Upload Hero Image #1',
            'section' => 'front',
            'settings' => 'front_hero1'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control( 
        $wp_customize, 
        'front_hero2',
        array(
            'label' => 'Upload Hero Image #2',
            'section' => 'front',
            'settings' => 'front_hero2'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control( 
        $wp_customize, 
        'front_hero3',
        array(
            'label' => 'Upload Hero Image #3',
            'section' => 'front',
            'settings' => 'front_hero3'
        )
    ));

    // Front page hero overlays
    $wp_customize->add_setting( 'front_hero_overlay_title1', array(
        'default' => $theme_defaults['front_overlay_title']
    ));
    $wp_customize->add_setting( 'front_hero_overlay_title2', array(
        'default' => $theme_defaults['front_overlay_title']
    ));
    $wp_customize->add_setting( 'front_hero_overlay_title3', array(
        'default' => $theme_defaults['front_overlay_title']
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_title1',
        array(
            'label' => 'Hero #1 Overlay Title',
            'section' => 'front',
            'settings' => 'front_hero_overlay_title1'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_title2',
        array(
            'label' => 'Hero #2 Overlay Title',
            'section' => 'front',
            'settings' => 'front_hero_overlay_title2'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_title3',
        array(
            'label' => 'Hero #3 Overlay Title',
            'section' => 'front',
            'settings' => 'front_hero_overlay_title3'
        )
    ));

    $wp_customize->add_setting( 'front_hero_overlay_desc1', array(
        'default' => $theme_defaults['front_overlay_desc']
    ));
    $wp_customize->add_setting( 'front_hero_overlay_desc2', array(
        'default' => $theme_defaults['front_overlay_desc']
    ));
    $wp_customize->add_setting( 'front_hero_overlay_desc3', array(
        'default' => $theme_defaults['front_overlay_desc']
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_desc1',
        array(
            'label' => 'Hero #1 Overlay Description',
            'section' => 'front',
            'settings' => 'front_hero_overlay_desc1',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_desc2',
        array(
            'label' => 'Hero #2 Overlay Description',
            'section' => 'front',
            'settings' => 'front_hero_overlay_desc2',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_hero_overlay_desc3',
        array(
            'label' => 'Hero #3 Overlay Description',
            'section' => 'front',
            'settings' => 'front_hero_overlay_desc3',
            'type' => 'textarea'
        )
    ));

    // Front page video
    $wp_customize->add_setting( 'front_video', array(
        'default' => $theme_defaults['front_video']
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_video',
        array(
            'label' => 'Front Page Video',
            'section' => 'front',
            'settings' => 'front_video'
        )
    ));

    // Front page testimonials
    $wp_customize->add_setting( 'front_testimonial_quote1', array(
        'default' => $theme_defaults['front_testimonial_quote']
    ));
    $wp_customize->add_setting( 'front_testimonial_name1', array(
        'default' => $theme_defaults['front_testimonial_name']
    ));
    $wp_customize->add_setting( 'front_testimonial_location1', array(
        'default' => $theme_defaults['front_testimonial_location']
    ));

    $wp_customize->add_setting( 'front_testimonial_quote2', array(
        'default' => $theme_defaults['front_testimonial_quote']
    ));
    $wp_customize->add_setting( 'front_testimonial_name2', array(
        'default' => $theme_defaults['front_testimonial_name']
    ));
    $wp_customize->add_setting( 'front_testimonial_location2', array(
        'default' => $theme_defaults['front_testimonial_location']
    ));

    $wp_customize->add_setting( 'front_testimonial_quote3', array(
        'default' => $theme_defaults['front_testimonial_quote']
    ));
    $wp_customize->add_setting( 'front_testimonial_name3', array(
        'default' => $theme_defaults['front_testimonial_name']
    ));
    $wp_customize->add_setting( 'front_testimonial_location3', array(
        'default' => $theme_defaults['front_testimonial_location']
    ));

    $wp_customize->add_setting( 'front_testimonial_quote4', array(
        'default' => $theme_defaults['front_testimonial_quote']
    ));
    $wp_customize->add_setting( 'front_testimonial_name4', array(
        'default' => $theme_defaults['front_testimonial_name']
    ));
    $wp_customize->add_setting( 'front_testimonial_location4', array(
        'default' => $theme_defaults['front_testimonial_location']
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_quote1',
        array(
            'label' => 'Front Page Testimonial #1 Quote',
            'section' => 'front',
            'settings' => 'front_testimonial_quote1',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_name1',
        array(
            'label' => 'Front Page Testimonial #1 Name',
            'section' => 'front',
            'settings' => 'front_testimonial_name1'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_location1',
        array(
            'label' => 'Front Page Testimonial #1 Location',
            'section' => 'front',
            'settings' => 'front_testimonial_location1'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_quote2',
        array(
            'label' => 'Front Page Testimonial #2 Quote',
            'section' => 'front',
            'settings' => 'front_testimonial_quote2',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_name2',
        array(
            'label' => 'Front Page Testimonial #2 Name',
            'section' => 'front',
            'settings' => 'front_testimonial_name2'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_location2',
        array(
            'label' => 'Front Page Testimonial #2 Location',
            'section' => 'front',
            'settings' => 'front_testimonial_location2'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_quote3',
        array(
            'label' => 'Front Page Testimonial #3 Quote',
            'section' => 'front',
            'settings' => 'front_testimonial_quote3',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_name3',
        array(
            'label' => 'Front Page Testimonial #3 Name',
            'section' => 'front',
            'settings' => 'front_testimonial_name3'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_location3',
        array(
            'label' => 'Front Page Testimonial #3 Location',
            'section' => 'front',
            'settings' => 'front_testimonial_location3'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_quote4',
        array(
            'label' => 'Front Page Testimonial #4 Quote',
            'section' => 'front',
            'settings' => 'front_testimonial_quote4',
            'type' => 'textarea'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_name4',
        array(
            'label' => 'Front Page Testimonial #4 Name',
            'section' => 'front',
            'settings' => 'front_testimonial_name4'
        )
    ));
    $wp_customize->add_control(new WP_Customize_Control( 
        $wp_customize, 
        'front_testimonial_location4',
        array(
            'label' => 'Front Page Testimonial #4 Location',
            'section' => 'front',
            'settings' => 'front_testimonial_location4'
        )
    ));
}

add_action( 'customize_register', 'fullmetal_theme_options' );

?>