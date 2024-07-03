<?php if ( ! defined("WOODMART_THEME_DIR")) exit("No direct script access allowed");

/**
 * ------------------------------------------------------------------------------------------------
 * Default header builder settings
 * ------------------------------------------------------------------------------------------------
 */

$header_settings = array(
	'overlap' => array(
		'id' => 'overlap',
		'title' => esc_html__( 'Make it overlap', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'عمومی',
		'value' => false,
		'description' => esc_html__( 'Make the header overlap the content.', 'woodmart' ),
	),
	'boxed' => array(
		'id' => 'boxed',
		'title' => esc_html__( 'Make it boxed', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'عمومی',
		'value' => false,
		'description' => esc_html__( 'The header will be boxed instead of full width', 'woodmart' ),
		'requires' => array(
			'overlap' => array(
				'comparison' => 'equal',
				'value' => true
			),
	  	),
	),
	'full_width' => array(
		'id' => 'full_width',
		'title' => esc_html__( 'Full width header', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'عمومی',
		'value' => false,
		'description' => esc_html__( 'Full width layout for the header container.', 'woodmart' ),
	),
	'dropdowns_dark' => array(
		'id' => 'dropdowns_dark',
		'title' => esc_html__( 'Header dropdowns dark', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'عمومی',
		'value' => false,
		'description' => esc_html__( 'Make all menu, shopping cart, search, mobile menu dropdowns in dark color scheme.', 'woodmart' ),
	),
	'sticky_shadow' => array(
		'id' => 'sticky_shadow',
		'title' => esc_html__( 'Sticky header shadow', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'سربرگ چسبان',
		'value' => true,
		'description' => esc_html__( 'Add a shadow for the header when it is sticked.', 'woodmart' ),
	),
	'hide_on_scroll' => array(
		'id' => 'hide_on_scroll',
		'title' => esc_html__( 'Hide when scrolling down', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'سربرگ چسبان',
		'value' => false,
		'description' => esc_html__( 'Hides the sticky header when you scroll the page down. And shows only when you scroll top.', 'woodmart' ),
	),
	'sticky_effect' => array(
	  'id' => 'sticky_effect',
	  'title' => esc_html__( 'Sticky effect', 'woodmart' ),
	  'type' => 'selector',
	  'tab' => 'سربرگ چسبان',
	  'value' => 'stick',
	  'options' => array(
		'stick' => array(
		  'value' => 'stick',
		  'label' => esc_html__( 'Stick on scroll', 'woodmart' ),
		),
		'slide' => array(
		  'value' => 'slide',
		  'label' => esc_html__( 'Slide after scrolled down', 'woodmart' ),
		),
	  ),
	  'description' => esc_html__( 'You can choose between two types of sticky header effects.', 'woodmart' ),
	),
	'sticky_clone' => array(
		'id' => 'sticky_clone',
		'title' => esc_html__( 'Sticky header clone', 'woodmart' ),
		'type' => 'switcher',
		'tab' => 'سربرگ چسبان',
		'value' => false,
		'requires' => array(
		  'sticky_effect' => array(
			'comparison' => 'equal',
			'value' => 'slide'
		  )
		),
		'description' => esc_html__( 'Sticky header will clone elements from the header (logo, menu, search and shopping cart widget) and show them in one line.', 'woodmart' ),
	),
	'sticky_height' => array(
	  'id' => 'sticky_height',
	  'title' => esc_html__( 'Sticky header height', 'woodmart' ),
	  'type' => 'slider',
	  'tab' => 'سربرگ چسبان',
	  'from' => 0,
	  'to'=> 200,
	  'value' => 50,
	  'units' => 'px',
	  'description' => esc_html__( 'Determine header height for sticky header value in pixels.', 'woodmart' ),
	  'requires' => array(
		'sticky_clone' => array(
		  'comparison' => 'equal',
		  'value' => true
		),
		'sticky_effect' => array(
		  'comparison' => 'equal',
		  'value' => 'slide'
		)
	  ),
	),
);

return apply_filters( 'woodmart_default_header_settings', $header_settings );
