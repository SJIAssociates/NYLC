<?php
/*

Footer Sign Up
Theme settings
Home Carousel

Landmark Contacts
Landmark Profile
LandMark: Tourist Vidoes
LandMark Location (And Sacred Sites)

Page: Sidebar
Page: News

Archive: Header Image

Event: Tickets
*/
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
				'value' => 'theme-general-settings',
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
	'title' => 'Theme Settings',
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
Name: Home Carousel Settings
Fields: image_carousel -> image
Location: Template: Home
*/
acf_add_local_field_group(array(
	'key' => 'group_5d91114c94437',
	'title' => 'Home::Carousel',
	'fields' => array(
		array(
			'key' => 'field_5d9113a086598',
			'label' => 'Image Carousel',
			'name' => 'image_carousel',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'table',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d9113aa86599',
					'label' => 'Image',
					'name' => 'image',
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
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'views/template-home.blade.php',
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
Name: Landmark::Contact
Fields: location_email,location_number
Location: Post_type -> Landmark
*/
acf_add_local_field_group(array(
	'key' => 'group_5d8bd9d7cf7d6',
	'title' => 'Landmark::Contact',
	'fields' => array(
		array(
			'key' => 'field_5d8bd9ee939bb',
			'label' => 'Location Email',
			'name' => 'location_email',
			'type' => 'email',
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
		),
		array(
			'key' => 'field_5d8bda18939bc',
			'label' => 'Phone Number',
			'name' => 'location_number',
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
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'landmark',
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
Name: Landmark::Profile
Fields: website,landmark_facebook,landmark_twitter
Location: Post_type -> Landmark
*/
acf_add_local_field_group(array(
	'key' => 'group_5d8bda97c0e79',
	'title' => 'Landmark::Profile',
	'fields' => array(
		array(
			'key' => 'field_5d8bda9d187d2',
			'label' => 'Website',
			'name' => 'website',
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
			'key' => 'field_5d8bdaa9187d3',
			'label' => 'Facebook',
			'name' => 'landmark_facebook',
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
			'key' => 'field_5d8bdab6187d4',
			'label' => 'Twitter',
			'name' => 'landmark_twitter',
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
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'landmark',
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
Name: Landmark::Tourist in Your Own Town
Fields: video_embed
Location: Post_type -> Landmark
*/
acf_add_local_field_group(array(
	'key' => 'group_5d8bdb591fede',
	'title' => 'Landmarks::Tourist in Your Own Town',
	'fields' => array(
		array(
			'key' => 'field_5d8bdb6295e0b',
			'label' => 'Video Embed',
			'name' => 'video_embed',
			'type' => 'oembed',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'width' => '',
			'height' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'landmark',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
/*
Name: Landmark::Tourist in Your Own Town
Fields: location
Location: Post_type -> Landmark & Site
*/
acf_add_local_field_group(array(
	'key' => 'group_5d6fdf13950f9',
	'title' => 'Location',
	'fields' => array(
		array(
			'key' => 'field_5d6fee69a854d',
			'label' => 'Location',
			'name' => 'location',
			'type' => 'google_map',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'center_lat' => '',
			'center_lng' => '',
			'zoom' => '',
			'height' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'site',
			),
		),
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'landmark',
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
Name: Archive Header images
Fields: Repeater
Location: Default Pages | Forms Pages
*/
acf_add_local_field_group(array(
	'key' => 'group_5d9604a4455fe',
	'title' => 'Archive::Headers',
	'fields' => array(
		array(
			'key' => 'field_5d9604b4464dd',
			'label' => 'Explore NY Image',
			'name' => 'explore_image',
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
		array(
			'key' => 'field_5d9604dd37dbf',
			'label' => 'Sacred Sites Image',
			'name' => 'sacred_sites_image',
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
Name: Page::News
Fields: category
Location: Default Pages
Purpose: Adding the news boxes to pages (mainly used for grant pages)
*/
acf_add_local_field_group(array(
	'key' => 'group_5d9628ce9600b',
	'title' => 'Page:News',
	'fields' => array(
		array(
			'key' => 'field_5d9628dc7eb0b',
			'label' => 'Category',
			'name' => 'category',
			'type' => 'taxonomy',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'taxonomy' => 'category',
			'field_type' => 'select',
			'allow_null' => 1,
			'add_term' => 0,
			'save_terms' => 0,
			'load_terms' => 0,
			'return_format' => 'object',
			'multiple' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'page_template',
				'operator' => '==',
				'value' => 'default',
			),
		),
	),
	'menu_order' => 10,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

/*
Name: Page::Sidebar
Fields: Repeater
Location: Default Pages | Forms Pages
*/
acf_add_local_field_group(array(
	'key' => 'group_5d79984523190',
	'title' => 'Page::Sidebar',
	'fields' => array(
		array(
			'key' => 'field_5d79985c0c7b1',
			'label' => 'Sidebar Content',
			'name' => 'sidebar_content',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'collapsed' => '',
			'min' => 0,
			'max' => 0,
			'layout' => 'block',
			'button_label' => '',
			'sub_fields' => array(
				array(
					'key' => 'field_5d7998ba0c7b2',
					'label' => 'Title',
					'name' => 'title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '33%',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'key' => 'field_5d7998c00c7bc',
					'label' => 'Button Text',
					'name' => 'cta_text',
					'instructions' => 'Text that appears in the button. The Button will be placed below the content.',
					'type' => 'text',
					'wrapper' => array(
						'width' => '33%',
						'class' => '',
						'id' => '',
					),
				),
				array(
					'key' => 'field_5d7998c00c7bd',
					'label' => 'Button Link',
					'name' => 'cta_link',
					'type' => 'page_link',
					'wrapper' => array(
						'width' => '33%',
						'class' => '',
						'id' => '',
					),
				),
				array(
					'key' => 'field_5d7998c00c7b3',
					'label' => 'Content',
					'name' => 'content',
					'type' => 'wysiwyg',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '100%',
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
		),
	),
	'location' => array(
			array(
				array(
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'default',
				),
			),
			array(
				array(
					'param' => 'post_template',
					'operator' => '==',
					'value' => 'views/template-form.blade.php',
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
	Name: Page::Sidebar
	Fields: Repeater
	Location: Default Pages | Forms Pages
	*/
	acf_add_local_field_group(array(
		'key' => 'group_eventticket',
		'title' => 'Tickets',
		'fields' => array(
			array(
				'key' => 'field_5d79985c0c7z1',
				'label' => 'Ticket Link',
				'name' => 'ticket_link',
				'type' => 'url',
				'instructions' => 'Copy/Paste the Event Brite or other Webpage URL below',
				'required' => 0,
				'conditional_logic' => 0,
			),
		),
		'location' => array(
				array(
					array(
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'tribe_events',
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
