<?php
/**
 * WP Bootstrap Starter Theme Customizer
 *
 * @package WP_Bootstrap_Starter
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function themeslug_sanitize_checkbox( $checked ) {
    // Boolean check.
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function wp_bootstrap_starter_customize_register( $wp_customize ) {

    //Style Preset
    $wp_customize->add_section(
        'typography',
        array(
            'title' => __( 'Preset Styles', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the typography', 'wp-bootstrap-starter' ),
            'priority' => 20,
        )
    );

    //Theme Option
    $wp_customize->add_setting( 'theme_option_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'theme_option_setting', array(
        'label' => __( 'Theme Option', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'theme_option_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'cerulean' => 'Cerulean',
            'cosmo' => 'Cosmo',
            'cyborg' => 'Cyborg',
            'darkly' => 'Darkly',
            'flatly' => 'Flatly',
            'journal' => 'Journal',
            'litera' => 'Litera',
            'lumen' => 'Lumen',
            'lux' => 'Lux',
            'materia' => 'Materia',
            'minty' => 'Minty',
            'pulse' => 'Pulse',
            'sandstone' => 'Sandstone',
            'simplex' => 'Simplex',
            'sketchy' => 'Sketchy',
            'slate' => 'Slate',
            'solar' => 'Solar',
            'spacelab' => 'Spacelab',
            'superhero' => 'Superhero',
            'united' => 'United',
            'yeti' => 'Yeti',
        )
    ) ) );

    $wp_customize->add_setting( 'preset_style_setting', array(
        'default'   => 'default',
        'type'       => 'theme_mod',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'preset_style_setting', array(
        'label' => __( 'Typography', 'wp-bootstrap-starter' ),
        'section'    => 'typography',
        'settings'   => 'preset_style_setting',
        'type'    => 'select',
        'choices' => array(
            'default' => 'Default',
            'arbutusslab-opensans' => 'Arbutus Slab / Opensans',
            'montserrat-merriweather' => 'Montserrat / Merriweather',
            'montserrat-opensans' => 'Montserrat / Opensans',
            'oswald-muli' => 'Oswald / Muli',
            'poppins-lora' => 'Poppins / Lora',
            'poppins-poppins' => 'Poppins / Poppins',
            'roboto-roboto' => 'Roboto / Roboto',
            'robotoslab-roboto' => 'Roboto Slab / Roboto',
        )
    ) ) );


    /*Banner*/
    $wp_customize->add_section(
        'header_image',
        array(
            'title' => __( 'Header Banner', 'wp-bootstrap-starter' ),
            'priority' => 30,
        )
    );


    $wp_customize->add_control(
        'header_img',
        array(
            'label' => __( 'Header Image', 'wp-bootstrap-starter' ),
            'section' => 'header_images',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'header_bg_color_setting',
        array(
            'default'     => '#fff',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'header_bg_color',
            array(
                'label'      => __( 'Header Banner Background Color', 'wp-bootstrap-starter' ),
                'section'    => 'header_image',
                'settings'   => 'header_bg_color_setting',
            ) )
    );

    $wp_customize->add_setting( 'header_banner_title_setting', array(
        'default' => __( 'WP Bootstrap Framework', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_title_setting', array(
        'label' => __( 'Banner Title', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_title_setting',
        'type' => 'text'
    ) ) );

    $wp_customize->add_setting( 'header_banner_tagline_setting', array(
        'default' => __( 'To customize the contents of this header banner and other elements of your site go to Dashboard - Appearance - Customize','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_tagline_setting', array(
        'label' => __( 'Banner Tagline', 'wp-bootstrap-starter' ),
        'section'    => 'header_image',
        'settings'   => 'header_banner_tagline_setting',
        'type' => 'text'
    ) ) );
    $wp_customize->add_setting( 'header_banner_visibility', array(
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'themeslug_sanitize_checkbox',
    ) );
    $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'header_banner_visibility', array(
        'settings' => 'header_banner_visibility',
        'label'    => __('Remove Header Banner', 'wp-bootstrap-starter'),
        'section'    => 'header_image',
        'type'     => 'checkbox',
    ) ) );


    //Site Name Text Color
   $wp_customize->add_section(
        'site_name_text_color',
        array(
            'title' => __( 'Other Customizations', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 40,
        )
    );
    $wp_customize->add_section(
        'colors',
        array(
            'title' => __( 'Background Color', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 50,
            'panel' => 'styling_option_panel',
        )
    );
    $wp_customize->add_section(
        'background_image',
        array(
            'title' => __( 'Background Image', 'wp-bootstrap-starter' ),
            //'description' => __( 'This is a section for the header banner Image.', 'wp-bootstrap-starter' ),
            'priority' => 60,
            'panel' => 'styling_option_panel',
        )
    );

    // Bootstrap and Fontawesome Option
    $wp_customize->add_setting( 'cdn_assets_setting', array(
        'default' => __( 'no','wp-bootstrap-starter' ),
        'sanitize_callback' => 'wp_filter_nohtml_kses',
    ) );
    $wp_customize->add_control( 
        'cdn_assets',
        array(
            'label' => __( 'Use CDN for Assets', 'wp-bootstrap-starter' ),
            'description' => __( 'All Bootstrap Assets and FontAwesome will be loaded in CDN.', 'wp-bootstrap-starter' ),
            'section' => 'site_name_text_color',
            'settings' => 'cdn_assets_setting',
	        'type'    => 'select',
	        'choices' => array(
	            'yes' => __( 'Yes', 'wp-bootstrap-starter' ),
	            'no' => __( 'No', 'wp-bootstrap-starter' ),
        	)
        )
    );


    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'refresh';
    $wp_customize->get_control( 'header_textcolor'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_image'  )->section = 'site_name_text_color';
    $wp_customize->get_control( 'background_color'  )->section = 'site_name_text_color';

    // Add control for logo uploader
    $wp_customize->add_setting( 'wp_bootstrap_starter_logo', array(
        //'default' => __( '', 'wp-bootstrap-starter' ),
        'sanitize_callback' => 'esc_url',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'wp_bootstrap_starter_logo', array(
        'label'    => __( 'Upload Logo (replaces text)', 'wp-bootstrap-starter' ),
        'section'  => 'title_tagline',
        'settings' => 'wp_bootstrap_starter_logo',
    ) ) );
    //editslider
    $wp_customize->add_panel('edit_slider',
    array(
    
        'title' => 'Edit sliders',
        
    ));
    //slidersociallinks
    $wp_customize->add_section('social-links',array(
    
        'title' => 'Social Links',
        'panel' => 'edit_slider',
        
    ));
    $wp_customize->add_setting('social-link-instagram', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'social-link-instagram',array(
    'label' => 'Instagram Social Link',
    'section' => 'social-links',
    'setting' => 'social-link-instagram',    
    )));
    $wp_customize->add_setting('social-link-twitter', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'social-link-twitter',array(
    'label' => 'Twitter Social Link',
    'section' => 'social-links',
    'setting' => 'social-link-twitter',    
    ))); 
    $wp_customize->add_setting('social-link-facebook', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'social-link-facebook',array(
    'label' => 'Facebook Social Link',
    'section' => 'social-links',
    'setting' => 'social-link-facebook',    
    ))); 
    $wp_customize->add_setting('social-link-custom', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'social-link-custom',array(
    'label' => 'Your Custom Social Link',
    'section' => 'social-links',
    'setting' => 'social-link-custom',    
    )));    
    
    //slider1
    $wp_customize->add_section('hs_slider1_section', array(
    'title' => 'Edit slide 1',
    'panel' => 'edit_slider'
    ));
    $wp_customize->add_setting('hs_slider1_headline', array(
    'default' => 'Default Headline!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider1_headline', array(
    
    'label' => 'Slider 1 Headline',
    'section' => 'hs_slider1_section',
    'settings' => 'hs_slider1_headline',    
        
    )));
    $wp_customize->add_setting('hs_slider1_description', array(
    'default' => 'Default description!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider1_description', array(
    
    'label' => 'Slider 1 Description',
    'section' => 'hs_slider1_section',
    'settings' => 'hs_slider1_description',
    'type' =>'textarea',    
        
    )));
    $wp_customize->add_setting('hs_slider1_btn_des', array(
    'default' => 'Default Button!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider1_btn_des', array(
    
    'label' => 'Slider 1 Button description',
    'section' => 'hs_slider1_section',
    'settings' => 'hs_slider1_btn_des',    
        
    )));
    $wp_customize->add_setting('hs_slider1_btn_link', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider1_btn_link', array(
    
    'label' => 'Slider 1 Button Link',
    'section' => 'hs_slider1_section',
    'settings' => 'hs_slider1_btn_link',
        
    )));
    $wp_customize->add_setting('hs_slider1_image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hs_slider1_image', array(
    
    'label' => 'Slider 1 Image',
    'section' => 'hs_slider1_section',
    'settings' => 'hs_slider1_image',
    'width' =>1920,
    'height'=>1080,
        
    )));
//slider2
    $wp_customize->add_section('hs_slider2_section', array(
    'title' => 'Edit slide 2',
    'panel' => 'edit_slider'
    ));
    $wp_customize->add_setting('hs_slider2_headline', array(
    'default' => 'Default Headline!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider2_headline', array(
    
    'label' => 'Slider 2 Headline',
    'section' => 'hs_slider2_section',
    'settings' => 'hs_slider2_headline',    
        
    )));
    $wp_customize->add_setting('hs_slider2_description', array(
    'default' => 'Default description!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider2_description', array(
    
    'label' => 'Slider 2 Description',
    'section' => 'hs_slider2_section',
    'settings' => 'hs_slider2_description',
    'type' =>'textarea',    
        
    )));
    $wp_customize->add_setting('hs_slider2_btn_des', array(
    'default' => 'Default Button!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider2_btn_des', array(
    
    'label' => 'Slider 2 Button description',
    'section' => 'hs_slider2_section',
    'settings' => 'hs_slider2_btn_des',    
        
    )));
    $wp_customize->add_setting('hs_slider2_btn_link', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider2_btn_link', array(
    
    'label' => 'Slider 2 Button Link',
    'section' => 'hs_slider2_section',
    'settings' => 'hs_slider2_btn_link',
        
    )));
    $wp_customize->add_setting('hs_slider2_image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hs_slider2_image', array(
    
    'label' => 'Slider 2 Image',
    'section' => 'hs_slider2_section',
    'settings' => 'hs_slider2_image',
        
    )));
    
//slider3
    $wp_customize->add_section('hs_slider3_section', array(
    'title' => 'Edit slide 3',
    'panel' => 'edit_slider'
    ));
    $wp_customize->add_setting('hs_slider3_headline', array(
    'default' => 'Default Headline!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider3_headline', array(
    
    'label' => 'Slider 3 Headline',
    'section' => 'hs_slider3_section',
    'settings' => 'hs_slider3_headline',    
        
    )));
    $wp_customize->add_setting('hs_slider3_description', array(
    'default' => 'Default description!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider3_description', array(
    
    'label' => 'Slider 3 Description',
    'section' => 'hs_slider3_section',
    'settings' => 'hs_slider3_description',
    'type' =>'textarea',    
        
    )));
    $wp_customize->add_setting('hs_slider3_btn_des', array(
    'default' => 'Default Button!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider3_btn_des', array(
    
    'label' => 'Slider 3 Button description',
    'section' => 'hs_slider3_section',
    'settings' => 'hs_slider3_btn_des',    
        
    )));
    $wp_customize->add_setting('hs_slider3_btn_link', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider3_btn_link', array(
    
    'label' => 'Slider 3 Button Link',
    'section' => 'hs_slider3_section',
    'settings' => 'hs_slider3_btn_link',
        
    )));
    $wp_customize->add_setting('hs_slider3_image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hs_slider3_image', array(
    
    'label' => 'Slider 3 Image',
    'section' => 'hs_slider3_section',
    'settings' => 'hs_slider3_image',
        
    )));
//slider4
    $wp_customize->add_section('hs_slider4_section', array(
    'title' => 'Edit slide 4',
    'panel' => 'edit_slider'
    ));
    $wp_customize->add_setting('hs_slider4_headline', array(
    'default' => 'Default Headline!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider4_headline', array(
    
    'label' => 'Slider 4 Headline',
    'section' => 'hs_slider4_section',
    'settings' => 'hs_slider4_headline',    
        
    )));
    $wp_customize->add_setting('hs_slider4_description', array(
    'default' => 'Default description!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider14_description', array(
    
    'label' => 'Slider 4 Description',
    'section' => 'hs_slider4_section',
    'settings' => 'hs_slider4_description',
    'type' =>'textarea',    
        
    )));
    $wp_customize->add_setting('hs_slider4_btn_des', array(
    'default' => 'Default Button!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider4_btn_des', array(
    
    'label' => 'Slider 4 Button description',
    'section' => 'hs_slider4_section',
    'settings' => 'hs_slider4_btn_des',    
        
    )));
    $wp_customize->add_setting('hs_slider4_btn_link', array(
    'default' => '#'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'hs_slider4_btn_link', array(
    
    'label' => 'Slider 4 Button Link',
    'section' => 'hs_slider4_section',
    'settings' => 'hs_slider4_btn_link',
        
    )));
    $wp_customize->add_setting('hs_slider4_image');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'hs_slider4_image', array(
    
    'label' => 'Slider 4 Image',
    'section' => 'hs_slider4_section',
    'settings' => 'hs_slider4_image',
        
    )));
    //footer
    $wp_customize->add_panel('footer-options',
    array(
    'title' => 'Footer options'
    )                        
    );
    $wp_customize->add_section('footer-custom-logo',
    array(
    
        'title' => 'Custom logo in footer',
        'panel' => 'footer-options'
    )                          
    );
    $wp_customize->add_setting('footer-custom-logo-img');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'footer-custom-logo-img',
    array(
        'label' => 'Custom Footer Logo',
        'section' => 'footer-custom-logo',
        'setting' => 'footer-custom-logo-img',
    )));
    $wp_customize->add_section('footer-phone-label',
    array(
    
        'title' => 'Edit phone number',
        'panel' => 'footer-options'
    )                          
    );    
    $wp_customize->add_setting('footer-phone-label-number', array(
    'default' => '999 999 999'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'footer-phone-label-number', array(
    
    'label' => 'Phone Number Label',
    'section' => 'footer-phone-label',
    'setting' => 'footer-phone-label-number',
        
    )));
    
    $wp_customize->add_section('about-us', array(
    'title' => 'About Us Section'
        
    ));
    $wp_customize->add_setting('about-us-title', array(
    'default' => 'About Us',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-us-title', array(
    'label' => 'About Us Title',
    'section' => 'about-us',
    'setting'  => 'about-us-title',  
    )));
    $wp_customize->add_setting('about-us-des', array(
    'default' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod',
    ));
   $wp_customize->add_control(new WP_Customize_Control($wp_customize,'about-us-des', array(
    'label' => 'About Us Description',
    'section' => 'about-us',
    'setting'  => 'about-us-des',  
    'type' => 'textarea',   
    )));

}
add_action( 'customize_register', 'wp_bootstrap_starter_customize_register' );

add_action( 'wp_head', 'wp_bootstrap_starter_customizer_css');
function wp_bootstrap_starter_customizer_css()

{
    $header_bg_color = get_theme_mod('header_bg_color_setting', '#fff');

    ?>
    <style type="text/css">
        #page-sub-header { background: <?php echo esc_attr( $header_bg_color ); ?>; }
    </style>
    <?php
}


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wp_bootstrap_starter_customize_preview_js() {
    wp_enqueue_script( 'wp_bootstrap_starter_customizer', get_template_directory_uri() . '/inc/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'wp_bootstrap_starter_customize_preview_js' );