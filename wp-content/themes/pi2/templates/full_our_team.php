<?php /*Template Name: about us with our team*/ ?>
<?php get_header(); ?>
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<a href="<?php the_permalink();?>"><h2 class="pageTitle"><?php the_title(); ?></h2></a>
			</div>
		</div>
	</div>
	<?php 
	get_sidebar();
	 ?>
	</section>
	<section id="content"> 
		<div class="container">
			<div class="row showcase-section">
				
				<?php 
					if(have_posts()){
						while(have_posts()){
							the_post();
				?>

				<div class="col-md-3">
					<?php 
						if(has_post_thumbnail()){
						the_post_thumbnail('full',array('class'=>'img-responsive'));
						}
					?>
				</div>
				<div class="col-md-9">
					<div class="about-text">
						<h3><u><?php the_title();?></u></h3>
						 <p><?php the_content();?></p>
						 <a href="<?php the_permalink(); ?>"><button class="btn btn-info">Read More</button></a>
					</div>
				</div>
				<?php } } ?>
			</div>
		</div> 
	<div class="container"> <?php get_template_part('part/about'); ?> </div>
	</section>


    <?php get_footer(); ?>
</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->

</body>
</html>