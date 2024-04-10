<?php


defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Top Left', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Header Top Left Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_header_top_left',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'               => 'dmsra_header_top_left_company_whatsapp_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top WhatsApp Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top WhatsApp Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-fw fa-whatsapp me-2 fa-1x',
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
				'id'       => 'dmsra_header_top_left_company_whatsapp_icon_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top WhatsApp Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top WhatsApp Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_WhatsApp_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_whatsapp',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( ' Header Top WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+8801615684930',
			),
			array(
				'id'               => 'dmsra_header_top_left_company_phone_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top Phone Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top Phone Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-fw fa-phone me-2 fa-1x',
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
				'id'       => 'dmsra_header_top_left_company_phone_icon_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top Phone Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top Phone Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_phone_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Phone Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Phone Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Phone Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_phone',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Phone Number', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Phone Number', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Phone Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+8801615684930',
			),
			array(
				'id'               => 'dmsra_header_top_left_company_email_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top Email Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top Email Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-envelope fa-fw me-2',
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
				'id'       => 'dmsra_header_top_left_company_email_icon_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top Email Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top Email Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_email_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Email Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Email Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Email Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_left_company_email',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Email Address', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( ' Header Top Email Address', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Email Address', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'support@' . $_SERVER['HTTP_HOST'],
			),
		),
	)
);