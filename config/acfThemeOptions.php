<?php
if( function_exists('acf_add_local_field_group') ):
	/*
	Name: Footer Signup
	Fields: signup_form
	Location: Theme Options
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5d4af733c821c',
		'title' => 'Footer:SignupForm',
		'fields' => array(
			array(
				'key' => 'field_5d4af73d08d4b',
				'label' => 'Signup Form',
				'name' => 'signup_form',
				'type' => 'wysiwyg',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'tabs' => 'all',
				'toolbar' => 'full',
				'media_upload' => 1,
				'delay' => 0,
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-footer',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'normal',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	/*
	Name: Theme Settings
	Fields: logo, faceboook, twitter, youtube, instagram
	Location: side
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5d4af6ccac77d',
		'title' => 'Social Media Channels',
		'fields' => array(
			array(
				'key' => 'field_5d4af6ecad38e',
				'label' => 'Facebook',
				'name' => 'facebook',
				'type' => 'url',
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
			),
			array(
				'key' => 'field_5d4af6fbad38f',
				'label' => 'Twitter',
				'name' => 'twitter',
				'type' => 'url',
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
			),
			array(
				'key' => 'field_5d4af704ad390',
				'label' => 'Youtube',
				'name' => 'youtube',
				'type' => 'url',
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
			),
			array(
				'key' => 'field_5d4afe69113fb',
				'label' => 'Instagram',
				'name' => 'instagram',
				'type' => 'url',
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
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-footer',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	/*
	Name: Archive Header images
	Fields: Repeater
	Location: Explore NY | Sacred Sites | News | Success Stories
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5d9604a4455fe',
		'title' => 'Archive Headers',
		'fields' => array(
			array(
				'key' => 'field_5d9604b4464dd',
				'label' => 'Explore NY Image',
				'name' => 'explore_image',
				'type' => 'image',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array(
				'key' => 'field_5d9604dd37dbf',
				'label' => 'Sacred Sites Image',
				'name' => 'sacred_sites_image',
				'type' => 'image',
				'instructions' => '',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array(
				'key' => 'field_5d9604dd37a',
				'label' => 'News Image',
				'name' => 'news_image',
				'type' => 'image',
				'instructions' => '',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
			),
			array(
				'key' => 'field_5d9604dd37a',
				'label' => 'Success Stories Image',
				'name' => 'success_stories_archive_img',
				'type' => 'image',
				'instructions' => '',
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	/*
	Name: Header
	Fields: logo
	Location: side
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5d4af6ccacd',
		'title' => 'Header',
		'fields' => array(
			array(
				'key' => 'field_5d4af6d9ad38d',
				'label' => 'Logo',
				'name' => 'logo',
				'type' => 'image',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'array',
				'preview_size' => 'medium',
				'library' => 'all',
				'min_width' => '',
				'min_height' => '',
				'min_size' => '',
				'max_width' => '',
				'max_height' => '',
				'max_size' => '',
				'mime_types' => '',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	/*
	Name: API Keys
	Fields: map_api, typekit_id
	Location: side
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5d4af6dd',
		'title' => 'API Keys',
		'fields' => array(
			array(
				'key' => 'field_5d4af6',
				'label' => 'Google Maps API',
				'name' => 'google_maps_api',
				'type' => 'text',
				'instructions' => 'Enter the API Key to Enable Google Maps API.',
			),
			array(
				'key' => 'field_5d4df',
				'label' => 'Adobe Project ID',
				'name' => 'typekit_id',
				'type' => 'text',
				'instructions' => 'Enter the Project ID to the Adobe Fonts from your project.',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'theme-general-settings',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));
	/*
	Name: Email Experts
	Fields: Email | Page | page_or_email
	Location: side
	*/
	acf_add_local_field_group(array(
		'key' => 'group_5dbc737114c15',
		'title' => 'Email Experts',
		'fields' => array(
			array(
				'key' => 'field_5dbc750e2286d',
				'label' => 'Where Should the Link Go',
				'name' => 'page_or_email',
				'type' => 'button_group',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'choices' => array(
					'Email' => 'Email',
					'Page' => 'Page',
				),
				'allow_null' => 0,
				'default_value' => '',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
			array(
				'key' => 'field_5dbc737ce387f',
				'label' => 'Email',
				'name' => 'footer_email',
				'type' => 'email',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5dbc750e2286d',
							'operator' => '==',
							'value' => 'Email',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
			),
			array(
				'key' => 'field_5dbc76127fc48',
				'label' => 'Page',
				'name' => 'footer_page',
				'type' => 'link',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => array(
					array(
						array(
							'field' => 'field_5dbc750e2286d',
							'operator' => '==',
							'value' => 'Page',
						),
					),
				),
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
				'return_format' => 'url',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-footer',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;

/*
Set up Breadcrumbs Controller
*/
if( function_exists('acf_add_options_page') ) {

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Breadcrumbs',
		'menu_title'	=> 'Breadcrumbs',
		'parent_slug'	=> 'theme-general-settings',
	));

}
if( function_exists('acf_add_local_field_group') ):
	/*
	Name: Master Shutoff
	Fields: enable_breadcrumbs
	Location: side
	*/
	acf_add_local_field_group(array(
		'key' => 'breadcumb_option_1',
		'title' => 'Global Breadcrumbs Settings',
		'fields' => array(
			array(
				'key' => 'field_5db',
				'label' => 'Enable Breadcrumbs',
				'name' => 'enable_breadcrumbs',
				'type' => 'button_group',
				'choices' => array(
					'On' => 'On',
					'Off' => 'Off',
				),
				'allow_null' => 0,
				'default_value' => 'On',
				'layout' => 'horizontal',
				'return_format' => 'value',
			),
		),
		'location' => array(
			array(
				array(
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options-breadcrumbs',
				),
			),
		),
		'menu_order' => 0,
		'position' => 'side',
		'style' => 'default',
		'label_placement' => 'top',
		'instruction_placement' => 'label',
		'hide_on_screen' => '',
		'active' => true,
		'description' => '',
	));

endif;
