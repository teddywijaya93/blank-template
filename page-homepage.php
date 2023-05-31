<?php
/*
	Template Name: Homepage
*/
?>

<?php 
	$name = null;
	$args = array(
		"visibility" => true,
		"page" => 'home',
	);
	get_header($name, $args); 
?>

<?php get_footer(); ?>