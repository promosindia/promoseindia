<?php 
	add_theme_support('menus');
	add_theme_support('post-thumbnails');
	/*including files*/
	include(get_template_directory().'/include/enqueue.php');
	include(get_template_directory().'/include/wp_bootstrap_navwalker.php');
	include(get_template_directory().'/include/widgets.php');
	/*Hooks*/
	add_action('wp_enqueue_scripts','pi_enqueue');
	add_action('after_theme_setup','pi_setup_theme');
	add_action('widgets_init','pi_side_bar_widget');
 ?>