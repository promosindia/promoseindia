<?php /*template name: Homepage*/ ?>
<?php get_header(); ?>
<?php get_template_part('include/slider'); ?>  
<section id="call-to-action-2">
   <div class="container">
      <div class="row">
         <div class="col-md-12 aligncenter">
            <h3>Welcome to InLine Technologies</h3>
            <p><?php the_excerpt(); ?></p>
         </div>
      </div>
   </div>
</section>
<?php get_template_part('part/service_part'); ?>
<?php get_template_part('part/our_feature'); ?>
<?php  get_template_part('part/bestservice'); ?>
<section class="section-padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-6">
            <div class="about-text">
               <h2>About Us</h2>
               <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
               <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta.</p>
               <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit.</p>
               <a href="#" class="lineBtn">Read More</a>
            </div>
         </div>
         <div class="col-md-6 col-sm-6">
            <div class="about-image">
               <img src="<?php echo get_bloginfo('template_url'); ?>/img/about.jpg" alt="About Images">
            </div>
         </div>
      </div>
   </div>
</section>
<?php get_footer(); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
   ================================================== -->
</body>
</html>
