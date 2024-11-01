<?php
function microsummary_comments_track_output() {
	global $wpdb;
	$comments_approved_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");
	$comments_pending_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '0'");
	$comments_spam_count = $wpdb->get_var("SELECT COUNT(comment_ID) FROM $wpdb->comments WHERE comment_approved = 'spam'");
	$comments_spam_count = ($scount != '' || $scount != 0)?0:$comments_spam_count;
	return "A: " . $comments_approved_count . " - P: " . $comments_pending_count . " - S: " . $comments_spam_count;
}
?>