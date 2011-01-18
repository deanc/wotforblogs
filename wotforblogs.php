<?php
/*
Plugin Name: WOT for blogs
Plugin URI: http://www.mywot.com
Description: Adds WOT's rating symbols to outgoing links on your blog to show users which links are safe.
Version: 0.9.3
Author: Web Of Trust
Author URI: http://www.mywot.com
License: GPL2
*/

/*  Copyright 2011  Web Of Trust  (email : support@mywot.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Load JS
function wotforblogs_init()
{
	wp_deregister_script('wot-config');
	wp_register_script('wot-config', plugin_dir_url(__FILE__) . 'wotforblogs-config.js', array(), false, true);
	wp_enqueue_script('wot-config');
	
	wp_deregister_script('wot');
	wp_register_script('wot', 'http://api.mywot.com/widgets/ratings.js', array(), false, true);
	wp_enqueue_script('wot');
}
add_action('wp_footer', wotforblogs_init());

?>
