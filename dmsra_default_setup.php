<?php

// initializing
$error_message = '';

// after_setup_theme action hook 
add_action('after_setup_theme', 'dmsra_default_setup');
function dmsra_default_setup() {

    // add WC supports
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );

    // add blog supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-background');
    add_theme_support('automatic-feed-links');

    // add translation support
    load_theme_textdomain('dmsra', get_template_directory_uri() . '/languages');

    // post thumbnail image resize 
    add_image_size('dmsra-blog-page-post-thumbnails', 350, 350, true);
    add_image_size('dmsra-single-page-post-thumbnails', 400, 700, true);


    // updating blog excerpt
    function dmsra_read_more($word) {
        $post_content = explode(" ", get_the_content());
        $slice_content = array_slice($post_content, '0', $word);
        echo implode(" ", $slice_content);
    }


    // registering nav menus
    if (function_exists('register_nav_menus')) {
        register_nav_menus (
            array(
                'main_menu' => __('Main Menu', 'dmsra'),
                'footer_menu'  => __( 'Footer Menu', 'dmsra' ),
            )
        );
    }

    
    // updating Permalink structure
    $permalink_structure = get_option( 'permalink_structure' );
    if( $permalink_structure != '/%postname%/' ){
        update_option( 'permalink_structure' , '/%postname%/' );
    }
    
    // enabling anyone can register
    $users_can_register = get_option( 'users_can_register' );
    if( $users_can_register != true ){
        update_option('users_can_register', true);
    }
    
    // updating default role of users
    $default_role = get_option( 'default_role' );
    if( $default_role !=  'subscriber' ){
        update_option('default_role', 'subscriber');
    }


}
// after_setup_theme action hook ends here


// after_switch_theme action hook 
add_action('after_switch_theme', 'dmsra_after_switch_theme');
function dmsra_after_switch_theme() {
    
    if( !function_exists("dmsra_create_page") ){
        function dmsra_create_page( $post_title, $post_content = NULL, $page_template = NULL ) {

            $post_name = str_replace( ' ', '-', strtolower( trim( $post_title ) ) );

            $args = array(
                'post_name'      => $post_name,
                'post_type'      => 'page',
                'post_status'    => array( 'any', 'trash' ),
                'posts_per_page' => -1,
            );

            try {
                $query = get_posts($args);
            } catch(Exception $e) {
                $error_message .= $e->getMessage() . PHP_EOL;
            }
        
            // if got items
            if( isset($query[0]->ID) ){
                foreach( $query as $query_key => $query_value){
                    if( $query_value->post_name == $post_name ){
                        $page_id = $query_value->ID;
                        if( $query_value->post_status != 'publish' ){
                            $args["ID"] = $page_id;
                            $args["post_status"] = 'publish';
                            wp_update_post($args);
                        }
                        return $page_id;
                    }
                }
            }

            $args["comment_status"] = 'closed';
            $args["ping_status"] = 'closed';
            $args["post_author"] = 1;
            $args["post_title"] = ucwords($post_title);
            $args["post_status"] = 'publish';
            $args["post_content"] = $post_content;
            $args["page_template"] = $page_template;
            
            $page_id = wp_insert_post( $args );
            return $page_id;
        }   
    }   
    
    
    // creating wp pages
    try {
        $blog_page_id = dmsra_create_page( 'Blog', '', 'page-templates/dmsra-blog.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $home_page_id = dmsra_create_page( 'Home', '', 'page-templates/dmsra-home.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }

    try {
        $admission_page_id = dmsra_create_page( 'Admission', '[ninja_form id=2]' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $terms_and_condition_page_id = dmsra_create_page( 'Terms And Condition', '', 'page-templates/dmsra-terms-and-condition.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $terms_and_condition_page_id = dmsra_create_page( 'Privacy Policy', '', 'page-templates/dmsra-privacy-policy.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $google_form_1_page_id = dmsra_create_page( 'Web Admission Form', '', 'page-templates/dmsra-google-form-1.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $google_form_2_page_id = dmsra_create_page( 'Web Registration Form', '', 'page-templates/dmsra-google-form-2.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $google_form_3_page_id = dmsra_create_page( 'Digital Marketing Registration Form', '', 'page-templates/dmsra-google-form-3.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }
    
    try {
        $google_form_4_page_id = dmsra_create_page( 'Spoken English Registration Form', '', 'page-templates/dmsra-google-form-4.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }

    try {
        $courses_page_id = dmsra_create_page( 'Courses', '', 'page-templates/dmsra-courses.php' );
    } catch(Exception $e) {
        $error_message .= $e->getMessage() . PHP_EOL;
    }

    // creating wp pages ends here



    // assigning front page and post page
    $site_type = get_option('show_on_front');
    if($site_type == 'posts') {
        update_option( 'show_on_front', 'page' );
        update_option( 'page_on_front', $home_page_id );
        update_option( 'page_for_posts', $blog_page_id );
    }


    // add courses custom post types function
    function add_course_pages(array $course_info){

        $post_title = trim($course_info["title"]);
        $banner_url = trim($course_info["banner_url"]);
        $online_check = trim($course_info["online_check"]);
        $offline_check = trim($course_info["offline_check"]);
        $online_offline_title_extra = trim($course_info["online_offline_title_extra"]);
        $online_previous_price = trim($course_info["online_previous_price"]);
        $online_current_price = trim($course_info["online_current_price"]);
        $offline_previous_price = trim($course_info["offline_previous_price"]);
        $offline_current_price = trim($course_info["offline_current_price"]);
        $english_free_class = trim($course_info["english_free_class"]);
        $english_free_class_text = trim($course_info["english_free_class_text"]);
        $instructor_name = trim($course_info["instructor_name"]);
        $class_duration = trim($course_info["class_duration"]);
        $number_of_lectures = trim($course_info["number_of_lectures"]);
        $course_language = trim($course_info["course_language"]);
        $certificate_message = trim($course_info["certificate_message"]);
        $admission_button_text = trim($course_info["admission_button_text"]);
        $admission_button_link = trim($course_info["admission_button_link"]);
        $contact_number = trim($course_info["contact_number"]);
        $description = trim($course_info["description"]);

        $args = array(
            'post_title' => $post_title,
            'post_type'      => 'courses',
            'post_status'    => array( 'any', 'trash' ),
            'posts_per_page' => -1,
        );
    
        try {
            $query = get_posts($args);
        } catch(Exception $e) {
            $error_message .= $e->getMessage() . PHP_EOL;
        }
    
        $got_item = false;
        // if got items
        if( isset($query[0]->ID) ){
            foreach( $query as $query_key => $query_value){
                if( $query_value->post_title == $post_title ){
                    $got_item = true;
                    $found_page_id = $query_value->ID;
                    return $found_page_id;
                }
            }
        }
    
        if( !$got_item ){
            // Insert custom post programmatically
            $new_post = array(
                'post_title' => $post_title,
                'post_content' => $description,
                'post_status' => 'publish',
                'post_type' => 'courses'
            );
    
            try {
                $post_id = wp_insert_post( $new_post );
            } catch(Exception $e) {
                $error_message .= $e->getMessage() . PHP_EOL;
            }
            
        
            if( $post_id ){

                // add banner image to the post featured image
                try {
                    $image = dmsra_custom_image_file_upload( $banner_url, "Course Item" );
                } catch(Exception $e) {
                    $error_message .= $e->getMessage() . PHP_EOL;
                }
                
                set_post_thumbnail( $post_id, $image );

                $keys = array_keys($course_info);
                foreach ($keys as $key => $value) {
                    if ( !in_array( $key, [0, 1, 19]) ){
                        update_post_meta( $post_id, $value, $course_info[$value] );
                    }
                }
                return $post_id;
            }
        }


    }


        // course 1 variables and functions
        $courses_info_directory = DMSRA_THEME_PATH . 'inc/custom_post_types/courses/course-infos/';
        $old = getcwd(); 
        chdir($courses_info_directory);
        $new = getcwd();
        $course_files = array_diff(scandir($new), array('.', '..', 'index.html', 'index.php'));
        chdir($old);

        $course_page_array = [];

        foreach( $course_files as $course_file_key => $course_file_value ){
            include_once DMSRA_THEME_PATH . 'inc/custom_post_types/courses/course-infos/' . $course_file_value;

            try {
                $single_course_page_id = add_course_pages($course_info);
            } catch(Exception $e) {
                $error_message .= $e->getMessage() . PHP_EOL;
            }finally{
                if($single_course_page_id){
                    array_push($course_page_array, $single_course_page_id);
                }
            }

        }


        // creating menu
        $menu_name = 'Main Menu';
        $theme_location = 'main_menu';
        $menu_exists = wp_get_nav_menu_object( $menu_name );
        if( !$menu_exists){
            $menu_id = wp_create_nav_menu($menu_name);
        }else{
            $menu_id = $menu_exists->term_id;
        }
        // creating menu ends here

        // add the menu to the location 
        // if( !has_nav_menu( $theme_location ) ){
            $locations = get_theme_mod('nav_menu_locations');
            $locations[$theme_location] = $menu_id;
            set_theme_mod( 'nav_menu_locations', $locations );
        // }
        // add the menu to the location ends
    
    
        // creating menu items
        if( !wp_get_nav_menu_items( get_nav_menu_locations()['main_menu'] )){
            $page = get_post($home_page_id); 
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $page->post_title,
                'menu-item-object-id' => $page->ID,
                'menu-item-object' => 'page',
                'menu-item-status' => 'publish',
                'menu-item-type' => 'post_type',
            ));
            
            $page = get_post($courses_page_id); 
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $page->post_title,
                'menu-item-object-id' => $page->ID,
                'menu-item-object' => 'page',
                'menu-item-status' => 'publish',
                'menu-item-type' => 'post_type',
            ));


            // $courses_menu_item = wp_update_nav_menu_item($menu_id, 0, array(
            //     'menu-item-title' =>  __('Courses'),
            //     'menu-item-type' => 'custom',
            //     'menu-item-status' => 'publish',
            //     'menu-item-url' => '#',
            // ));

            // foreach($course_page_array as $single_course_page_key => $single_course_page_id){
            //     $page = get_post($single_course_page_id); 
            //     wp_update_nav_menu_item($menu_id, 0, array(
            //         'menu-item-title' => $page->post_title,
            //         'menu-item-object-id' => $page->ID,
            //         'menu-item-object' => 'post',
            //         'menu-item-status' => 'publish',
            //         'menu-item-type' => 'post_type',
            //         'menu-item-parent-id' => $courses_menu_item,
            //     ));
            // }
    

            $page = get_post($admission_page_id); 
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $page->post_title,
                'menu-item-object-id' => $page->ID,
                'menu-item-object' => 'page',
                'menu-item-status' => 'publish',
                'menu-item-type' => 'post_type',
            ));
            
            $page = get_post($blog_page_id); 
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' => $page->post_title,
                'menu-item-object-id' => $page->ID,
                'menu-item-object' => 'page',
                'menu-item-status' => 'publish',
                'menu-item-type' => 'post_type',
            ));
            
            // adding login to menu
            wp_update_nav_menu_item($menu_id, 0, array(
                'menu-item-title' =>  __('Login'),
                'menu-item-type' => 'custom',
                'menu-item-status' => 'publish',
                'menu-item-url' => home_url('/login'),
            ));
        }
        // creating menu items ends here



}
// after_switch_theme action hook ends here


// showing error messages 
if($error_message != ''){
    add_action( 'admin_notices', 'dmsra_admin_warning');
    function dmsra_admin_warning(){
        echo $error_message;
    }
}