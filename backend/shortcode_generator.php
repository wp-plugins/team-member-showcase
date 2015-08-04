<?php

return array(
// menus
'Team Member' => array(
	// shortcodes collection in this menu
	'elements' => array(

			// shortcode with attribute
			'acb1' => array(
			'title' => __('Team Member Settings', 'qualia_td'),
			'code' => '[member]',
			'attributes' => array(
			
											array(
			'type' => 'notebox',
			'name' => 'nb_1',
			'label' => __('Author Comment', 'vp_textdomain'),
			'description' => __('To get all features working, please buy the pro version here <a target="_blank" href="http://wpexpert24.com/team-member-showcase-pro/">Team Member Showcase Pro</a> for only $10</a>', 'vp_textdomain'),
			'status' => 'error',
				),
				
					array(
						'type'  => 'textbox',
						'name'  => 'category',
						'label' => __('Category Name', 'vp_textdomain'),
					),
					
					// Select Style from generator
					array(
					'type' => 'select',
					'name' => 'style',
					'label' => __('Select Block Effect', 'vp_textdomain'),
					'default' => array(
								'{{first}}',
								),
					'items' => array(	
						array(
							'value' => 'style1',
							'label' => 'Style 1',
						),	
						array(
							'value' => 'style2',
							'label' => 'Style 2',
						),		
						array(
							'value' => 'style3',
							'label' => 'Style 3(Pro Only)',
						),		
						array(
							'value' => 'style4',
							'label' => 'Style 4(Pro Only)',
						),		
						array(
							'value' => 'style5',
							'label' => 'Style 5(Pro Only)',
						),			
	
				),	),		
				
					
			 array(
		'type' => 'slider',
		'name' => 'width',
		'label' => __('Item Width <P style="color:red; font-size;10px;">Pro Only</p>', 'vp_textdomain'),
		'description' => __('You can change Member item width in pixel format without (px)', 'vp_textdomain'),
		'min' => '190',
		'max' => '350',
		'step' => '1',
		'default' => '216',
		),					
		
		array(
		'type' => 'slider',
		'name' => 'height',
		'label' => __('Item Height<P style="color:red; font-size;10px;">Pro Only</p>', 'vp_textdomain'),
		'description' => __('You can change Member item Height in pixel format without (px)', 'vp_textdomain'),
		'min' => '160',
		'max' => '350',
		'step' => '1',
		'default' => '260',
		),
		
		
		
					/* FIRST ICON */
			array(
			'type' => 'textbox',
			'name' => 'icon_one',
			'label' => __('First Icon name', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'facebook',
			),
				
			
			array(
			'type' => 'textbox',
			'name' => 'icon_one_link',
			'label' => __('First Icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://facebook.com',
			),
			
			array(
						'type'  => 'color',
						'name'  => 'icon_one_hover_color',
						'label' => __('First Icon Hover Color', 'vp_textdomain'),
						'default' => '#5d4bf2',
			),
			
			/* SECOND ICON */
			array(
			'type' => 'textbox',
			'name' => 'icon_two',
			'label' => __('second Icon name', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'twitter',
			),
			
			array(
			'type' => 'textbox',
			'name' => 'icon_two_link',
			'label' => __('Second Icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://twitter.com',
			),
			
			array(
						'type'  => 'color',
						'name'  => 'icon_two_hover_color',
						'label' => __('Second Icon Hover Color', 'vp_textdomain'),
						'default' => '#00b9ff',
			),
						
			/* THIRD ICON */
						array(
			'type' => 'textbox',
			'name' => 'icon_three',
			'label' => __('Third Icon name', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'youtube',
			),
			
			array(
			'type' => 'textbox',
			'name' => 'icon_three_link',
			'label' => __('Third Icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://youtube.com',
			),
			
			array(
						'type'  => 'color',
						'name'  => 'icon_three_hover_color',
						'label' => __('Third Icon Hover Color', 'vp_textdomain'),
						'default' => '#000',
			),				
				
				
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>