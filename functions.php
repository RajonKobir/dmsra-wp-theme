<?php

//  no direct access 
if( !defined('ABSPATH') ) : exit(); endif;


// Define plugin constants 
define( 'DMSRA_THEME_PATH', trailingslashit( get_template_directory() ) );
define( 'DMSRA_THEME_URL', trailingslashit( get_template_directory_uri() ) );
define( 'DMSRA_THEME_NAME', 'dmsra' );
define( 'DMSRA_THEME_TEXT_DOMAIN', 'dmsra' );

// custom image upload
function dmsra_custom_image_file_upload( $image_url, $image_name ) {

	// it allows us to use download_url() and wp_handle_sideload() functions
	require_once( ABSPATH . 'wp-admin/includes/file.php' );

	// download to temp dir
	$temp_file = download_url( $image_url );

	if( is_wp_error( $temp_file ) ) {
		return false;
	}

    // $image_full_name = basename( $temp_file );
    $image_full_name = basename( $image_url );
    $image_name_array = explode( '.', $image_full_name);
    $image_name = $image_name_array[0];
    $image_extension = $image_name_array[1];

    $updated_image_full_name = $image_name . '.' . $image_extension;

	// move the temp file into the uploads directory
	$file = array(
		'name'     => $updated_image_full_name,
		'type'     => mime_content_type( $temp_file ),
		'tmp_name' => $temp_file,
		'size'     => filesize( $temp_file ),
	);
	$sideload = wp_handle_sideload(
		$file,
		array(
            // no needs to check 'action' parameter
			'test_form'   => false 
		)
	);

	if( ! empty( $sideload[ 'error' ] ) ) {
		// you may return error message if you want
		return false;
	}

	// it is time to add our uploaded image into WordPress media library
	$attachment_id = wp_insert_attachment(
		array(
			'guid'           => $sideload[ 'url' ],
			'post_mime_type' => $sideload[ 'type' ],
			'post_title'     => basename( $sideload[ 'file' ] ),
			'post_content'   => '',
			'post_status'    => 'inherit',
		),
		$sideload[ 'file' ]
	);

	if( is_wp_error( $attachment_id ) || ! $attachment_id ) {
		return false;
	}

	// update medatata, regenerate image sizes
	require_once( ABSPATH . 'wp-admin/includes/image.php' );

	wp_update_attachment_metadata(
		$attachment_id,
		wp_generate_attachment_metadata( $attachment_id, $sideload[ 'file' ] )
	);

    @unlink( $temp_file );

	return $attachment_id;

}
// custom image upload ends here


// custom post types 
require_once DMSRA_THEME_PATH . 'inc/custom_post_types/custom_post_types.php';


// including nav class
require_once DMSRA_THEME_PATH . 'dmsra-nav-class.php';


// theme's default setups
require_once DMSRA_THEME_PATH . 'dmsra_default_setup.php';


// including redux framework for options
if (file_exists(dirname(__FILE__) . '/lib/redux-framework/redux-framework.php')) {
    require_once (dirname(__FILE__) . '/lib/redux-framework/redux-framework.php');
}

if (file_exists(dirname(__FILE__) . '/lib/redux-framework/sample/config.php')) {
    require_once (dirname(__FILE__) . '/lib/redux-framework/sample/config.php');
}


// add css and js 
if( is_admin() ) {
    require_once DMSRA_THEME_PATH . 'assets/admin/admin.php';
}else{
    require_once DMSRA_THEME_PATH . 'assets/public/public.php';
}


// registering sidebar 
add_action('widgets_init', 'dmsra_sidebar');
function dmsra_sidebar() {
    register_sidebar(array(
        'name' => __('Right Sidebar', DMSRA_THEME_TEXT_DOMAIN),
        'id' => 'right_sidebar',
        'description' => __('Add widgets on right sidebar here', DMSRA_THEME_TEXT_DOMAIN),
        'before_widget' => '',
        'after_widget' => '</div></div>',  
        'before_title' => '<div class="heading"><h4 class="heading-title">',
        'after_title' => '</h4><div class="heading-line"><span class="short-line"></span><span class="long-line"></span><div class="sidebar_content">',
    ));
}


// decide the page title
function dmsra_page_title(){
    // $site_title =  bloginfo('name');
    $site_title =  '';
    $divider_sign =  '';
    if( is_front_page() ){
        return $site_title . $divider_sign . 'Home';
    }
    if( is_home() ){
        return $site_title . $divider_sign . single_post_title();
    }
    if( is_category() ){
        return $site_title . $divider_sign . the_archive_title();
    }
    if( is_archive() ){
        return $site_title . $divider_sign . the_archive_title();
    }
    return $site_title;
}


// custom post view count
function dmsraCustomSetPostViews($postID) {
    $countKey = 'dmsra_post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '1');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}