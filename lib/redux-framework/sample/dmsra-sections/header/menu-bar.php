<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Top Menu Bar', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Top Menu Bar Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_top_menu_bar',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'           => 'dmsra_top_menu_bar_logo',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Top Logo Image', DMSRA_THEME_TEXT_DOMAIN ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Top Logo Image', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', DMSRA_THEME_TEXT_DOMAIN ),
				'preview_size' => 'full',
                'default'      => array(
					'url'    => DMSRA_THEME_URL . 'assets/public/images/logo.jpg',
				),
			),
			array(
				'id'       => 'dmsra_top_menu_bar_logo_width',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Logo Image Width', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Logo Image Width', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top Logo Image Width (Only Positive Integar Number)', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '190',
			),
			array(
				'id'       => 'dmsra_top_menu_bar_logo_height',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Logo Image Height', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Logo Image Height', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top Logo Image Height (Only Positive Integar Number)', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '90',
			),
			array(
				'id'       => 'dmsra_top_menu_bar_logo_margin_top',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Logo Image Margin Top', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Logo Image Margin Top', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top Logo Image Margin Top', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '0',
			),
			array(
				'id'       => 'dmsra_top_menu_bar_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Top Menu Bar Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Top Menu Bar Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#1B75B8',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_top_menu_bar_height',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Menu Bar Height', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Menu Bar Height', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top Menu Bar Height', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '70px',
			),
		),
	)
);