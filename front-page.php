 <?php get_header();?>

 <?php get_template_part('/inc/navigation'); ?>


		<div class="">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1 class="starter-template">Create Something New!</h1>
						<h4>Easy on-demand printing, fulfilmment &amp; Shipping. Create custom apparel with out the risk and hassel.</h4>
						<a class="btn btn-default"href="">Learn More</a>
					</div>
					<div class="col-sm-6">
						<div class="">
						<form>
							<h3 class="form-header">Sign Up for Free!</h3>
						 <div class="form-group">
						    <input type="text" class="form-control" id="fullName" placeholder="Full Name">
						  </div>
						  <div class="form-group">
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						  </div>
						  <div class="form-group">
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
<!-- 						  <div class="checkbox">
						   <label>
						    <input type="checkbox"> Check me out
						   </label>
						  </div> -->
						  <p>By signing up you agree with Terms and Privacy Policy </p>
						  <button type="submit" class="btn btn-default">Get Started</button>
					</form>
					</div>
					</div>
				</div>
				<hr>
			</div>
		</div>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1 class="text-center">How it works</h1>
		</div>
		<div class="col-sm-4">
			<h2 class="text-center">No Inventory</h2>
		</div>
		<div class="col-sm-4"><h2 class="text-center">No Minimum Orders</h2></div>
		<div class="col-sm-4"><h2 class="text-center">Easy to Use</h2></div>
	</div>
	<div class="">
		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php the_content(); ?>

		<?php endwhile; endif; ?>


	</div>
</div>
<?php get_footer(); ?>


