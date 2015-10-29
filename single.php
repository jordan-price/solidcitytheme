<?php get_header();?>

 <?php get_template_part('/inc/navigation'); ?>



<div class="container">

		<header>
			<div class="page-header">
				<h1><?php the_title(); ?></h1>
			</div>
		</header>


		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


		<div class="row">
		<div class="col-md-9">

			<?php the_content(); ?>


		<?php endwhile; else: ?>

			<div class="page-header">
				<h1>Oh no!</h1>
			</div>
			
			<p>No content is appearing for this page!</p>

		<?php endif; ?>

		</div>

		<?php get_sidebar('blog'); ?>
		
	</div>
</div>
<?php get_footer(); ?>
