<?php

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Top News Bar', DMSRA_THEME_TEXT_DOMAIN ),
		'desc'             => esc_html__( 'Customize Top News Bar Section', DMSRA_THEME_TEXT_DOMAIN ),
		'id'               => 'dmsra_top_news_bar',
		'subsection'       => true,
		// 'customizer_width' => '400px',
		'fields'           => array(
            array(
				'id'       => 'dmsra_top_news_bar_left_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Top News Bar Left Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Top News Bar Left Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top News Bar Left Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'আপডেট তথ্যঃ',
			),
			array(
				'id'       => 'dmsra_top_news_bar_left_text_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Top News Bar Left Text Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Top News Bar Left Text Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#ffffff',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_top_news_bar_left_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Top News Bar Left Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Top News Bar Left Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#DC3545',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
            array(
				'id'       => 'dmsra_top_news_bar_right_text',
				'type'     => 'text',
				'title'    => esc_html__( 'Top News Bar Right Text', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Top News Bar Right Text', DMSRA_THEME_TEXT_DOMAIN ),
				'desc'     => esc_html__( 'Enter Top News Bar Right Text', DMSRA_THEME_TEXT_DOMAIN ),
				'default'  => 'ফ্রিল্যান্সিং উইথ ডিজিটাল মার্কেটিং এন্ড সপিফাই এবং ডিজিটাল মার্কেটিং সিওর সাকসেস অনলাইন এবং অফলাইন কোর্সে ভর্তি চলছে । ভর্তি চলবে আগামী ২৫-০১-২৪ তারিখ পর্যন্ত । ভর্তি বিষয়ক যেকোনো তথ্যের জন্য সরাসরি যোগাযোগ করুনঃ +8801615-684930 । হোয়াটসঅ্যাপ করুনঃ +8801615-684930 ।',
			),
			array(
				'id'       => 'dmsra_top_news_bar_right_text_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Top News Bar Right Text Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Top News Bar Right Text Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#ffffff',
				'output'      => array(
					'color'     => '.site-title, .wp-block-site-title a',
					'important' => true,
				),
				'transparent' => false,
				'validate'    => 'color',
			),
			array(
				'id'       => 'dmsra_top_news_bar_right_background_color',
				'type'     => 'color',
				'title'    => esc_html__( 'Top News Bar Right Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'subtitle' => esc_html__( 'Select Top News Bar Right Background Color', DMSRA_THEME_TEXT_DOMAIN ),
				'default'     => '#3BA038',
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