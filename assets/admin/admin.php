<?php 
/**
 * Init Styles & scripts
 *
 * @return void
 */

add_action( 'admin_enqueue_scripts', 'dmsra_admin_styles_scripts' );
function dmsra_admin_styles_scripts() {

    // wp_enqueue_style( 'dmsra_material_design_icons_css', DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css', '', rand());

    // wp_enqueue_style( 'dmsra_admin_bootstrap_css', DMSRA_THEME_URL . 'assets/admin/css/bootstrap.min.css', '', rand());

}

