<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Header Top Right', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Header Top Right Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_header_top_right',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
			array(
				'id'               => 'dmsra_header_top_right_company_facebook_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top Facebook Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top Facebook Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-facebook rounded-empty-circle shadow-sm',
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
				'id'       => 'dmsra_header_top_right_company_facebook_icon_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top Facebook Icon Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top Facebook Icon Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_facebook_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Facebook Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Facebook Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Facebook Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_facebook_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Facebook Link', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Facebook Link', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Facebook Link', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'https://www.facebook.com/dmsarabd',
			),
			array(
				'id'               => 'dmsra_header_top_right_company_youtube_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top Youtube Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top Youtube Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-youtube rounded-empty-circle shadow-sm',
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
				'id'       => 'dmsra_header_top_right_company_youtube_icon_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top Youtube Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top Youtube Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_youtube_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Youtube Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Youtube Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Youtube Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_youtube_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top Youtube Link', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top Youtube Link', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s Youtube Link', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'https://www.youtube.com/@DMSRA2019',
			),
			array(
				'id'               => 'dmsra_header_top_right_company_linkedin_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top LinedIn Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top LinedIn Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-linkedin rounded-empty-circle shadow-sm shadow rounded-circle rounded',
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
				'id'       => 'dmsra_header_top_right_company_linkedin_icon_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Header Top LinedIn Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Header Top LinedIn Icon Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_linkedin_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top LinedIn Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top LinedIn Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s LinedIn Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_linkedin_link',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top LinedIn Link', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top LinedIn Link', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s LinedIn Link', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '#',
			),
			array(
				'id'               => 'dmsra_header_top_right_company_whatsapp_icon',
				'type'             => 'icon_select',
				'title'            => esc_html__( 'Header Top WhatsApp Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle'         => esc_html__( 'Select Header Top WhatsApp Icon', DMSRA_THEME_TEXT_DOMAIN ),
				'default'          => 'fa fa-whatsapp rounded-empty-circle shadow-sm',
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
				'id'       => 'dmsra_header_top_right_company_whatsapp_icon_background_color',
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
				'id'       => 'dmsra_header_top_right_company_whatsapp_icon_font_size',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s WhatsApp Icon Font Size', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '16px',
			),
			array(
				'id'       => 'dmsra_header_top_right_company_whatsapp',
				'type'     => 'text',
				'title'    => esc_html__( 'Header Top WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Header Top WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Your Company&#39;s WhatsApp Number', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => '+8801615684930',
			),
		),
	)
);