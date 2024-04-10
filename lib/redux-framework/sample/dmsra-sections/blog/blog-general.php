<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Blog General', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Blog General', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_blog_general',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'           => 'dmsra_blog_page_breadcrumb_background_image',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Blog Page Breadcrumb Backgroung Image', DMSRA_THEME_TEXT_DOMAIN ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Blog Page Breadcrumb Backgroung Image', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', DMSRA_THEME_TEXT_DOMAIN ),
				'preview_size' => 'full',
                'default'      => array(
					'url'    => DMSRA_THEME_URL . 'assets/public/images/cover_5.jpg',
				),
			),
			array(
				'id'       => 'dmsra_blog_posts_per_page',
				'type'     => 'text',
				'title'    => esc_html__( 'Blog Posts Per Page', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Blog Posts Per Page', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Blog Posts Per Page', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 3,
			),
			array(
				'id'              => 'dmsra_blog_posts_column_number',
				'type'            => 'select',
				'title'           => esc_html__( 'Blog Posts Number Of Column', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'        => esc_html__( 'Blog Posts Number Of Column', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'            => esc_html__( 'Enter Blog Posts Number Of Column', DMSRA_THEME_TEXT_DOMAIN ),
				// 'customizer_only' => true,
				'options'         => array(
					'3' => esc_html__( 'Triple Column', DMSRA_THEME_TEXT_DOMAIN ),
					'4' => esc_html__( 'Tetra Column', DMSRA_THEME_TEXT_DOMAIN ),
				),
				'default'         => '3',
			),
		),
	)
);