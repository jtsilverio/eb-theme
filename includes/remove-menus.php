<?php
//****************
//REMOVING DASHBOARD MENUS
//***************
function remove_menus () {
global $menu;
		//$restricted = array(__('Dashboard'), __('Posts'), __('Media'), __('Links'), __('Pages'), __('Appearance'), __('Tools'), __('Users'), __('Settings'), __('Comments'), __('Plugins'));
		$restricted = array(__('Appearance'),  __('Comments'), __('Posts')/*__('Plugins')*/);
		end ($menu);
		while (prev($menu)){
			$value = explode(' ',$menu[key($menu)][0]);
			if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
		}
}
add_action('admin_menu', 'remove_menus');
?>