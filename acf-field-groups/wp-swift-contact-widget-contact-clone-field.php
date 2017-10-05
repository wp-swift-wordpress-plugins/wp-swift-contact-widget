<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59a03db60817c',
	'title' => 'WP Swift: Contact Widget - Contact Clone Field',
	'fields' => array (
		array (
			'key' => 'field_59a044b8d0f85',
			'label' => 'Options',
			'name' => 'display_options',
			'type' => 'checkbox',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array (
				'show' => 'Show',
				'label' => 'Label',
				'icon' => 'Icon',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array (
			),
			'layout' => 'horizontal',
			'toggle' => 0,
			'return_format' => 'value',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

endif;