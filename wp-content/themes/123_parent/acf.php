<?php 
//
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'general-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-admin-settings',
		'redirect'		=> false,
		'position'      => 7,
	));

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Areas Served',
		'menu_slug' 	=> 'areas-served-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-location-alt',
		'redirect'		=> false,
		'position'      => 81,
	));

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'About',
		'menu_slug' 	=> 'about-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-groups',
		'redirect'		=> false,
		'position'      => 80,
	));

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Gallery',
		'menu_slug' 	=> 'gallery-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-images-alt2',
		'redirect'		=> false,
		'position'      => 85,
	));	

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Services',
		'menu_slug' 	=> 'services-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-admin-tools',
		'redirect'		=> false,
		'position'      => 89,
	));	

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Testimonials',
		'menu_slug' 	=> 'testimonials-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-format-quote',
		'redirect'		=> false,
		'position'      => 90,
	));

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Locations',
		'menu_slug' 	=> 'locations-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-location-alt',
		'redirect'		=> false,
		'position'      => 85,
	));

	acf_add_options_page(array(
		'page_title' 	=> ' ',
		'menu_title'	=> 'Menu',
		'menu_slug' 	=> 'menu-settings',
		'capability'	=> 'read_private_posts',
		'icon_url'      => 'dashicons-feedback',
		'redirect'		=> false,
		'position'      => 86,
	));
}

if( !function_exists('add_acf_fields') ){
	function add_acf_fields() {
		
		// Areas Served Settings

		acf_add_local_field_group(array(
			'key' => 'group_1',
			'title' => ' ',
			'fields' => array (
				array(
					'key' => 'field_2137dsa12',
					'label' => 'Areas Served',
					'type' => 'tab',
				),
				array (
					'key' => 'field_1',
					'label' => 'Locations',
					'name' => 'locations',
					'type' => 'repeater',
					'button_label' => 'Add Location',
					'instructions' => 'No more than 1 zip code per city!',
					'sub_fields' => array(
						array(
							'key' => 'field_2',
							'label' => 'Zip Code',
							'name' => 'zip',
							'type' => 'text',
							'maxlength' => '5',
							'required' => true,
							'wrapper' => array(
								'width' => '12',
							),
						),
						array(
							'key' => 'field_223',
							'label' => 'Area Image',
							'name' => 'area-image',
							'type' => 'image',
							'return_format' => 'url',
							'preview_size' => 'medium',
							'required' => true,
						),
					),
				),
				array(
					'key' => 'field_217hdagad',
					'label' => 'Header Settings',
					'type' => 'tab',
				),
				array(
					'key' => 'field_afd9zx7',
					'label' => 'Hero Image',
					'type' => 'image',
					'return_format' => 'url',
					'name' => 'areas-served-bg',
				),	
				array(
					'key' => 'field_1098123ydf',
					'label' => 'Slogan',
					'type' => 'textarea',
					'new_lines' => 'br',
					'name' => 'areas-served-slogan',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'areas-served-settings',
					),
				),
			),
		));




		// About Settings 

		acf_add_local_field_group(array(
			'key' => 'group_2',
			'title' => ' ',
			'fields' => array (
				array(
					'key' => 'field_e8173asf',
					'label' => 'About Us',
					'type' => 'tab',
				),
				array(
					'key' => 'field_082117',
					'label' => 'Page Option Toggle',
					'type' => 'select',
					'name' => 'company-page-option-toggle',
					'choices' => array(
						'option1' => 'Company Bio',
						'option2' => 'Staff Profiles',
					),
					'instructions' => 'Option1 will allow you to have a subheader underneath the hero header and a content block below that. Option2 will allow you to add a list of employees.',
					'default_value' => array(
						0 => 'option1',
					),
					'layout' => 'horizontal',
					'toggle' => 0,
					'return_format' => 'value',
					'ui' => 1,
					'ajax' => 1,
				),
				array(
					'key' => 'field_9337',
					'label' => 'Company Subheader',
					'type' => 'textarea',
					'name' => 'company-subheader',
					'new_lines' => 'br',
					'instructions' => 'Keep it short & sweet here. Use the content field below for the full info.',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_082117',
								'operator' => '==',
								'value' => 'option1',
							),
						),
					),
				),
				array(
					'key' => 'field_9377112',
					'label' => 'Company Employees',
					'name' => 'company-employee-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Employee',
					'sub_fields' => array(
						array(
							'key' => 'field_8337111',
							'label' => 'Basic Info',
							'type' => 'tab',
							'name' => 'company-employee-basic-info-settings',
						),
						array(
							'key' => 'field_387600',
							'label' => 'Image',
							'type' => 'image',
							'name' => 'company-employee-image',
							'return_format' => 'url',
							'preview_size' => 'medium',
							'instructions' => 'Please use as close to a square image as possible',
						),
						array(
							'key' => 'field_38760ff0',
							'label' => 'Name',
							'type' => 'text',
							'name' => 'company-employee-name',
						),
						array(
							'key' => 'field_3876d00',
							'label' => 'Title',
							'type' => 'text',
							'name' => 'company-employee-title',
						),
						array(
							'key' => 'field_38760fa0',
							'label' => 'Description',
							'type' => 'textarea',
							'name' => 'company-employee-description',
							'new_lines' => 'br',
							'maxlength' => '330',
							'instructions' => 'Limited to 330 characters',
						),
						array(
							'key' => 'field_972hdsaf',
							'label' => 'Social Settings',
							'type' => 'tab',
							'name' => 'company-employee-social-settings',
						),
						array(
							'key' => 'field_9736161',
							'label' => 'Facebook Enabled?',
							'type' => 'true_false',
							'name' => 'company-employee-facebook-toggle',
							'wrapper' => array(
								'width' => '20',
							),
						),
						array(
							'key' => 'field_9837ffd78',
							'label' => 'URL',
							'name' => 'company-employee-facebook-url',
							'type' => 'url',
							'wrapper' => array(
								'width' => '80',
							),
						),
						array(
							'key' => 'field_9736f161',
							'label' => 'Twitter Enabled?',
							'type' => 'true_false',
							'name' => 'company-employee-twitter-toggle',
							'wrapper' => array(
								'width' => '20',
							),
						),
						array(
							'key' => 'field_98f37ffd78',
							'label' => 'URL',
							'name' => 'company-employee-twitter-url',
							'type' => 'url',
							'wrapper' => array(
								'width' => '80',
							),
						),
						array(
							'key' => 'field_9736dd161',
							'label' => 'LinkedIn Enabled?',
							'type' => 'true_false',
							'name' => 'company-employee-linkedin-toggle',
							'wrapper' => array(
								'width' => '20',
							),
						),
						array(
							'key' => 'field_9837ffvvd78',
							'label' => 'URL',
							'name' => 'company-employee-linkedin-url',
							'type' => 'url',
							'wrapper' => array(
								'width' => '80',
							),
						),
						array(
							'key' => 'field_973a6161',
							'label' => 'Google+ Enabled?',
							'type' => 'true_false',
							'name' => 'company-employee-googleplus-toggle',
							'wrapper' => array(
								'width' => '20',
							),
						),
						array(
							'key' => 'field_9837ffld78',
							'label' => 'URL',
							'name' => 'company-employee-googleplus-url',
							'type' => 'url',
							'wrapper' => array(
								'width' => '80',
							),
						),
					),
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_082117',
								'operator' => '==',
								'value' => 'option2',
							),
						),
					),
					'layout' => 'block',
				),
				array (
					'key' => 'field_4',
					'label' => 'Content',
					'name' => 'company-content',
					'type' => 'wysiwyg',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_082117',
								'operator' => '==',
								'value' => 'option1',
							),
						),
					),
				),
				array(
					'key' => 'field_217dafy',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_3',
					'label' => 'Hero Image',
					'name' => 'company-bg',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_83712616',
					'label' => 'Slogan',
					'type' => 'textarea',
					'name' => 'company-header',
					'default_value' => 'About Us',
					'new_lines' => 'br',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'about-settings',
					),
				),
			),
		));


		// Gallery Settings 

		acf_add_local_field_group(array(
			'key' => 'group_3',
			'title' => ' ',
			'fields' => array (
				array(
					'key' => 'field_1237adhfuh',
					'label' => 'Galleries',
					'type' => 'tab',
				),
				array (
					'key' => 'field_6',
					'label' => 'Galleries',
					'name' => 'gallery-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Gallery',
					'layout' => 'row',
					'sub_fields' => array(
						array(
							'key' => 'field_7',
							'name' => 'gallery-name',
							'label' => 'Gallery Name',
							'type' => 'text',
							'required' => true,
						),
						array(
							'key' => 'field_8',
							'name' => 'gallery-gallery',
							'label' => 'Gallery',
							'type' => 'gallery',
							'required' => true,
						),
					),
				),
				array(
					'key' => 'field_21803yaf',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_5',
					'label' => 'Hero Image',
					'name' => 'gallery-bg',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_12dsahgdafe',
					'label' => 'Slogan',
					'type' => 'textarea',
					'new_lines' => 'br',
					'name' => 'gallery-slogan',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'gallery-settings',
					),
				),
			),
		));


		// Services Settings 

		acf_add_local_field_group(array(
			'key' => 'group_4',
			'title' => ' ',
			'fields' => array (
				
				array(
					'key' => 'field_kpfh123',
					'label' => 'List of Services',
					'type' => 'tab',
				),
				array(
					'key' => 'field_10',
					'label' => 'Services',
					'name' => 'services-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Service',
					'sub_fields' => array(
						array(
							'key' => 'field_11',
							'label' => 'Image',
							'name' => 'service-image',
							'type' => 'image',
							'return_format' => 'url',
							'preview_size' => 'medium',
							'required' => true,
						),
						array(
							'key' => 'field_12',
							'label' => 'Name',
							'name' => 'service-name',
							'type' => 'text',
							'required' => true,
						),
						array(
							'key' => 'field_13',
							'label' => 'Description',
							'name' => 'service-description',
							'type' => 'textarea',
							'instructions' => 'Be descriptive here. But not too much so customers don\'t pull a tl;dr.',
							'new_lines' => 'br',
							'required' => true,
						),
						array(
							'key' => 'field_1716121364',
							'label' => 'Price',
							'name' => 'service-price',
							'type' => 'text',
						),
					),
				),
				array(
					'key' => 'field_m213hadf',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_9',
					'label' => 'Hero Image',
					'name' => 'services-bg',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
					'instructions' => 'Add a picture or else the image placeholder defined in General Settings > Sitewide Misc. will be used.',
				),
				array(
					'key' => 'field_udfaoh12',
					'label' => 'Slogan',
					'name' => 'service-slogan',
					'type' => 'textarea',
					'new_lines' => 'br',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'services-settings',
					),
				),
			),
		));


		// General Settings 

		acf_add_local_field_group(array(
			'key' => 'group_5',
			'title' => ' ',
			'fields' => array (
				array(
					'key' => 'field_8b7ahnwfe',
					'message' => '<h1>Click on a tab below to see its corresponding settings. Click "Update" in the top right to save.</h1>',
					'type' => 'message',
				),
				array(
					'key' => 'field_876646',
					'label' => '1. Company Info',
					'name' => 'company-info',
					'type' => 'tab',
				),	
				array(
					'key' => 'field_npy320af',
					'label' => 'Company Name',
					'name' => 'site_title',
					'type' => 'text',
				),
				array(
					'key' => 'field_npy320zdfa1212af',
					'label' => 'Google Description',
					'name' => 'tagline',
					'type' => 'text',
				),
				array(
					'key' => 'field_8372zzzn12',
					'label' => 'Company Logo',
					'name' => 'logo-type-switch',
					'type' => 'select',
					'instructions' => 'This allows you to switch between providing a custom logo or creating one from the site name.<br/><br/><strong style="color:blue;">***IMPORTANT: IF YOU SELECT TEXT YOU MUST CLICK UPDATE TWICE FOR THIS CHANGE TO TAKE AFFECT***</strong><br/>An image will automatically be generated containing the text from Company Name which should be short and sweet (under 24 characters).',
					'choices' => array(
						'logo' => 'Logo',
						'text' => 'Text',
					),
					'default_value' => array(
						'logo' => 'Logo',
					),
				),
				array(
					'key' => 'field_2343135',
					'label' => 'Site Logo',
					'name' => 'general-logo',
					'type' => 'image',
					'return_format' => 'url',
					'instructions' => 'Use a light version or else it won\'t show up very well. This field is required. PNG or another web-friendly format with an alpha channel preferred.',
					'conditional_logic' => array(
						array(
							array(
								'field' => 'field_8372zzzn12',
								'operator' => '==',
								'value' => 'logo',
							),
						)
					),
				),		
				array(
					'key' => 'field_bdaa98',
					'label' => 'Company Address',
					'name' => 'social-address',
					'type' => 'google_map',
					'center_lat' => '40.141256',	
					'center_lng' => '-97.681034',
					'instructions' => 'This is the address that appears in the footer. If left blank it will not show up.',
				),
				array(
					'key' => 'field_zifhef',
					'label' => 'Company Address Line 2',
					'name' => 'social-address-line2',
					'type' => 'text',
					'instructions' => 'This is the second line of the address provided above which will be inserted before the first comma. Useful for suite number, apartment number, floor number etc.',
				),
				array(
					'key' => 'field_8378888',
					'label' => 'Company Phone Number',
					'name' => 'social-phone-number',
					'type' => 'text',
					'instructions' => 'Must be in 555-555-5555 format. Leave it blank if you don\'t want your company phone number to show up in the footer.',
				),
				array(
					'key' => 'field_8378ddf888',
					'label' => 'Company Fax Number',
					'name' => 'social-fax-number',
					'type' => 'text',
					'instructions' => 'Must be in 555-555-5555 format. Leave it blank if you don\'t want your company phone number to show up in the footer.',
				),	
				array(
					'key' => 'field_padfh123ad',
					'label' => '2. Colors',
					'type' => 'tab',
				),
				array(
					'key' => 'field_8y3b123',
					'label' => 'Primary Color On/Off',
					'type' => 'true_false',
					'name' => 'primary_color_toggle',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71b1b21312',
					'label' => 'Primary Color',
					'type' => 'color_picker',
					'name' => 'primary_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_8y3ab123',
					'label' => 'Background Color On/Off',
					'type' => 'true_false',
					'name' => 'background_color_toggle',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71b1bdasf21312',
					'label' => 'Background Color',
					'type' => 'color_picker',
					'name' => 'background_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_mpzdgh12',
					'label' => 'Footer Grey',
					'type' => 'true_false',
					'name' => 'footer_grey',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71b1bdaasf21312',
					'label' => 'Footer Grey Color',
					'type' => 'color_picker',
					'name' => 'footer_grey_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_21hfpgh12',
					'label' => 'Medium Grey',
					'type' => 'true_false',
					'name' => 'medium_grey',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71bzceqfssf21312',
					'label' => 'Medium Grey Color',
					'type' => 'color_picker',
					'name' => 'medium_grey_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_21hpppph12',
					'label' => 'Light Grey',
					'type' => 'true_false',
					'name' => 'light_grey',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_713332',
					'label' => 'Light Grey Color',
					'type' => 'color_picker',
					'name' => 'light_grey_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_21hfp0000gh12',
					'label' => 'Estimate Bar',
					'type' => 'true_false',
					'name' => 'estimate_bar',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71bzc00002',
					'label' => 'Estimate Bar Color',
					'type' => 'color_picker',
					'name' => 'estimate_bar_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_21hiiiifpgh12',
					'label' => 'Header Tint',
					'type' => 'true_false',
					'name' => 'header_tint',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_zpzpzf21312',
					'label' => 'Header Tint Color',
					'type' => 'color_picker',
					'name' => 'header_tint_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_21hfpllllgh12',
					'label' => 'Footer BG',
					'type' => 'true_false',
					'name' => 'footer_bg',
					'wrapper' => array(
						'width' => '10',
					),
				),
				array(
					'key' => 'field_71bzof312',
					'label' => 'Footer BG Color',
					'type' => 'color_picker',
					'name' => 'footer_bg_color',
					'wrapper' => array(
						'width' => '90',
					),
				),
				array(
					'key' => 'field_218372173',
					'label' => '3. Home',
					'name' => 'home-settings',
					'type' => 'tab',
				),
				array(
					'key' => 'field_2391274',
					'label' => 'Slider Tagline',
					'name' => 'home-hero-header-text',
					'type' => 'text',
					'instructions' => 'This is the text that appears on the homepage section',
				),
				array(
					'key' => 'field_14',
					'label' => 'Slider Images',
					'name' => 'general-home-slider',
					'type' => 'repeater',
					'button_label' => 'Add Slide',
					'min' => 3,
					'instructions' => 'You need a minimum of 3 slides or else the default images will be used instead.',
					'sub_fields' => array(
						array(
							'key' => 'field_166',
							'label' => 'Image',
							'name' => 'general-home-slider-image',
							'type' => 'image',
							'preview_size' => 'medium',
							'return_format' => 'url',
						),
					),
				),
				
				array(
					'key' => 'field_128372613bad21',
					'label' => '4. Main Menu',
					'type' => 'tab',
				),
				array(
					'key' => 'field_abdh3hd',
					'label' => 'Dark or Light Header/Footer?',
					'type' => 'select',
					'name' => 'general-theme-select',
					'choices' => array(
						'dark' => 'Dark',
						'light' => 'Light',
					),
					'default_value' => array(
						'dark' => 'Dark',
					),
				),
				array(
					'key' => 'field_b78h32asdfmsda',
					'label' => 'Don\'t Fade-In Nav Background Tint?',
					'type' => 'true_false',
					'name' => 'nav-fadein-toggle',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnkpda3',
					'label' => 'Invert Header/Footer Logo Colors?',
					'type' => 'true_false',
					'default_value' => false,
					'name' => 'general-theme-invert-headerfooter-logo-colors',
					'wrapper' => array(
						'width' => '25',
					),
				),	
				
				array(
					'key' => 'field_182163124',
					'label' => 'Quickquote Button Text',
					'type' => 'text',
					'name' => 'quickquote-button-text',
					'default_value' => 'Quick Quote',
					'maxlength' => '11',
					'instructions' => 'Max length of 11 otherwise the button would break',
				),
				array(
					'key' => 'field_171261261',
					'message' => '<h1>Disable/Enable Pages</h1>',
					'name' => 'page-toggle-repeater',
					'type' => 'message',
				),
				array(
					'key' => 'field_9917162',
					'message' => '<strong>Company</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_926161221',
					'type' => 'true_false',
					'name' => 'company-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnaa83',
					'type' => 'text',
					'name' => 'company-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aqphe',
					'type' => 'true_false',
					'name' => 'company-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_991716f122',
					'message' => '<strong>Gallery</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_92616f13fff2221',
					'type' => 'true_false',
					'name' => 'gallery-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnada83',
					'type' => 'text',
					'name' => 'gallery-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnziz2aqphe',
					'type' => 'true_false',
					'name' => 'gallery-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_99111716122',
					'message' => '<strong>Services</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_926161322321',
					'type' => 'true_false',
					'name' => 'services-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnaacaq83',
					'type' => 'text',
					'name' => 'services-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aqpkdf3phe',
					'type' => 'true_false',
					'name' => 'services-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_991716122',
					'message' => '<strong>Blog</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_92616132221',
					'type' => 'true_false',
					'name' => 'blog-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bna08732a83',
					'type' => 'text',
					'name' => 'blog-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aq0987phe',
					'type' => 'true_false',
					'name' => 'blog-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_9917161222',
					'message' => '<strong>Testimonials</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_926161132221',
					'type' => 'true_false',
					'name' => 'testimonials-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bn1252aa55583',
					'type' => 'text',
					'name' => 'testimonials-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aq1232ph1e',
					'type' => 'true_false',
					'name' => 'testimonials-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_9917176122',
					'message' => '<strong>Areas Served</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_924616132221',
					'type' => 'true_false',
					'name' => 'areas-served-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnaa315134383',
					'type' => 'text',
					'name' => 'areas-served-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aqp3151he',
					'type' => 'true_false',
					'name' => 'areas-served-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_99171168122',
					'message' => '<strong>Coupons</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_9261626132221',
					'type' => 'true_false',
					'name' => 'coupons-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnaa161383',
					'type' => 'text',
					'name' => 'coupons-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2aqp966991he',
					'type' => 'true_false',
					'name' => 'coupons-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_9917168122',
					'message' => '<strong>Contact</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_926166132221',
					'type' => 'true_false',
					'name' => 'contact-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnadfaaa83',
					'type' => 'text',
					'name' => 'contact-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzi2zcdadsfaqphe',
					'type' => 'true_false',
					'name' => 'contact-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_99171a68122',
					'message' => '<strong>Menu</strong>',
					'type' => 'message',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_92616d6132221',
					'type' => 'true_false',
					'name' => 'menu-toggle',
					'label' => 'Enabled?',
					'default_value' => true,
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_87bnaadfazaa83',
					'type' => 'text',
					'name' => 'menu-alt',
					'label' => 'Alternate Name',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_bnzzi2zcdadsfaqphe',
					'type' => 'true_false',
					'name' => 'menu-alt-toggle',
					'label' => 'Use Alternate Name?',
					'wrapper' => array(
						'width' => '25',
					),
				),
				array(
					'key' => 'field_8712000',
					'label' => '5. Footer',
					'name' => 'social-settings',
					'type' => 'tab',
				),
				array(
					'key' => 'field_833',
					'label' => 'Facebook Page Link',
					'name' => 'social-facebook-link',
					'type' => 'url',
					'instructions' => 'Put the link to your facebook page here. Leave this field blank if you don\'t want this social link to show up.',
				),
				array(
					'key' => 'field_834',
					'label' => 'Twitter Page Link',
					'name' => 'social-twitter-link',
					'type' => 'url',
					'instructions' => 'Put the link to your twitter page here. Leave this field blank if you don\'t want this social link to show up.',
				),
				array(
					'key' => 'field_835',
					'label' => 'Instagram Page Link',
					'name' => 'social-instagram-link',
					'type' => 'url',
					'instructions' => 'Put the link to your instagram page here. Leave this field blank if you don\'t want this social link to show up.',
				),
				array(
					'key' => 'field_836',
					'label' => 'YouTube Page Link',
					'name' => 'social-youtube-link',
					'type' => 'url',
					'instructions' => 'Put the link to your youtube page here. Leave this field blank if you don\'t want this social link to show up.',
				),
				array(
					'key' => 'field_87bnzkap3k',
					'label' => 'Google+ Page Link',
					'name' => 'social-googleplus-link',
					'type' => 'url',
					'instructions' => 'Put the link to your google plus page here. Leave this field blank if you don\'t want this social link to show up.',
				),
				
				array(
					'key' => 'field_mpoh12hadf',
					'label' => '<h2 style="font-weight: bold; font-size: 22px;">Payment Types</h2><h4 style="margin-top: 0px; padding-left: 10px; font-weight: 400;">(For each payment method checking the box displays the payment method in the footer and uploading an image will override the default)</h4>',
					'name' => 'payment-types',
					'type' => 'message',
				),
				array(
					'key' => 'field_12hafhpwae',
					'label' => 'Mastercard',
					'name' => 'mastercard',
					'type' => 'true_false',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mzcpoihhad',
					'label' => 'Mastercard Image',
					'name' => 'mastercard-image',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_12hafhzapwae',
					'label' => 'Visa',
					'name' => 'visa',
					'type' => 'true_false',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mzcpaf122oihhad',
					'label' => 'Visa Image',
					'name' => 'visa-image',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_12haf2dafhpwae',
					'label' => 'American Express',
					'name' => 'amex',
					'type' => 'true_false',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mzc219z',
					'label' => 'Amex Image',
					'name' => 'amex-image',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_12ha1212fhpwae',
					'label' => 'Discover',
					'name' => 'discover',
					'type' => 'true_false',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mooooihhad',
					'label' => 'Discover Image',
					'name' => 'discover-image',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_12hafhpwazdffde',
					'label' => 'Paypal',
					'name' => 'paypal',
					'type' => 'true_false',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mzcpoiz2',
					'label' => 'Paypal Image',
					'name' => 'paypal-image',
					'type' => 'image',
					'return_format' => 'url',
					'wrapper' => array(
						'width' => 40,
					),
				),
				array(
					'key' => 'field_mp9213adf',
					'label' => '<h1 style="color: red;">Looking for something?</h1>
								<div>
								- Company Address - Please see "1. Company Info" tab.<br/>
								- Company Phone Number - Please see "1. Company Info" tab.<br/>
								- Company Fax Number - Please see "1. Company Info" tab.<br/>
								- Parent Co. Logo - Please see "7. Parent Co." tab.
								</div>',
					'type' => 'message',
				),
				array(
					'key' => 'field_12837261321',
					'label' => '6. Pop-Ups',
					'type' => 'tab',
					'name' => 'popup-settings',
				),
				array(
					'key' => 'field_72afasd7161',
					'message' => '<h2 style="font-size:20px"><strong>Top Bar</strong></h2>',
					'type' => 'message'
				),
				array(
					'key' => 'field_18216124',
					'label' => 'Slogan',
					'type' => 'text',
					'name' => 'header-bar-text',
					'default_value' => 'Click here for a free estimate!!!',
				),
				array(
					'key' => 'field_b78h32msda',
					'label' => 'Disable',
					'type' => 'true_false',
					'name' => 'remove-topbar',
					'instructions' => 'If checked this will hide the Top Bar',
				),
				array(
					'key' => 'field_72712261',
					'message' => '<h2 style="font-size:20px"><strong>Timed / E-Book Pop-Up</strong></h2>',
					'type' => 'message'
				),
				array(
					'key' => 'field_871216162',
					'label' => 'Image',
					'name' => 'ad-image',
					'type' => 'image',
					'preview_size' => 'medium',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_38276235123',
					'label' => 'Slogan',
					'name' => 'ad-header',
					'type' => 'text',
					'instructions' => 'This is the text that appears above the form on the ad popup.'
				),
				array(
					'key' => 'field_m12hdaf7213',
					'label' => 'Disable',
					'name' => 'ad-disable',
					'type' => 'true_false',
					'instructions' => 'If checked this will disable the Timed / E-Book Pop-Up',
				),
				array(
					'key' => 'field_727161',
					'message' => '<h2 style="font-size:20px"><strong>Header Button Pop-Up</strong></h2>',
					'type' => 'message'
				),
				array(
					'key' => 'field_md0d7123ha',
					'label' => 'Header Button Text',
					'type' => 'text',
					'name' => 'quickquote-button-text',
					'instructions' => 'This is the text that will appear in the button. Keep this under 11 characters.',
					'default_value' => 'Quick Quote',
				),
				array(
					'key' => 'field_87216162',
					'label' => 'Image',
					'name' => 'quickquote-image',
					'type' => 'image',
					'preview_size' => 'medium',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_38276123',
					'label' => 'Slogan',
					'name' => 'quickquote-header',
					'type' => 'text',
					'instructions' => 'This is the text that appears above the form on the quick quote popup.',
				),
				array(
					'key' => 'field_zfe32123',
					'label' => 'Disable',
					'name' => 'quickquote-disable',
					'type' => 'true_false',
					'instructions' => 'If checked this will disable the Header Button and it\'s popup', 
				),
				array(
					'key' => 'field_218372012173',
					'label' => '7. Blog',
					'name' => 'blog-settings',
					'type' => 'tab',
				),
				array(
					'key' => 'field_15',
					'label' => 'Hero Image',
					'name' => 'general-blog-bg',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
				),
				array(
					'key' => 'field_387126',
					'label' => 'Number of Posts Per Page',
					'name' => 'posts-per-page',
					'type' => 'number',
					'min' => -1,
					'default_value' => 10,
					'instructions' => 'To have unlimited posts per page set this field to -1',
				),
				array(
					'key' => 'field_nadnayeyf',
					'label' => 'Select Your Featured Posts',
					'name' => 'featured-posts',
					'type' => 'repeater',
					'min' => 3,
					'max' => 3,
					'sub_fields' => array(
						array(
							'key' => 'field_ybhabay3',
							'label' => 'Post',
							'type' => 'post_object',
							'name' => 'featured-posts-post',
							'instructions' => 'The posts you make in "Posts" appear here. If you don\'t choose 3, other posts will populate in their place if they exist.',
							'post_type' => array(
								0 => 'post',
							),
							'allow_null' => 1,
						),
					),
				),
				array(
					'key' => 'field_a8d7df',
					'label' => '8. Coupons',
					'type' => 'tab',
				),
				array(
					'key' => 'field_bdsh8f',
					'label' => 'Hero Image',
					'name' => 'general-coupons-bg',
					'type' => 'image',
					'preview_size' => 'medium',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_7fbaxhp',
					'label' => 'Number of Posts Per Page',
					'name' => 'general-coupons-postsperpage',
					'min' => -1,
					'default_value' => 10,
					'instructions' => 'To have unlimited posts per page set this field to -1',
				),
				array(
					'key' => 'field_97zvh21',
					'type' => 'tab',
					'label' => '9. Parent Co.',
				),
				array(
					'key' => 'field_902013uz',
					'type' => 'text',
					'label' => 'Parent Company Name',
					'name' => 'webx-name',
				),
				array(
					'key' => 'field_nnahahawef',
					'label' => 'Parent Company Site URL',
					'name' => 'webx-url',
					'type' => 'url',
				),
				array(
					'key' => 'field_abdf7d',
					'label' => 'Parent Company Logo URL',
					'name' => 'webx-logo',
					'type' => 'url',
				),	
				array(
					'key' => 'field_13366',
					'label' => 'Login Page Background URL',
					'name' => 'general-admin-bg',
					'type' => 'url',
				),
				array(
					'key' => 'field_928137z',
					'label' => 'Parent Company Phone #',
					'name' => 'webx-phone',
					'type' => 'text',
					'instructions' => 'Must be in 555-555-5555 format. Put the phone number you want to show up on the disable site page. Leaving this field blank will not show a phone number.',
				),
				array(
					'key' => 'field_218372012112173',
					'label' => 'Misc.',
					'name' => 'general-404-settings',
					'type' => 'tab',
				),
				array(
					'key' => 'field_83nbjd',
					'label' => 'Image Placeholder',
					'instructions' => 'This is the image that will pop up if there\'s no featured image provided in a blog post.',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
					'name' => 'featured-placeholder',
				),
				array(
					'key' => 'field_23436',
					'label' => 'Google Maps API Key',
					'type' => 'text',
					'name' => 'gmaps-api-key',
					'instructions' => 'Anything here but a Google API Key won\'t work. Please make sure that on your project on console.developers.google.com has the Google Maps Geocode API and the Google Maps Javascript API enabled and it\'s restrictions are set appropriately.',
				),
				array(
					'key' => 'field_16',
					'label' => '404 Background Image',
					'name' => 'general-404-bg',
					'type' => 'image',
					'return_format' => 'url',
					'preview_size' => 'medium',
					'instructions' => '404 is the page that shows up when a page can\'t be found',
				),
				array(
					'key' => 'field_217710',
					'label' => '404 Header Text',
					'name' => 'general-404-header',
					'type' => 'text',
					'instructions' => 'If left blank this defaults to "404"',
					'default_value' => '404',
				),
				array(
					'key' => 'field_217752110',
					'label' => '404 Subheader Text',
					'name' => 'general-404-subheader',
					'type' => 'textarea',
					'new_lines' => 'br',
					'instructions' => 'If left blank this defaults to "The requested page is not available. Click here to return home."',
				),
				array (
					'key' => 'field_89ahzbdjao',
					'label' => 'Terms & Conditions',
					'name' => 'terms-content',
					'type' => 'wysiwyg',
				),
				array(
					'key' => 'field_b8n2qnafhdpz',
					'label' => 'Custom CSS',
					'type' => 'acf_code_field',
					'name' => 'custom-css',
					'theme' => 'monokai',
					'mode' => 'css',
				),
				array(
					'key' => 'field_oohpadf812',
					'label' => 'Disable Site',
					'type' => 'tab',
				),
				array(
					'key' => 'field_mz09271yadsd',
					'label' => '<h3 style="color: red; margin-bottom: 6px;">Do you want to disable the site?</h3> (the text that\'s shown is the answer to that question)',
					'type' => 'true_false',
					'name' => 'disable-site',
					'ui' => true,
					'instructions' => 'When you re-enable the site be sure to clear your browser\'s cache to avoid the redirect.',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'general-settings',
					),
				),
			),
		));


		// Testimonials Settings 

		acf_add_local_field_group(array(
			'key' => 'group_6',
			'title' => ' ',
			'fields' => array (
				
				array(
					'key' => 'field_213adhfa',
					'label' => 'List of Testimonials',
					'type' => 'tab',
				),
				array(
					'key' => 'field_17',
					'label' => 'Testimonials',
					'name' => 'testimonials-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Testimonial',
					'sub_fields' => array(
						array(
							'key' => 'field_9fda',
							'label' => 'Personal Testimonial or YouTube Embed?',
							'type' => 'select',
							'name' => 'testimonials-repeater-select',
							'choices' => array(
								'personal' => 'Written Testimonial',
								'youtube' => 'Video Testimonial',
							),
						),
						array(
							'key' => 'field_18',
							'label' => 'Image',
							'name' => 'testimonials-repeater-image',
							'type' => 'image',
							'preview_size' => 'medium',
							'return_format' => 'url',
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_9fda',
										'operator' => '==',
										'value' => 'personal',
									),
								),
							),
						),
						array(
							'key' => 'field_20',
							'label' => 'Testimonial',
							'name' => 'testimonials-repeater-quote',
							'type' => 'textarea',
							'instructions' => 'Boundary quotes will be added for you. Also, you can\'t create new lines here',
							'required' => true,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_9fda',
										'operator' => '==',
										'value' => 'personal',
									),
								),
							),
						),
						array(
							'key' => 'field_21',
							'label' => 'Customer',
							'name' => 'testimonials-repeater-name',
							'type' => 'text',
							'required' => true,
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_9fda',
										'operator' => '==',
										'value' => 'personal',
									),
								),
							),
						),
						array(
							'key' => 'field_a9d7bh',
							'label' => 'Video Embed',
							'type' => 'oembed',
							'name' => 'testimonials-repeater-youtube',
							'instructions' => 'Just paste the url to the video here and it should show up automatically. For a full list of supported services please go <a href="https://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F">here</a>',
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_9fda',
										'operator' => '==',
										'value' => 'youtube',
									),
								),
							),
						),
					),
					'layout' => 'row',
				),
				array(
					'key' => 'field_2387dsf12',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_19',
					'label' => 'Hero Image',
					'name' => 'testimonials-bg',
					'type' => 'image',
					'preview_size' => 'medium',
					'return_format' => 'url',
				),	
				array(
					'key' => 'field_021hadfha',
					'label' => 'Slogan',
					'name' => 'testimonials-slogan',
					'type' => 'textarea',
					'new_lines' => 'br',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'testimonials-settings',
					),
				),
			),
		));


		// Location Settings

		acf_add_local_field_group(array(
			'key' => 'group_7',
			'title' => ' ',
			'fields' => array (
				
				array(
					'key' => 'field_2137dsafh',
					'label' => 'List of Locations',
					'type' => 'tab',
				),
				array(
					'key' => 'field_392716161',
					'label' => 'Addresses',
					'name' => 'addresses-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Address',
					'min' => 1,
					'sub_fields' => array(
						array(
							'key' => 'field_93717167122',
							'label' => 'General',
							'type' => 'tab',
						),
						array(
							'key' => 'field_3771721fda',
							'label' => 'Location Name',
							'type' => 'text',
							'name' => 'addresses-name',
							'instructions' => 'If there\'s no official name try providing something about the address eg: "Main St. Location".',
							'required' => true,
						),
						array(
							'key' => 'field_1817262',
							'label' => 'Map',
							'type' => 'google_map',
							'name' => 'addresses-gmap',
							'center_lat' => '40.141256',	
							'center_lng' => '-97.681034',
							'required' => true,
						),
						array(
							'key' => 'field_86fdas',
							'label' => 'Address Line 2',
							'type' => 'text',
							'name' => 'addresses-extra',
							'instructions' => 'Suite number, apt number, floor number etc. Will be applied before the first comma in the address',
						),
						array(
							'key' => 'field_937171vff',
							'label' => "Hours",
							'type' => 'tab',
						),
						array(
							'key' => 'field_3876f',
							'label' => 'Hours',
							'name' => 'addresses-hours-repeater',
							'type' => 'repeater',
							'button_label' => 'Add Hours',
							'instructions' => 'Leave blank if you want "24/7" to appear instead.',
							'sub_fields' => array(
								array(
									'key' => 'field_877aa6ff8',
									'label' => 'Day Start',
									'name' => 'addresses-hours-day-start',
									'type' => 'select',
									'choices' => array(
										'sun' => 'Sun',
										'mon' => 'Mon',
										'tues' => 'Tues',
										'wed' => 'Wed',
										'thurs' => 'Thurs',
										'fri' => 'Fri',
										'sat' => 'Sat',
									),
									'required' => true,
									'allow_null' => true,
								),
								array(
									'key' => 'field_8776ff8',
									'label' => 'Day End',
									'name' => 'addresses-hours-day-end',
									'type' => 'select',
									'instructions' => 'Leave this blank if you want these hours to be applied to one day instead of a range of days',
									'choices' => array(
										'sun' => 'Sun',
										'mon' => 'Mon',
										'tues' => 'Tues',
										'wed' => 'Wed',
										'thurs' => 'Thurs',
										'fri' => 'Fri',
										'sat' => 'Sat',
									),
									'allow_null' => true,
								), 
								array(
									'key' => 'field_983y112',
									'name' => 'addresses-hours-time-start',
									'type' => 'time_picker',
									'label' => 'Time Start',
									'instructions' => 'Leave both Time Start and Time End blank if you want "All Day" to appear instead.',
								),
								array(
									'key' => 'field_983y11b12',
									'name' => 'addresses-hours-time-end',
									'type' => 'time_picker',
									'label' => 'Time End',
									'instructions' => 'Leave both Time Start and Time End blank if you want "All Day" to appear instead.',
								),
								array(
									'key' => 'field_983y1a1b12',
									'name' => 'addresses-hours-closed',
									'type' => 'true_false',
									'label' => 'Closed?',
									'instructions' => 'If you are closed this day tick this box-sizing.',
								),
							),
						),
						array(
							'key' => 'field_8937ffdsa',
							'label' => 'Phone Numbers',
							'type' => 'tab',
						),
						array(
							'key' => 'field_26',
							'label' => 'Office Phone Number',
							'type' => 'text',
							'name' => 'contact-office',
							'required' => true,
							'instructions' => 'Must be in 555-555-5555 format.',
						),
						array(
							'key' => 'field_25',
							'label' => 'Cell Phone Number',
							'type' => 'text',
							'name' => 'contact-cell',
							'instructions' => 'Must be in 555-555-5555 format.',
						),
						array(
							'key' => 'field_27',
							'label' => 'Fax Number',
							'type' => 'text',
							'name' => 'contact-fax',
							'instructions' => 'Must be in 555-555-5555 format.',
						),
					),
					'layout' => 'row',
				),
				array(
					'key' => 'field_12387adsf',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_23',
					'label' => 'Hero Image',
					'name' => 'contact-bg',
					'type' => 'image',
					'preview_size' => 'medium',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_873262213',
					'label' => 'Slogan',
					'name' => 'general-contact-slogan',
					'type' => 'textarea',
					'instructions' => 'This is the text that appears in the section just above the footer on all pages except the contact page. You can add new lines here.',
					'new_lines' => 'br',
				),	
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'locations-settings',
					),
				),
			),
		));

		
		acf_add_local_field_group(array(
			'key' => 'group_8',
			'title' => ' ',
			'fields' => array (
				array(
					'key' => 'field_bx9ehdf',
					'label' => 'Expiration Date',
					'type' => 'date_time_picker',
					'name' => 'coupon-expiration-date',
					'display_format' => 'M jS, Y g:i a',
					'return_format' => 'M jS, Y g:i a',
					'first_day' => 0,
				),
				array(
					'key' => 'field_bx9dehdf',
					'label' => 'Coupon Code',
					'type' => 'text',
					'name' => 'coupon-code',
					'instructions' => 'Please use only capital letters and numbers for ease of translation across platforms.',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'post_type',
						'operator' => '==',
						'value' => 'coupon',
					),
				),
			),
		));

		acf_add_local_field_group(array(
			'key' => 'group_9',
			'title' => ' ',
			'fields' => array (
				
				array(
					'key' => 'field_weqr123h',
					'label' => 'Menu Categories/Items',
					'type' => 'tab',
				),
				array(
					'key' => 'field_nnnffff',
					'label' => 'Menu Category Type',
					'type' => 'select',
					'name' => 'menu-category-type',
					'choices' => array(
						'masonry' => 'Photo Style',
						'list' => 'List Style',
					),
					'instructions' => 'Use Photo Style if you have images and List Style if you don\'t.',
					'default_value' => array(
						0 => 'masonry',
					),
					'layout' => 'horizontal',
					'toggle' => 0,
					'return_format' => 'value',
					'ui' => 1,
					'ajax' => 1,
				),
				array(
					'key' => 'field_nsdhaeawf',
					'label' => 'Menu Categories/Items',
					'name' => 'menu-repeater',
					'type' => 'repeater',
					'button_label' => 'Add Menu Category',
					'layout' => 'block',
					'sub_fields' => array(
						array(
							'key' => 'field_nn111aa',
							'label' => 'Menu Category Name',
							'type' => 'text',
							'name' => 'menu-category-name',
						),
						array(
							'key' => 'field_nn11z1aa',
							'label' => 'Menu Category Description',
							'type' => 'textarea',
							'name' => 'menu-category-description',
						),
						array(
							'key' => 'field_yfhawhfoea',
							'label' => 'Menu Category Items',
							'type' => 'repeater',
							'name' => 'menu-category-repeater',
							'button_label' => 'Add New Menu Item',
							'sub_fields' => array(
								array(
									'key' => 'field_nb12h12321',
									'label' => 'Use Menu Item Picture?',
									'name' => 'menu-item-picture-toggle',
									'type' => 'true_false',
								),
								array(
									'key' => 'field_idahf122',
									'label' => 'Menu Item Picture',
									'name' => 'menu-item-picture',
									'type' => 'image',
									'return_format' => 'url',
								),
								array(
									'key' => 'field_ndkfwp23',
									'label' => 'Menu Item Name',
									'name' => 'menu-item-name',
									'type' => 'text',
								),
								array(
									'key' => 'field_ndhahyawefe',
									'label' => 'Menu Item Description',
									'name' => 'menu-item-description',
									'type' => 'textarea',
								),
								array(
									'key' => 'field_eihfiwehap',
									'label' => 'Menu Item Price',
									'name' => 'menu-item-price',
									'type' => 'text',
									'instructions' => '<br/><strong>Examples:</strong><br/><br/>$24.99<br/>€30/hr<br/>$10-20 Sliding Scale',
								),
							),
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_nnnffff',
										'operator' => '==',
										'value' => 'masonry',
									),
								),
							),
						),
						array(
							'key' => 'field_nfhpzkdfa',
							'label' => 'Menu Category Items',
							'type' => 'repeater',
							'name' => 'menu-category-list-repeater',
							'button_label' => 'Add New List Menu Item',
							'sub_fields' => array(
								array(
									'key' => 'field_npahaweef',
									'label' => 'Menu Item Name',
									'type' => 'text',
									'name' => 'menu-list-item-name',
								),
								array(
									'key' => 'field_npahawaeef',
									'label' => 'Menu Item Description',
									'type' => 'text',
									'name' => 'menu-list-item-description',
								),
								array(
									'key' => 'field_npaahaweef',
									'label' => 'Menu Item Price',
									'type' => 'text',
									'name' => 'menu-list-item-price',
								),
							),
							'conditional_logic' => array(
								array(
									array(
										'field' => 'field_nnnffff',
										'operator' => '==',
										'value' => 'list',
									),
								),
							),
						),
					),
				),
				array(
					'key' => 'field_tyeq02137',
					'label' => 'Header Details',
					'type' => 'tab',
				),
				array(
					'key' => 'field_71b12312',
					'label' => 'Hero Image',
					'name' => 'menu-bg',
					'type' => 'image',
					'return_format' => 'url',
				),
				array(
					'key' => 'field_t92173af',
					'label' => 'Slogan',
					'name' => 'menu-slogan',
					'type' => 'textarea',
					'new_lines' => 'br',
				),
			),
			'location' => array (
				array (
					array (
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'menu-settings',
					),
				),
			),
		));
	}
}

add_action('acf/init', 'add_acf_fields');



// update google map api key
if( !function_exists('set_acf_google_api_key') ){
	function set_acf_google_api_key(){
		if(get_field('gmaps-api-key', 'option') !== ''){
			acf_update_setting('google_api_key', get_field('gmaps-api-key', 'option'));	
		}
		else{
			acf_update_setting('google_api_key', 'AIzaSyBrRJwJFfNCdVLJwa6yhR8UBZR1m2A018Q');
		}

	}
}

add_action('acf/init', 'set_acf_google_api_key');

if( !function_exists('my_acf_input_admin_footer') ){
	function my_acf_input_admin_footer() {
		
	?>
		<script type="text/javascript">
			
			acf.add_filter('color_picker_args', function( args, $field ){
				
				// do something to args
				args = {
					color: false,
				    mode: 'hsl',
				    controls: {
				        horiz: 's', // horizontal defaults to saturation
				        vert: 'h', // vertical defaults to lightness
				        strip: 'l' // right strip defaults to hue
				    },
				    hide: true, // hide the color picker by default
				    border: true, // draw a border around the collection of UI elements
				    target: false, // a DOM element / jQuery selector that the element will be appended within. Only used when called on an input.
				    width: 400, // the width of the collection of UI elements
				    palettes: false // show a palette of basic colors beneath the square.
				}
				
				
				// return
				return args;
						
			});
			
		</script>
	<?php
			
	}
}

add_action('acf/input/admin_footer', 'my_acf_input_admin_footer');


if( !function_exists('acf_update_site_title') ){
	function acf_update_site_title( $value, $post_id, $field ){
		if( !empty($value) ){
			update_option( 'blogname', $value );
		}
		return $value;
	}
}

add_action('acf/update_value/key=field_npy320af', 'acf_update_site_title', 10, 3);


if( !function_exists('acf_update_tagline') ){
	function acf_update_tagline( $value, $post_id, $field ){
		if( !empty($value) ){
			update_option( 'blogdescription', $value );
		}
		return $value;
	}
}

add_action('acf/update_value/key=field_npy320zdfa1212af', 'acf_update_tagline', 10, 3);

if( !function_exists('acf_validate_phone_numbers') ){
	function acf_validate_phone_numbers( $valid, $value, $field, $input ){
		$fields = array(
			'field_8378888',
			'field_8378ddf888',
			'field_26',
			'field_25',
			'field_27',
			'field_928137z',
		);
		if( in_array($field['key'], $fields) ){
			// bail early if value is already invalid
			if( !$valid ) return $valid;
			// is formatted phone number or empty?
			if( is_int( (int) str_replace('-', '', $value) ) && 
				strpos_r($value, '-') === array(3,7) &&
				strlen(str_replace('-', '', $value)) == 10 ||
				empty($value) ){
				return $valid;
			}
			else{
				return $valid = 'Phone number must be formated to 555-555-5555';
			}
		}
		return $valid;
	}
}

add_action( 'acf/validate_value', 'acf_validate_phone_numbers', 10, 4 );























?>