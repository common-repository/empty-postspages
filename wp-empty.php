<?php
/**
 * Plugin Name: Empty Posts/Pages
 * Plugin URI: http://xavisys.com/validate-empty-wordpress-postspages/
 * Description: Empty posts/pages still get wrapped in tags, which makes them invalid.  This plugin fixes that.  PHP5 Required.
 * Version: 1.0.0
 * Author: Aaron D. Campbell
 * Author URI: http://xavisys.com/
 */

/**
 * Changelog:
 * 04/17/2008: 1.0.0
 * 		- Released to wordpress.org repository
 *
 * 06/04/2007: 0.1
 * 		- Original Version
 */

/*  Copyright 2006  Aaron D. Campbell  (email : wp_plugins@xavisys.com)
*/
class wpEmpty {
	private static $empty = false;

	public function content($post_content) {
		//If there is nothing to replace, don't waste CPU cycles...return the post content
		if (self::$empty) {
			$post_content = '';
		}
		return $post_content;
	}

	public static function check_empty($post_content) {
		self::$empty = empty($post_content);
		return $post_content;
	}
}

/**
 * Add the necessary hooks
 */
//In order to be able to remove an empty <p> element that is added at priority
//10, we have to check if the post is empty at level 9
add_filter('the_content', array('wpEmpty','check_empty'), 9);
//If the post was empty, this empties it (since WP does everything at priority 10)
add_filter('the_content', array('wpEmpty','content'), 11);

