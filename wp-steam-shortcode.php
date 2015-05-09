<?php
/*
	Plugin Name: WP Steam Shortcode
	Description: This plugin will help you to embed widgets of different Steams's and Steam Greenlight's games and apps in your posts and pages.
	Version: 1.0
	Author: ruLait
	Author URI: http://rulait.ru
	Plugin URI: https://github.com/rulait/wp-steam-shortcode
	GitHub Plugin URI: rulait/wp-steam-shortcode
	GitHub Branch: master
	License: MIT License
	License URI: https://github.com/ruLait/wp-steam-shortcode/blob/master/license.txt
*/

add_shortcode('steam', 'wp_steam_shortcode');

function wp_steam_shortcode($atts) {
	extract(shortcode_atts(array(
		'id' => '',
		'type' => 'store'
	), $atts));
	
	if ($type == 'store') {
		$out = "<iframe style=\"width: 646px; height: 190px; border: 0;\" src=\"//store.steampowered.com/widget/$id\" scrolling=\"no\"></iframe>";
	} else if ($type == 'greenlight') {
		$out = "<iframe style=\"width: 336px; height: 137px; border: 0;\" src=\"//steamcommunity.com/sharedfiles/widget/$id\" scrolling=\"no\"></iframe>";
	} else {
		$out = "";
	}

	if (empty($id)) {
		$out = "";
	}

	return $out;
}