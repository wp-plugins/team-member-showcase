<?php
// Register Shortcode
function rd_team_member_shortcode($atts){
	extract( shortcode_atts( array(

		'category' => '',	
		'style' => '',		
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
						color: '.$icon_one_hover_color.';
					}
					.rd_team .rd_item_square .social-icons li:nth-child(2):hover a {
						color: '.$icon_two_hover_color.';
					}
					.rd_team .rd_item_square .social-icons li:nth-child(3):hover a {
						color: '.$icon_three_hover_color.';
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
                                    <li><a href="'.$icon_one_link.'"><i class="icon-'.$icon_one.'"></i></a>
                                    </li>
                                    <li><a href="'.$icon_two_link.'"><i class="icon-'.$icon_two.'"></i></a>
                                    </li>
                                    <li><a href="'.$icon_three_link.'"><i class="icon-'.$icon_three.'"></i></a>
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
						color: '.$icon_one_hover_color.';
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(2):hover a {
						color: '.$icon_two_hover_color.';
					}
					.rd_team .rd_item_square-2 .social-icons li:nth-child(3):hover a {
						color: '.$icon_three_hover_color.';
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
                                    <li><a href="'.$icon_one_link.'"><i class="icon-'.$icon_one.'"></i></a>
                                    </li>
                                    <li><a href="'.$icon_two_link.'"><i class="icon-'.$icon_two.'"></i></a>
                                    </li>
                                    <li><a href="'.$icon_three_link.'"><i class="icon-'.$icon_three.'"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </div>
				';
		}
		if ($style==style3) {
		
		$output .= '
				<h1>This Team Member Block Layout Only Available For Pro Version <a target="_blank" href="http://wpexpert24.com/team-member-showcase-pro/"> Click Here For pro</a></h1>
				';
		}
		
		if ($style==style4) {
		
		$output .= '
				<h1>This Team Member Block Layout Only Available For Pro Version <a target="_blank" href="http://wpexpert24.com/team-member-showcase-pro/"> Click Here For pro</a></h1>
				';
		}
		if ($style==style5) {
		
		$output .= '
				<h1>This Team Member Block Layout Only Available For Pro Version <a target="_blank" href="http://wpexpert24.com/team-member-showcase-pro/"> Click Here For pro</a></h1>
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
