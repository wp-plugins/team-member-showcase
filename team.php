<?php
/*
Plugin Name: Team Member Showcase 
Plugin URI: http://wpexpert24.com/
Description: Team Member Showcase is a super modern Team Member wordpress plugin. With this plugin you can display a set of pictures and information in different layouts. The main purpose of the plugin is to display team/staff members. Unlimited Colors, 100% responsive, automatic resize images, flexible, unlimited items, shortcode powered, custom link and more.
Author: RAKIBUR RAHMAN SAGAR
Author URI: http://wpexpert24.com/
Version: 1.0
*/

//Loading CSS
function rd_team_member_effects_style() {
	wp_enqueue_style('team_icon_css', plugins_url( '/css/icon_all.css' , __FILE__ ) );
	wp_enqueue_style('team_mainstyle_css', plugins_url( '/css/team_main_style.css' , __FILE__ ) );
	wp_enqueue_style('team_styleone_css', plugins_url( '/css/team_style_one.css' , __FILE__ ) );
}
add_action( 'wp_enqueue_scripts', 'rd_team_member_effects_style' );


// Loading VafPress Framework
if(!class_exists('VP_teamAutoLoader')){
// Setup Contants
defined( 'VP_TEAMRD_VERSION' ) or define( 'VP_TEAMRD_VERSION', '2.0' );
defined( 'VP_TEAMRD_URL' )     or define( 'VP_TEAMRD_URL', plugin_dir_url( __FILE__ ) );
defined( 'VP_TEAMRD_DIR' )     or define( 'VP_TEAMRD_DIR', plugin_dir_path( __FILE__ ) );
defined( 'VP_TEAMRD_FILE' )    or define( 'VP_TEAMRD_FILE', __FILE__ );

// Lood Bootstrap
require 'member-framework/bootstrap.php';

}


// Registering Custom Post
function rd_team_member_custom_post() {
	register_post_type( 'rd_team_member',
		array(
			'labels' => array(
				'name' => __( 'Team Member' ),
				'singular_name' => __( 'Team Member' ),
				'add_new_item' => __( 'Add New Item' )
			),
			'public' => true,
			'supports' => array('title'),
			'has_archive' => true,
			'rewrite' => array('slug' => 'team-members'),
			'menu_icon' => '',
			'menu_position' => 21,
		)
	);
	
}
add_action( 'init', 'rd_team_member_custom_post' );

// Registering Custom post's category
function rd_team_member_custom_post_taxonomy() {
	register_taxonomy(
		'member_cat',  
		'rd_team_member',
		array(
			'hierarchical'          => true,
			'label'                 => 'Member Category',
			'query_var'             => true,
			'show_admin_column'             => true,
			'rewrite'                       => array(
				'slug'                  => 'member-category',
				'with_front'    => true
				)
			)
	);
}
add_action( 'init', 'rd_team_member_custom_post_taxonomy'); 
require 'backend/icon.php';

// Load Metaboxes 

new VP_Metabox(array
(
			'id'          => 'infos',
			'types'       => array('rd_team_member'),
			'title'       => __('Member Information ', 'vp_textdomain'),
			'priority'    => 'high',
			'template' => VP_TEAMRD_DIR . '/backend/metabox/main.php'
));


// Register Shortcode
function rd_team_member_shortcode($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',		
		'width' => '',	
		'height' => '',	
		'icon_one' => '',	
		'icon_one_link' => '',	
		'icon_one_hover_color' => '',	
		'icon_two' => '',	
		'icon_two_link' => '',	
		'icon_two_hover_color' => '',	
		'icon_three' => '',	
		'icon_three_link' => '',	
		'icon_three_hover_color' => '',	
		
	), $atts) );
	
	
	    $q = new WP_Query(
        array('posts_per_page' => -1, 'post_type' => 'rd_team_member', 'member_cat' => $category)
        );
	
		while($q->have_posts()) : $q->the_post();
		$id = get_the_ID();	
		
	
		$infos = vp_metabox('infos.rd_team_member', false);
		
	$i = 0;
	
		$output = '
		<div class="team_content">
		<div class="section paddinf-off rd_team">
		<section class="rd_container">
        <div class="rd_raw">';
		
		foreach ($infos as $info) {	

		if ($style==style1) {
		
		$output .= '
				<style type="text/css">
					.rd_team .rd_item_square .social-icons li:nth-child(1):hover a {
						color: #5d4bf2;
					}
					.rd_team .rd_item_square .social-icons li:nth-child(2):hover a {
						color: #00b9ff;
					}
					.rd_team .rd_item_square .social-icons li:nth-child(3):hover a {
						color: #da1a1a;
					}
					.rd_team .rd_item_square {
					width: 216px;
					}
					.rd_team .rd_item_square .face {
						height: 260px; 
					}
				</style>
				
					<div class="rd_item_square">
                        <div class="rd_face_container">
                            <div class="face"><img alt="" src="'.$info['imgup_1'].'">
                            </div>
                        </div>
                        <div class="rd_single_item-content">
                            <div class="title">
                                <h3>'.$info['member_label'].'</h3>
                                <h4>'.$info['mamber_name'].'</h4>
                            </div>
                            <div class="text">
                                <p>'.$info['desc'].'</p>
                            </div>
                            <div class="footer">
                                <ul class="social-icons">
                                    <li><a href="'.$icon_one_link.'"><i class="icon-facebook"></i></a>
                                    </li>
                                    <li><a href="'.$icon_two_link.'"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li><a href="'.$icon_three_link.'"><i class="icon-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
				';
		}
		if ($style==style2) {
		
		$output .= '
				<style type="text/css">
					.rd_team .rd_item_square-2 .social-icons li:nth-child(1):hover a {
						color: #5d4bf2;
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(2):hover a {
						color: #00b9ff;
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(3):hover a {
						color: #da1a1a;
					}
					.rd_team .rd_item_square-2 {
					width: 216px;
					}
					.rd_team .rd_item_square-2 .face {
						height: 260px; 
					}
				</style>
                    <div class="rd_item_square-2">
                        <div class="title">
                            <h3>'.$info['mamber_name'].'</h3>
                        </div>
						<div class="rd_face_container">
                            <div class="face"><img alt="" src="'.$info['imgup_1'].'">
                            </div>
                        </div>
                        <div class="rd_single_item-content">
                            <div class="footer">
                                <h4>'.$info['member_label'].'</h4>
									 <p>'.$info['desc'].'</p>
                                <ul class="social-icons">
                                    <li><a href="'.$icon_one_link.'"><i class="icon-facebook"></i></a>
                                    </li>
                                    <li><a href="'.$icon_two_link.'"><i class="icon-twitter"></i></a>
                                    </li>
                                    <li><a href="'.$icon_three_link.'"><i class="icon-youtube"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
				';
		}
		$i++;
	}
	
	endwhile;
	$output .='
	</div>
    </section>
	</div>
	</div>';
	wp_reset_query();
	return $output;
}

add_shortcode('member', 'rd_team_member_shortcode');



//Shortcode Generator 
    function acbteam_init_shortcodegenerator()
    {
    // Built path to shortcode generator template array file
    //$sg_path = VP_TEAM_DIR() . '/admin/shortcode.php';
    // Initialize the ShortcodeGenerator's object
    $tmpl_sg = array(
    'name' => 'teamsg_2',
    'template' => VP_TEAMRD_DIR . '/backend/shortcode_generator.php',
    'modal_title' => __( 'TM Shortcode', 'vp_textdomain'),
    'button_title' => __( 'TM Shortcode', 'vp_textdomain'),
    'types' => array( 'post', 'page' ),
    'main_image' => VP_TEAMRD_URL . 'images/coupon.png',
    'sprite_image' => VP_TEAMRD_URL . 'images/coupon.png',
    //'included_pages' => array( 'appearance_page_vpt_option' ),
    );
    
	$sg = new VP_ShortcodeGenerator($tmpl_sg);
    
	}
	
    // the safest hook to use, since Vafpress Framework may exists in Theme or Plugin
    add_action( 'after_setup_theme', 'acbteam_init_shortcodegenerator' );
	
	?>