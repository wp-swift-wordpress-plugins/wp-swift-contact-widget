<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59a042266fd7b',
	'title' => 'WP Swift: Contact Widget - Social Clone',
	'fields' => array (
		array (
			'key' => 'field_59a0425ca4516',
			'label' => 'Social Media Settings',
			'name' => 'social_media_settings',
			'type' => 'radio',
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
				'none' => 'None',
				'icon' => 'Icon',
				'text' => 'Text',
				'icons_text' => 'Both',
			),
			'allow_null' => 0,
			'other_choice' => 0,
			'save_other_choice' => 0,
			'default_value' => 'none',
			'layout' => 'horizontal',
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