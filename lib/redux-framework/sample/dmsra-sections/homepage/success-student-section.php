<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => __( 'Homepage Success Student Section', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'       => esc_html__( 'Homepage Success Student Section', DMSRA_THEME_TEXT_DOMAIN ),
		'subsection' => true,
		'fields'     => array(
            array(
				'id'               => 'dmsra_homepage_success_section_box_1_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Box 1 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Box 1 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fas fa-user-graduate',
				// Disable auto-enqueue of stylesheet if present in the panel.
				'enqueue'          => true,
				// Disable auto-enqueue of stylesheet on the front-end.
				'enqueue_frontend' => true,
				// Stylesheet data.
				'stylesheet'       => array(
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css',
						'title'  => 'Material Icons',
						'prefix' => 'mdi-set',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/bootstrap-icons.min.css',
						'title'  => 'Bootstrap',
						'prefix' => 'bi',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/lineicons.css',
						'title'  => 'Line Icons',
						'prefix' => 'lni',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/devicon.min.css',
						'title'  => 'Dev Icons',
						'prefix' => '',
					),
				),
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_1_amount',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 1 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 1 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 1 Amount In Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '1200',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_1_sign',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 1 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 1 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 1 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_1_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 1 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 1 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 1 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'Online Students',
			),
            array(
				'id'               => 'dmsra_homepage_success_section_box_2_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Box 2 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Box 2 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fas fa-user-graduate',
				// Disable auto-enqueue of stylesheet if present in the panel.
				'enqueue'          => true,
				// Disable auto-enqueue of stylesheet on the front-end.
				'enqueue_frontend' => true,
				// Stylesheet data.
				'stylesheet'       => array(
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css',
						'title'  => 'Material Icons',
						'prefix' => 'mdi-set',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/bootstrap-icons.min.css',
						'title'  => 'Bootstrap',
						'prefix' => 'bi',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/lineicons.css',
						'title'  => 'Line Icons',
						'prefix' => 'lni',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/devicon.min.css',
						'title'  => 'Dev Icons',
						'prefix' => '',
					),
				),
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_2_amount',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 2 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 2 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 2 Amount In Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '800',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_2_sign',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 2 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 2 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 2 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_2_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 2 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 2 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 2 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'Offline Students',
			),
            array(
				'id'               => 'dmsra_homepage_success_section_box_3_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Box 3 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Box 3 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fas fa-user-graduate',
				// Disable auto-enqueue of stylesheet if present in the panel.
				'enqueue'          => true,
				// Disable auto-enqueue of stylesheet on the front-end.
				'enqueue_frontend' => true,
				// Stylesheet data.
				'stylesheet'       => array(
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css',
						'title'  => 'Material Icons',
						'prefix' => 'mdi-set',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/bootstrap-icons.min.css',
						'title'  => 'Bootstrap',
						'prefix' => 'bi',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/lineicons.css',
						'title'  => 'Line Icons',
						'prefix' => 'lni',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/devicon.min.css',
						'title'  => 'Dev Icons',
						'prefix' => '',
					),
				),
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_3_amount',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 3 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 3 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 3 Amount In Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '2000',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_3_sign',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 3 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 3 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 3 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_3_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 3 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 3 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 3 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'Total Students',
			),
            array(
				'id'               => 'dmsra_homepage_success_section_box_4_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Box 4 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Box 4 Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fas fa-users',
				// Disable auto-enqueue of stylesheet if present in the panel.
				'enqueue'          => true,
				// Disable auto-enqueue of stylesheet on the front-end.
				'enqueue_frontend' => true,
				// Stylesheet data.
				'stylesheet'       => array(
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/materialdesignicons.css',
						'title'  => 'Material Icons',
						'prefix' => 'mdi-set',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/bootstrap-icons.min.css',
						'title'  => 'Bootstrap',
						'prefix' => 'bi',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/lineicons.css',
						'title'  => 'Line Icons',
						'prefix' => 'lni',
					),
					array(
						'url'    => DMSRA_THEME_URL . 'assets/admin/css/redux-icon-css/devicon.min.css',
						'title'  => 'Dev Icons',
						'prefix' => '',
					),
				),
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_4_amount',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 4 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 4 Amount', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 4 Amount In Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '5000',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_4_sign',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 4 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 4 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 4 Sign', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+',
			),
			array(
				'id'       => 'dmsra_homepage_success_section_box_4_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Box 4 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Box 4 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Box 4 Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'Happy Clients',
			),
		),
	)
);
