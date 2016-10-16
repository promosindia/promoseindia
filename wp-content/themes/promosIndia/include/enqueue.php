<?php 
	function pi_enqueue(){
		wp_register_style("pi_css",get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style('pi_bootstrap-responsive',get_template_directory_uri().'/css/bootstrap-responsive.min.css');
		wp_register_style('pi_font-awesome',get_template_directory_uri().'/css/font-awesome.min.css');
		wp_register_style('pi_main',get_template_directory_uri().'/css/main.css');
		wp_register_style('pi_slide',get_template_directory_uri().'/css/sl-slide.css');
		wp_enqueue_style("pi_css");
		wp_enqueue_style("pi_bootstrap-responsive");
		wp_enqueue_style("pi_font-awesome");
		wp_enqueue_style("pi_main");
		wp_enqueue_style("pi_slide");
		wp_register_script("pi_modernizr",get_template_directory_uri().'/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js');
		wp_register_script("pi_jquery",get_template_directory_uri().'/js/vendor/jquery-1.9.1.min.js',array(),false,true);
		wp_register_script("pi_bootstrap.min",get_template_directory_uri().'/js/vendor/bootstrap.min.js',array(),false,true);
		wp_register_script("pi_main",get_template_directory_uri().'/js/main.js',array(),false,true);
		wp_register_script("pi_ba-cond",get_template_directory_uri().'/js/jquery.ba-cond.min.js',array(),false,true);
		wp_register_script("pi_slitslider",get_template_directory_uri().'/js/jquery.slitslider.js',array(),false,true);
		
		/*Enqueue script start*/
		
		wp_enqueue_script("pi_jquery");
			wp_enqueue_script("jquery");
		wp_enqueue_script("pi_modernizr");
		wp_enqueue_script("pi_bootstrap.min");
		wp_enqueue_script("pi_main");
		wp_enqueue_script("pi_ba-cond");
		wp_enqueue_script("pi_slitslider");
		/*Enqueue script end*/
	}

 ?>
