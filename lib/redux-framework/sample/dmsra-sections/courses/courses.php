<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Courses Section', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Courses Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_courses_section',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'         => 'dmsra_courses_section_price',
				'type'       => 'editor',
				'full_width' => true,
				'title'      => esc_html__( 'Courses Section Price', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'   => esc_html__( 'Paste your HTML code of Courses Section Price', DMSRA_THEME_TEXT_DOMAIN ),
                'default'    => dmsra_courses_section_price(),
				'args'    => array(
					'wpautop' => false,
					'textarea_rows' => 20,
				),
			),
		),
	)
);


function dmsra_courses_section_price(){
    return '<div class="course-price"> 
    <span class="course-free-name">Online Course Fee </span><span class="course-price-section"><del>7,000.00</del> 5,000.00 BDT</span>
    </div> 
    <div class="course-price"> 
    <span class="course-free-name">Offline Course Fee </span><span class="course-price-section"><del>10,000.00</del> 7,000.00 BDT</span> 
	</div>';
}