<?php 
   function pi_enqueue(){
   	/*Registring style start*/
   wp_register_style("pi_style",get_template_directory_uri().'/css/style.css');
   wp_register_style('pi_bootstrap',get_template_directory_uri().'/css/bootstrap.min.css');
   wp_register_style('fancybox',get_template_directory_uri().'/css/fancybox/jquery.fancybox.css');
   wp_register_style('pi_jcarousel',get_template_directory_uri().'/css/jcarousel.css');
   wp_register_style('pi_flexslider',get_template_directory_uri().'/css/flexslider.css');
   wp_register_style('pi_owl_carousel',get_template_directory_uri().'/js/owl-carousel/owl.carousel.css');
   wp_register_style('pi_font',get_template_directory_uri().'/et-line-font/style.css');
   	wp_register_style('pi_default_style',get_template_directory_uri().'/style.css');
   	/*Registring style end*/
   	/* Enqueue start here*/
   	wp_enqueue_style("pi_style");
   	wp_enqueue_style("pi_bootstrap");
   	wp_enqueue_style("fancybox");
   	wp_enqueue_style("pi_jcarousel");
   	wp_enqueue_style("pi_flexslider");
   	wp_enqueue_style("pi_owl_carousel");
   	wp_enqueue_style("pi_font");
      wp_enqueue_style("pi_default_style");
   	/*Enqueue end here */
   
wp_register_script("pi_jquery",get_template_directory_uri().'/js/jquery.js');
wp_register_script("pi_jquery_easing",get_template_directory_uri().'/js/jquery.easing.1.3.js');
wp_register_script("pi_bootstrap_js",get_template_directory_uri().'/js/bootstrap.min.js');
wp_register_script("pi_fancybox",get_template_directory_uri().'/js/jquery.fancybox.pack.js');
wp_register_script("pi_fancybox_media",get_template_directory_uri().'/js/jquery.fancybox-media.js');
wp_register_script("pi_flexslider",get_template_directory_uri().'/js/jquery.flexslider.js');
wp_register_script("pi_animate",get_template_directory_uri().'/js/animate.js');
wp_register_script("pi_modernizr_custom",get_template_directory_uri().'/js/modernizr.custom.js');
wp_register_script("pi_isotope",get_template_directory_uri().'/js/jquery.isotope.min.js');
wp_register_script("pi_magnific",get_template_directory_uri().'/js/jquery.magnific-popup.min.js');
/*wp_register_script("pi_jquery",get_template_directory_uri().'/js/animate.js');*/
wp_register_script("pi_custom",get_template_directory_uri().'/js/custom.js');
wp_register_script("pi_owl_carousel",get_template_directory_uri().'/js/owl-carousel/owl.carousel.js');

   /*Enqueue script start*/
   	wp_enqueue_script("pi_jquery");
      wp_enqueue_script("pi_jquery_easing");
      wp_enqueue_script("pi_bootstrap_js");
      wp_enqueue_script("pi_fancybox");
      wp_enqueue_script("pi_fancybox_media");
      wp_enqueue_script("pi_flexslider");
      wp_enqueue_script("pi_animate");
      wp_enqueue_script("pi_modernizr_custom");
      wp_enqueue_script("pi_isotope");
      wp_enqueue_script("pi_magnific");
      wp_enqueue_script("pi_custom");
      wp_enqueue_script("pi_owl_carousel");
      
	/*Enqueue script end*/
   }
   
   ?>