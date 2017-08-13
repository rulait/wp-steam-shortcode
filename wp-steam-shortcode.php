<?php
/*
	Plugin Name: WP Steam Shortcode
	Description: This plugin will help you to embed widgets of different Steams's and Steam Greenlight's games and apps in your posts and pages.
	Version: 1.3.1
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
		'subitem' => '',
		'type' => 'store',
		'width' => '100%',
		'id' => 'wp-steam-shortcode',
		'class' => 'wp-steam-shortcode',
		'text' => ''
	), $atts));

	$error = '<span style="color: red;">Error! Check the &#91;steam&#93; shortcode attributes, please.</span>';

	if (empty($subitem) === false) {
		$subitem = '/' . htmlspecialchars($subitem);
	}

	if ($type == 'store') {
		$out = '<iframe id="' . htmlspecialchars($id) . '" class="' . htmlspecialchars($class) . '" style="width: ' . htmlspecialchars($width) .'; height: 190px; border: 0;" src="//store.steampowered.com/widget/' . htmlspecialchars($item) . $subitem . '?t=' . rawurlencode($text). '" scrolling="no"></iframe>';
	} else if ($type == 'greenlight') {
		$out = '<iframe id="' . htmlspecialchars($id) . '" class="' . htmlspecialchars($class) . '" style="width: 336px; height: 137px; border: 0;" src="//steamcommunity.com/sharedfiles/widget/'. htmlspecialchars($item). '" scrolling="no"></iframe>';
	} else {
		$out = $error;
	}

	if (is_numeric($item) == false || (empty($item) || empty($type)) || empty($width) || (empty($id) || empty($class))) {
		$out = $error;
	}

	return $out;
}?>