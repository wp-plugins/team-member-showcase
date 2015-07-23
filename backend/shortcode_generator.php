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
	
				),	),		
		
					/* FIRST ICON */
			
			array(
			'type' => 'textbox',
			'name' => 'icon_one_link',
			'label' => __('Enter Facebook icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://facebook.com',
			),
			
			/* SECOND ICON */
			
			array(
			'type' => 'textbox',
			'name' => 'icon_two_link',
			'label' => __('Enter Twitter icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://twitter.com',
			),
						
			/* THIRD ICON */
			
			array(
			'type' => 'textbox',
			'name' => 'icon_three_link',
			'label' => __('Enter YouTube Icon URL', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'http://youtube.com',
			),				
				
				
				),
			),
		// ... more elements
		
		),
	),	
	
	
// ... more menus
);

?>