<?php


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_header',
		'desc'             => esc_html__( 'Header', DMSRA_THEME_TEXT_DOMAIN ),
		// 'customizer_width' => '400px',
		'icon'             => 'fas fa-heading',
	)
);
require_once Redux_Core::$dir . '../sample/dmsra-sections/header/header-top.php';
require_once Redux_Core::$dir . '../sample/dmsra-sections/header/header-top-left.php';
require_once Redux_Core::$dir . '../sample/dmsra-sections/header/header-top-right.php';
require_once Redux_Core::$dir . '../sample/dmsra-sections/header/menu-bar.php';
require_once Redux_Core::$dir . '../sample/dmsra-sections/header/top-news-bar.php';



Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Homepage', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_homepage',
		'desc'             => esc_html__( 'Blog', DMSRA_THEME_TEXT_DOMAIN ),
		// 'customizer_width' => '400px',
		'icon'             => 'fas fa-house',
	)
);
require_once Redux_Core::$dir . '../sample/dmsra-sections/homepage/homepage-slider.php';
require_once Redux_Core::$dir . '../sample/dmsra-sections/homepage/success-student-section.php';



Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Blog', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_blog',
		'desc'             => esc_html__( 'Blog', DMSRA_THEME_TEXT_DOMAIN ),
		// 'customizer_width' => '400px',
		'icon'             => 'fas fa-blog',
	)
);
require_once Redux_Core::$dir . '../sample/dmsra-sections/blog/blog-general.php';



Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Ninja Form', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_ninja_form',
		'desc'             => esc_html__( 'Ninja Form', DMSRA_THEME_TEXT_DOMAIN ),
		// 'customizer_width' => '400px',
		'icon'             => 'fas fa-user-ninja',
	)
);
require_once Redux_Core::$dir . '../sample/dmsra-sections/ninja-form/ninja-form.php';



// Redux::set_section(
// 	$opt_name,
// 	array(
// 		'title'            => esc_html__( 'Courses', DMSRA_THEME_TEXT_DOMAIN ),
// 		'id'               => 'dmsra_courses',
// 		'desc'             => esc_html__( 'Courses', DMSRA_THEME_TEXT_DOMAIN ),
// 		// 'customizer_width' => '400px',
// 		'icon'             => 'fas fa-user-graduate',
// 	)
// );
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/courses.php';
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/course-1.php';
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/course-2.php';
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/course-3.php';
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/course-4.php';
// require_once Redux_Core::$dir . '../sample/dmsra-sections/courses/course-5.php';