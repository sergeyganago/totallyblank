<?php
/*
* Template Name: Default Page Template
*/
?>

<?php get_header(); ?>

<?php
	$content = apply_filters('the_content', $post->post_content);
	echo $content;
?>

<?php get_footer(); ?>
