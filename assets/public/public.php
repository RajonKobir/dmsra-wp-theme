<?php 
/**
 * Init Styles & scripts
 */
add_action( 'wp_enqueue_scripts', 'dmsra_public_styles_scripts', 20 );
function dmsra_public_styles_scripts() {

    wp_enqueue_style( 'dmsra_custom_1_css', DMSRA_THEME_URL . 'assets/public/css/custom-1.css', '', rand());
    wp_enqueue_style( 'dmsra_custom_2_css', DMSRA_THEME_URL . 'assets/public/css/custom-2.css', '', rand());
    wp_enqueue_style( 'dmsra_custom_3_css', DMSRA_THEME_URL . 'assets/public/css/custom-3.css', '', rand());
    wp_enqueue_style( 'dmsra_custom_4_css', DMSRA_THEME_URL . 'assets/public/css/custom-4.css', '', rand());
    wp_enqueue_style( 'dmsra_bootstrap_css', DMSRA_THEME_URL . 'assets/public/css/bootstrap.min.css', '', rand());
    wp_enqueue_style( 'dmsra_custom_css', DMSRA_THEME_URL . 'assets/public/css/custom.css', '', rand());
    wp_enqueue_style( 'dmsra_owl_carousel_css', DMSRA_THEME_URL . 'assets/public/css/owl.carousel.min.css', '', rand());

    wp_enqueue_style( 'dmsra_custom_responsive_css', DMSRA_THEME_URL . 'assets/public/css/responsive/custom-responsive.css', '', rand());
    wp_enqueue_style( 'dmsra_custom_2_responsive_css', DMSRA_THEME_URL . 'assets/public/css/responsive/custom-2-responsive.css', '', rand());

    // wp_enqueue_style( 'dmsra_material_design_icons_css', DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css', '', rand());


    
    // wp_enqueue_style('fonts', DMSRA_THEME_URL . 'assets/dms-ltd/css/fonts.css');
    // wp_enqueue_style('crumina-fonts', DMSRA_THEME_URL . 'assets/dms-ltd/css/crumina-fonts.css');
    // wp_enqueue_style('normalize', DMSRA_THEME_URL . 'assets/dms-ltd/css/normalize.css');
    // wp_enqueue_style('grid', DMSRA_THEME_URL . 'assets/dms-ltd/css/grid.css');
    // wp_enqueue_style('base', DMSRA_THEME_URL . 'assets/dms-ltd/css/base.css');
    // wp_enqueue_style('blocks', DMSRA_THEME_URL . 'assets/dms-ltd/css/blocks.css');
    // wp_enqueue_style('layouts', DMSRA_THEME_URL . 'assets/dms-ltd/css/layouts.css');
    // wp_enqueue_style('modules', DMSRA_THEME_URL . 'assets/dms-ltd/css/modules.css');
    // wp_enqueue_style('widgets-styles', DMSRA_THEME_URL . 'assets/dms-ltd/css/widgets-styles.css');
    // wp_enqueue_style('jquery.mCustomScrollbar.min', DMSRA_THEME_URL . 'assets/dms-ltd/css/jquery.mCustomScrollbar.min.css');
    // wp_enqueue_style('swiper.min', DMSRA_THEME_URL . 'assets/dms-ltd/css/swiper.min.css');
    // wp_enqueue_style('primary-menu', DMSRA_THEME_URL . 'assets/dms-ltd/css/primary-menu.css');
    // wp_enqueue_style('magnific-popup', DMSRA_THEME_URL . 'assets/dms-ltd/css/magnific-popup.css');



    wp_enqueue_script( 'dmsra_jquery_js', DMSRA_THEME_URL . 'assets/public/js/jquery.min.js', array('jquery'), rand(), false );
    wp_enqueue_script( 'dmsra_bootstrap_js', DMSRA_THEME_URL . 'assets/public/js/bootstrap.bundle.min.js', array('jquery'), rand(), true );
    wp_enqueue_script( 'dmsra_owl_carousel_js', DMSRA_THEME_URL . 'assets/public/js/owl.carousel.min.js', array('jquery'), rand(), true );
    wp_enqueue_script( 'dmsra_custom_js', DMSRA_THEME_URL . 'assets/public/js/custom.js', array('jquery'), rand(), true );
    wp_enqueue_script( 'dmsra_custom_2_js', DMSRA_THEME_URL . 'assets/public/js/custom-2.js', array('jquery'), rand(), true );


    wp_localize_script('dmsra_custom_js', 'dmsra_custom_js_data', array(
        'onlineOfflineFieldID' => get_option('dmsra_options')["dmsra_ninja_form_online_offline_field_key"],
        'coursesFieldID' => get_option('dmsra_options')["dmsra_ninja_form_courses_field_key"],
        'priceFieldID' =>  get_option('dmsra_options')["dmsra_ninja_form_price_field_key"],
    ));


    // disabling elementor font-awesome css
    wp_dequeue_style('font-awesome');
    wp_deregister_style('font-awesome');


}