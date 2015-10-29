 <?php get_header();?>

  <?php get_template_part('/inc/navigation'); ?>



<div class="container">

			<header>
			<div class="page-header text-center">
				<h1>Hello World</h1>
			</div>
		</header>

	<div class="">
		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; endif; ?>


	</div>
</div>
<?php get_footer(); ?>


