<?php get_header();?>

 <?php get_template_part('/inc/navigation'); ?>



<div class="container">

	<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="blog-title">
				<h1><?php the_title(); ?></h1>
				<p>By <?php the_author_posts_link(); ?> on <?php echo the_time('l, F jS, Y') ?> in <?php the_category (', ')?></p>
			</div>

		<hr>

		

		<div class="row">
		<div class="col-md-9">


			<?php the_content(); ?>

			<div class="text-center">
					<div class="btn btn-default"><?php previous_post_link();?></div>
					<div class="btn btn-default"><?php next_post_link();?></div>
			</div>
			

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
