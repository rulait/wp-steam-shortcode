<?php
/*
	Plugin Name: WP Steam Shortcode
	Description: This plugin will help you to embed widgets of different Steams's and Steam Greenlight's games and apps in your posts and pages.
	Version: 1.3
	Author: ruLait
	Author URI: https://rulait.ru
	Plugin URI: https://github.com/rulait/wp-steam-shortcode
	Text Domain: wp-steam-shortcode
	GitHub Plugin URI: https://github.com/rulait/wp-steam-shortcode
	GitHub Branch: master
	License: MIT License
	License URI: https://github.com/ruLait/wp-steam-shortcode/blob/master/license.txt
	Requires WP: 4.0
	Requires PHP: 5.3
*/

add_shortcode('steam', 'wp_steam_shortcode');

function wp_steam_shortcode($atts) {
	extract(shortcode_atts(array(
		'item' => '',
		'type' => 'store',
		'width' => '100%',
		'id' => 'wp-steam-shortcode',
		'class' => 'wp-steam-shortcode'
	), $atts));

	$error = "<span style='color: red;'>Error! Check the &#91;steam&#93; shortcode attributes, please.</span>";

	if ($type == 'store') {
		$out = "<iframe id='$id' class='$class' style='width: $width; height: 190px; border: 0;' src='//store.steampowered.com/widget/$item' scrolling='no'></iframe>";
	} else if ($type == 'greenlight') {
		$out = "<iframe id='$id' class='$class' style='width: 336px; height: 137px; border: 0;' src='//steamcommunity.com/sharedfiles/widget/$item' scrolling='no'></iframe>";
	} else {
		$out = $error;
	}

	if (is_numeric($item) == false || (empty($item) || empty($type)) || empty($width) || (empty($id) || empty($class))) {
		$out = $error;
	}

	return $out;
}
?>