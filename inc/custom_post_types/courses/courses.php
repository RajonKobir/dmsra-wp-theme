<?php


// creating courses post type
add_action( 'init', 'create_dmsra_courses_post_type' );
function create_dmsra_courses_post_type() {

	// set up labels
	$labels = array(
        'name' => 'Courses',
        'singular_name' => 'Course',
        'add_new' => 'Add New Course',
        'add_new_item' => 'Add New Course',
        'edit_item' => 'Edit Course',
        'new_item' => 'New Course',
        'all_items' => 'All Courses',
        'view_item' => 'View Course',
        'search_items' => 'Search Courses',
        'not_found' =>  'No Courses Found',
        'not_found_in_trash' => 'No Courses found in Trash', 
        'parent_item_colon' => '',
        'menu_name' => 'Courses',
   );


    register_post_type( 'courses',
        array(
            'labels' => $labels,
            'public' => true,  
            'publicly_queryable' => true,  
            'show_ui' => true, 
            'show_in_rest'    => true,
            'query_var' => 'courses',
            'can_export' => true,
            'exclude_from_search' => false,  
            'show_in_menu' => true,  
            'show_in_nav_menus' => true,  
            'has_archive' => true, 
            'hierarchical' => true,
            'rewrite' => array( 'slug' => 'courses' ),
            'capability_type' => 'post',
            'supports' => array('title', 'editor', 'thumbnail'),
            // 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
            'taxonomies' => array( 'post_tag', 'category' ),
            'menu_position ' => 0,
            'menu_icon' => 'dashicons-welcome-learn-more',
        )
    );

}


add_action('add_meta_boxes', 'courses_metaboxes');
function courses_metaboxes() {
    add_meta_box(
            'courses_metabox', 'Dmsra Course Settings', 'courses_callback', 'courses', 'side', 'low'
    );
}


function courses_callback($post) {
    ?>
    
    <p>
        <input type="checkbox" 
               name="online_check" id="online_check" 
               value="yes"  
               class="regular-text"
               <?php checked( 'yes', get_post_meta($post->ID, 'online_check', true) ); ?> />
        <label for="online_check" style="font-weight: 600; font-size: 15px">Online</label>
    </p>
    
    <p>
        <input type="checkbox" 
               name="offline_check" id="offline_check" 
               value="yes"  
               class="regular-text"
               <?php checked( 'yes', get_post_meta($post->ID, 'offline_check', true) ); ?> />
        <label for="offline_check" style="font-weight: 600; font-size: 15px">Offline</label>
    </p>

    
    <label for="online_offline_title_extra" style="font-weight: 600; font-size: 15px">Online Offline Title Extra:</label>
    <p>
        <input type="text" 
               name="online_offline_title_extra" id="online_offline_title_extra" 
               value="<?php echo get_post_meta($post->ID, 'online_offline_title_extra', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <label for="online_previous_price" style="font-weight: 600; font-size: 15px">Online Previous Price:</label>
    <p>
        <input type="text" 
               name="online_previous_price" id="online_previous_price" 
               value="<?php echo get_post_meta($post->ID, 'online_previous_price', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <label for="online_current_price" style="font-weight: 600; font-size: 15px">Online Current Price:</label>
    <p>
        <input type="text" 
               name="online_current_price" id="online_current_price" 
               value="<?php echo get_post_meta($post->ID, 'online_current_price', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <label for="offline_previous_price" style="font-weight: 600; font-size: 15px">Offline Previous Price:</label>
    <p>
        <input type="text" 
               name="offline_previous_price" id="offline_previous_price" 
               value="<?php echo get_post_meta($post->ID, 'offline_previous_price', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <label for="offline_current_price" style="font-weight: 600; font-size: 15px">Offline Current Price:</label>
    <p>
        <input type="text" 
               name="offline_current_price" id="offline_current_price" 
               value="<?php echo get_post_meta($post->ID, 'offline_current_price', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <p>
        <input type="checkbox" 
               name="english_free_class" id="english_free_class" 
               value="yes"  
               class="regular-text"
               <?php checked( 'yes', get_post_meta($post->ID, 'english_free_class', true) ); ?> />
        <label for="english_free_class" style="font-weight: 600; font-size: 15px">English Free Class</label>
    </p>
    <label for="english_free_class_text" style="font-weight: 600; font-size: 15px">English Free Class Text:</label>
    <p>
        <textarea name="english_free_class_text" placeholder='English Free Class Text' class="regular-text" rows="4" style="width: 100%;" >
            <?php echo get_post_meta($post->ID, 'english_free_class_text', true) ?>
        </textarea>
    </p>

    <label for="instructor_name" style="font-weight: 600; font-size: 15px">Instructor Name:</label>
    <p>
        <input type="text" 
               name="instructor_name" id="instructor_name" 
               value="<?php echo get_post_meta($post->ID, 'instructor_name', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="class_duration" style="font-weight: 600; font-size: 15px">Class Duration:</label>
    <p>
        <input type="text" 
               name="class_duration" id="class_duration" 
               value="<?php echo get_post_meta($post->ID, 'class_duration', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="number_of_lectures" style="font-weight: 600; font-size: 15px">Number Of Lectures:</label>
    <p>
        <input type="text" 
               name="number_of_lectures" id="number_of_lectures" 
               value="<?php echo get_post_meta($post->ID, 'number_of_lectures', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="course_language" style="font-weight: 600; font-size: 15px">Course Language:</label>
    <p>
        <input type="text" 
               name="course_language" id="course_language" 
               value="<?php echo get_post_meta($post->ID, 'course_language', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="certificate_message" style="font-weight: 600; font-size: 15px">Certificate Message:</label>
    <p>
        <input type="text" 
               name="certificate_message" id="certificate_message" 
               value="<?php echo get_post_meta($post->ID, 'certificate_message', true) ?>"  
               class="regular-text"
               style="width: 100%;" />
    </p>

    <label for="admission_button_text" style="font-weight: 600; font-size: 15px">Admission Button Text:</label>
    <p>
        <input type="text" 
               name="admission_button_text" id="admission_button_text" 
               value="<?php echo get_post_meta($post->ID, 'admission_button_text', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="admission_button_link" style="font-weight: 600; font-size: 15px">Admission Button Link:</label>
    <p>
        <input type="text" 
               name="admission_button_link" id="admission_button_link" 
               value="<?php echo get_post_meta($post->ID, 'admission_button_link', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>

    <label for="contact_number" style="font-weight: 600; font-size: 15px">Contact Number:</label>
    <p>
        <input type="text" 
               name="contact_number" id="contact_number" 
               value="<?php echo get_post_meta($post->ID, 'contact_number', true) ?>"  
               class="regular-text"
               style="width: 100%;" required/>
    </p>


    <?php
}


add_action('save_post', 'update_courses_metaboxes');
function update_courses_metaboxes($post_id) {
    if(isset($_POST['online_check'])){
        update_post_meta($post_id, 'online_check', trim( $_POST['online_check']) );
    }
    if(isset($_POST['offline_check'])){
        update_post_meta($post_id, 'offline_check', trim( $_POST['offline_check']) );
    }
    if(isset($_POST['online_offline_title_extra'])){
        update_post_meta($post_id, 'online_offline_title_extra', trim( $_POST['online_offline_title_extra']) );
    }
    if(isset($_POST['online_previous_price'])){
        update_post_meta($post_id, 'online_previous_price', trim( $_POST['online_previous_price']) );
    }
    if(isset($_POST['online_current_price'])){
        update_post_meta($post_id, 'online_current_price', trim( $_POST['online_current_price']) );
    }
    if(isset($_POST['offline_previous_price'])){
        update_post_meta($post_id, 'offline_previous_price', trim( $_POST['offline_previous_price']) );
    }
    if(isset($_POST['offline_current_price'])){
        update_post_meta($post_id, 'offline_current_price', trim( $_POST['offline_current_price']) );
    }
    if(isset($_POST['english_free_class'])){
        update_post_meta($post_id, 'english_free_class', trim( $_POST['english_free_class']) );
    }
    if(isset($_POST['english_free_class_text'])){
        update_post_meta($post_id, 'english_free_class_text', trim( $_POST['english_free_class_text'] ) );
    }
    if(isset($_POST['instructor_name'])){
        update_post_meta($post_id, 'instructor_name', trim( $_POST['instructor_name'] ) );
    }
    if(isset($_POST['class_duration'])){
        update_post_meta($post_id, 'class_duration', trim( $_POST['class_duration'] ) );
    }
    if(isset($_POST['number_of_lectures'])){
        update_post_meta($post_id, 'number_of_lectures', trim( $_POST['number_of_lectures'] ) );
    }
    if(isset($_POST['course_language'])){
        update_post_meta($post_id, 'course_language', trim( $_POST['course_language'] ) );
    }
    if(isset($_POST['certificate_message'])){
        update_post_meta($post_id, 'certificate_message', trim( $_POST['certificate_message'] ) );
    }
    if(isset($_POST['admission_button_text'])){
        update_post_meta($post_id, 'admission_button_text', trim( $_POST['admission_button_text'] ) );
    }
    if(isset($_POST['admission_button_link'])){
        update_post_meta($post_id, 'admission_button_link', trim( $_POST['admission_button_link'] ) );
    }
    if(isset($_POST['contact_number'])){
        update_post_meta($post_id, 'contact_number', trim( $_POST['contact_number'] ) );
    }
}