<?php 
	add_theme_support('menus');
	/*including files*/
	include(get_template_directory().'/include/enqueue.php');
	include(get_template_directory().'/include/wp_bootstrap_navwalker.php');
	/*Hooks*/
	add_action('wp_enqueue_scripts','pi_enqueue');
	add_action('after_theme_setup','pi_setup_theme');
 ?>