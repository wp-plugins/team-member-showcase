<?php
 
function add_team_member_menu_icons_styles(){
?>
 
<style>
#adminmenu .menu-icon-rd_team_member div.wp-menu-image:before {
content: "\f307";
}
</style>
 
<?php
}
add_action( 'admin_head', 'add_team_member_menu_icons_styles' );
?>