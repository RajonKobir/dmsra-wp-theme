<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Ninja Form Values', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Ninja Form Values', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_ninja_form_general',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'       => 'dmsra_ninja_form_online_offline_field_key',
				'type'     => 'text',
				'title'    => esc_html__( 'Ninja Form Online Offline Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Ninja Form Online Offline Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Ninja Form Online Offline Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 10,
			),
			array(
				'id'       => 'dmsra_ninja_form_courses_field_key',
				'type'     => 'text',
				'title'    => esc_html__( 'Ninja Form Courses Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Ninja Form Courses Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Ninja Form Courses Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 11,
			),
			array(
				'id'       => 'dmsra_ninja_form_price_field_key',
				'type'     => 'text',
				'title'    => esc_html__( 'Ninja Form Price Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Ninja Form Price Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Ninja Form Price Field Key', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 12,
			),
		),
	)
);