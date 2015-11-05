 <?php 
/**
 * Template Name: FAQ
 */
 ?>

 <?php get_header(); 

  get_template_part('/inc/navigation');

 ?>


		<div class="container">

			<h1 class="solid-blog text-center"><?php the_title();?></h1>


		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<div class="container">
				<h1>Oh no!</h1>		
			<p>No content is appearing for this page!</p>
			</div>
		<?php endif; ?>


<?php get_footer();


