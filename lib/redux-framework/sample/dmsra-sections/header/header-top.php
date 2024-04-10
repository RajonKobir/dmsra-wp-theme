<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Top', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Header Top Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_header_top',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'       => 'dmsra_header_top_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#051241',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
		),
	)
);