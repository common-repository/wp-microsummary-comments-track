<?php
/*
Plugin Name: Microsummary Comments Track
Plugin URI: http://www.gatellier.be/blog/tags/wordpress/plugin/wp-microsummary-comments-track/
Description: This plugin allows you to add a microsummary bookmark displaying your current approved, pending and spam comments count.
Author: Marin Gatellier
Version: 0.1
Author URI: http://www.gatellier.be/blog/
*/ 
include('functions.php');
function wp_microsummary_comments_track(){
	echo "<link rel=\"microsummary\" type=\"application/x.microsummary+xml\" href=\"" . get_option('siteurl') . "/wp-content/plugins/" . dirname( plugin_basename(__FILE__)) . "/index.php\" />";
}
add_action('admin_head', 'wp_microsummary_comments_track');
?>