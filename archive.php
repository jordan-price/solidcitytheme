 <?php get_header();?>

 <?php get_template_part('/inc/navigation'); ?>



<div class="container">

		<div class="solid-blog text-center">
			<h1><?php the_title();?></h1>
		</div>

		<div class="row">

		<div class="col-md-9">


		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article <?php post_class(); ?>>
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<p>By <?php the_author_posts_link(); ?> on <?php echo the_time('l, F jS, Y') ?> in <?php the_category (', ')?></p>
				<hr>
				<?php the_excerpt(); ?>
				<a class=""href="<?php the_permalink(); ?>">Read More</a>
			</article>

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


