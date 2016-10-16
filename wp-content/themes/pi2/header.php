<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php bloginfo('name')." | ".the_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<?php wp_head(); ?>

</head>
<body>
<div id="wrapper" class="home-page">
<div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-xs-12">
         <a class="navbar-brand pull-left" href="<?php echo home_url('/');?>"><img src="<?php echo get_bloginfo('template_url')?>/img/logo.png" alt="logo"/></a>
      </div>
      <div class="col-md-4 col-xs-12">
        <div  class="pull-right">
        <i class="fa fa-phone"></i> 
        <p>Tel No. (+91) 7411033926</p>
        <i class="fa fa-sms"></i>
        <p>Email: www@gmail.com </p>
        </div>

      </div>
    </div>
  </div>
</div>
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  
                </div>
                <div class="navbar-collapse collapse ">
                        <?php /* Primary navigation */
                        wp_nav_menu( array(
                          'menu' => 'header_navigation',
                          'depth' => 2,
                          'container' => false,
                          'menu_class' => 'nav navbar-nav active',
                          //Process nav menu using our custom nav walker
                          'walker' => new wp_bootstrap_navwalker())
                        );
                        ?>
                </div>
            </div>
        </div>
    </header>