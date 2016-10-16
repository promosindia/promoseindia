<?php 
	function pi_side_bar_widget(){
		$sidebar=array(
			'name'			=>	__('first sidebar','promosIndia'),
			'id'			=>	'pi_sidebar',
			'description'	=>	__('promoseIndia contact side bar'),
			'class'			=> ''

		);
		$contact_widget=array(
			'name' 			=> 		__('contact information','promoseIndia'),
			'id'			=>		'pi_contact',
			'description'	=>		'place your contact information',
			'class'			=>		'',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>',
		 );
		$quick_widget_bar=array(
			'name' 			=> 			__('Quick Links','promoseIndia'),
			'id'			=>			'pi_quicklinks',
			'description'	=>			'place your pages links',
			'class'			=>			'',
			'before_widget' => 			'<aside id="%1$s" class="widget %2$s">',
			'after_widget' => 			'</aside>',
			'before_title' => 			'<h3 class="widget-title">',
			'after_title' => 			'</h3>',
		 );
		register_sidebar($quick_widget_bar);
		register_sidebar($sidebar);
		register_sidebar($contact_widget);
		
	
	}

 ?>