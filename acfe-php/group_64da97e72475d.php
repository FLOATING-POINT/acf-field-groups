<?php 

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_64da97e72475d',
	'title' => 'Clients',
	'fields' => array(
		array(
			'allow_backendsearch' => false,
			'show_column_filter' => false,
			'allow_bulkedit' => 1,
			'allow_quickedit' => 1,
			'show_column' => 0,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_532348f7ef3ba',
			'label' => 'Client logo',
			'name' => 'client_logo',
			'aria-label' => '',
			'type' => 'image',
			'instructions' => 'Please ensure the logo is on a white or transparent background, is centered and fits within the outer bounds of this <a href="http://dev.fswdesign.com/wp-content/uploads/logo-template.psd" target="_blank" download >PSD template file</a>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => 'client-logo',
				'id' => '',
			),
			'uploader' => '',
			'return_format' => 'id',
			'acfe_thumbnail' => 1,
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'preview_size' => 'thumbnail',
			'library' => 'all',
		),
		array(
			'allow_backendsearch' => false,
			'show_column_filter' => false,
			'allow_bulkedit' => false,
			'allow_quickedit' => false,
			'show_column' => false,
			'show_column_weight' => 1000,
			'show_column_sortable' => false,
			'key' => 'field_5323490aef3bb',
			'label' => 'Testimonials',
			'name' => 'testimonials',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'acfe_repeater_stylised_button' => 1,
			'layout' => 'table',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => 'field_53234917ef3bc',
			'button_label' => 'Add testimonial',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'allow_backendsearch' => false,
					'show_column_filter' => false,
					'allow_bulkedit' => false,
					'allow_quickedit' => false,
					'show_column' => false,
					'show_column_weight' => 1000,
					'show_column_sortable' => false,
					'key' => 'field_53234923ef3bd',
					'label' => 'The client name / testimonial author',
					'name' => 'author',
					'aria-label' => '',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'formatting' => 'none',
					'maxlength' => '',
					'parent_repeater' => 'field_5323490aef3bb',
				),
				array(
					'allow_backendsearch' => false,
					'show_column_filter' => false,
					'allow_bulkedit' => false,
					'allow_quickedit' => false,
					'show_column' => false,
					'show_column_weight' => 1000,
					'show_column_sortable' => false,
					'key' => 'field_53234917ef3bc',
					'label' => 'The testimonial',
					'name' => 'the_testimonial',
					'aria-label' => '',
					'type' => 'textarea',
					'instructions' => 'The client testimonial',
					'required' => 1,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'maxlength' => '',
					'rows' => '',
					'new_lines' => '',
					'acfe_textarea_code' => 0,
					'parent_repeater' => 'field_5323490aef3bb',
				),
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'excerpt',
		1 => 'discussion',
		2 => 'comments',
		3 => 'revisions',
		4 => 'slug',
		5 => 'author',
		6 => 'format',
		7 => 'page_attributes',
		8 => 'categories',
		9 => 'tags',
		10 => 'send-trackbacks',
	),
	'active' => true,
	'description' => '',
	'show_in_rest' => 0,
	'acfe_display_title' => '',
	'acfe_autosync' => array(
		0 => 'php',
		1 => 'json',
	),
	'acfe_form' => 0,
	'show_in_graphql' => 1,
	'graphql_field_name' => 'clients',
	'map_graphql_types_from_location_rules' => 0,
	'graphql_types' => '',
	'qef_simple_location_rules' => 0,
	'acfe_meta' => '',
	'acfe_note' => '',
	'modified' => 1721076804,
));

endif;