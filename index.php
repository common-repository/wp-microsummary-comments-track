<?php 
if (empty($wp)) {
	require_once('../../../wp-load.php');
	wp();
}
?>
<?php echo microsummary_comments_track_output(); ?>