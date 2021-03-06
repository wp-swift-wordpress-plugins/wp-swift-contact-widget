<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array (
	'key' => 'group_59a03d144191c',
	'title' => 'WP Swift: Contact Widget',
	'fields' => array (
		array (
			'key' => 'field_59a03d397a114',
			'label' => 'Widget Title',
			'name' => 'widget_title',
			'type' => 'text',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59a03d6e7a115',
						'operator' => '!=',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array (
			'key' => 'field_59a03d6e7a115',
			'label' => 'Use Site Title',
			'name' => 'use_site_title',
			'type' => 'true_false',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array (
			'key' => 'field_59a03e8bd34aa',
			'label' => 'Address',
			'name' => 'address',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a03db60817c',
			),
			'display' => 'seamless',
			'layout' => 'table',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array (
			'key' => 'field_59a040414de0c',
			'label' => 'Phone',
			'name' => 'phone',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a03db60817c',
			),
			'display' => 'seamless',
			'layout' => 'table',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array (
			'key' => 'field_59a040ffa3fcb',
			'label' => 'Mobile',
			'name' => 'mobile',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a03db60817c',
			),
			'display' => 'seamless',
			'layout' => 'table',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array (
			'key' => 'field_59a04128a3fcc',
			'label' => 'Email',
			'name' => 'email',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a03db60817c',
			),
			'display' => 'seamless',
			'layout' => 'table',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array (
			'key' => 'field_59a04150a3fcd',
			'label' => 'Opening Hours',
			'name' => 'opening_hours',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a03db60817c',
			),
			'display' => 'seamless',
			'layout' => 'table',
			'prefix_label' => 1,
			'prefix_name' => 1,
		),
		array (
			'key' => 'field_59a0418ac8220',
			'label' => '',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'The above fields must set in <b>Contact Details</b> page.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array (
			'key' => 'field_59a043cd8689d',
			'label' => 'Social Media',
			'name' => 'social_media',
			'type' => 'clone',
			'value' => NULL,
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array (
				array (
					array (
						'field' => 'field_59a03d6e7a115',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array (
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'clone' => array (
				0 => 'group_59a042266fd7b',
			),
			'display' => 'seamless',
			'layout' => 'block',
			'prefix_label' => 0,
			'prefix_name' => 0,
		),
		array (
			'key' => 'field_59a71b5715cbf',
			'label' => 'Additional Settings',
			'name' => 'additional_settings',
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
				'remove_address_break' => 'Remove line breaks from address',
			),
			'allow_custom' => 0,
			'save_custom' => 0,
			'default_value' => array (
			),
			'layout' => 'vertical',
			'toggle' => 0,
			'return_format' => 'value',
		),
	),
	'location' => array (
		array (
			array (
				'param' => 'widget',
				'operator' => '==',
				'value' => 'wp_swift_contact_widget',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 1,
	'description' => '',
));

endif;