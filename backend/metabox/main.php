<?php



return array(
	array(
		'type'      => 'group',
		'repeating' => true,
		'sortable'  => true,
		'name'      => 'rd_team_member',
		'priority'  => 'high',
		'title'     => __('Team Member Item', 'vp_textdomain'),
		'fields'    => array(
		
								array(
			'type' => 'notebox',
			'name' => 'nb_1',
			'label' => __('Author Comment', 'vp_textdomain'),
			'description' => __('To get all features working, please buy the pro version here <a target="_blank" href="http://wpexpert24.com/team-member-showcase-pro/">Team Member Showcase Pro</a> for only $10</a>', 'vp_textdomain'),
			'status' => 'error',
				),
		
			 array(
				'type' => 'upload',
				'name' => 'imgup_1',
				'label' => __('Upload Member Image', 'vp_textdomain'),
			),
		
		 array(
			'type' => 'textbox',
			'name' => 'mamber_name',
			'label' => __('Enter Member Name', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Maxdew',
			),
					
		 array(
			'type' => 'textbox',
			'name' => 'member_label',
			'label' => __('Enter Member Label', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Ceo & Developer',
			),

			array(
			'type' => 'textarea',
			'name' => 'desc',
			'label' => __('Enter your description', 'vp_textdomain'),
			//'description' => __('Only **alphabets** allowed here.', 'vp_textdomain'),
			'default' => 'Enter your Description',
			),
			
			


		),
	),
);

/**
 * EOF
 */