 <?php get_header(); 

  get_template_part('/inc/navigation');

  ?>


<!-- 
		<h1 class="solid-blog text-center"><?php the_title();?></h1>	 -->


		<?php  if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>


			<?php the_content(); ?>

		<?php endwhile; else: ?>

			<div class="container">
				<h1>Oh no!</h1>		
			<p>No content is appearing for this page!</p>
			</div>
		<?php endif; ?>


		<div class="container">
  			<div class="row">
  				<div class="home-header col-md-6 col-sm-12 col-xs-12">
  					<h2 class="">Create Something New</h2>
  					<h4 class="home-sub-header">Easy on-demand printing, fulfilmment &amp; Shipping. Create custom apparel with out the risk and hassel.</h4>
  					<!-- <p><a class="btn btn-default" href="" role="button">Learn More</a></p> -->
  				</div>
  				<div class="col-md-6 col-sm-12 col-xs-12">
  					<form class="home-form">
  					<h3 class="">Get Started For Free!</h3>
  					<div class="form-group">
					    <input type="text" class="form-control" id="fullname" placeholder="Full Name">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <button type="submit" class="get-started-call btn btn-default">Submit</button>
					</form>
  				</div>

  			</div>
</div>


<div class="container-fluid">
  		<div class="row how-it-works">
  			<h1 class="text-center">How It Works!</h1>
  			<div class="container marketing">
			<!-- Three columns of text below the carousel -->
			      <div class="row">
			        <div class="col-sm-4">
			          <img class="img-circle" src="http://solid.city/wp-content/themes/thesolidcity/img/no-in-03.png" alt="Generic placeholder image" width="140" height="140">
			          <h2 class="key-values">No Inventory</h2>
			          <h4>No expensive printing machines, no storage</h4>
			        </div><!-- /.col-sm-4 -->
			        <div class="col-sm-4">
			          <img class="img-circle" src="http://solid.city/wp-content/themes/thesolidcity/img/no-min-02.png" alt="Generic placeholder image" width="140" height="140">
			          <h2 class="key-values">No minimums</h2>
			          <h4>Only order what you need when you need it</h4>
			        </div><!-- /.col-sm-4 -->
			        <div class="col-sm-4">
			          <img class="img-circle" src="http://solid.city/wp-content/themes/thesolidcity/img/easy-04.png" alt="Generic placeholder image" width="140" height="140">
			          <h2 class="key-values">Easy To Use</h2>
			          <h4>It's simple to create &amp; order your custom products</h4>
			        </div><!-- /.col-sm-4 -->
			      </div><!-- /.row -->

<!-- 			      <div class="col-xs-12">
			        <div class="text-center">
			        <p><a class="get-started-call btn btn-default" href="" role="button">Get Started</a></p>
			      </div> -->
			  </div>
			</div>
<!-- 
			 <div class="row blue">
  				<div class="upper-height col-md-5 col-sm-12 col-xs-12">
  					<img class="padding-left-10 img-responsive"src="<?php bloginfo('template_directory'); ?>/img/Epson-Fabric-Print-04.png">
  				</div>
  				<div class="text-column col-md-7 col-sm-12 col-xs-12">
  			</div>
  		</div> -->

<!-- 			<div class="container">
			    <div class="row">
			    	<h1 class="text-center">Easy To Use Application</h1>
			    </div>

				<hr> -->

				<div class="row">
			    	<h1 class="text-center">Already Used By</h1>
			    	<h3 class="text-center">&amp; 2351 more Creators!</h3>
			    </div>

			    <hr>

<!-- 			    <div class="">
  					<form>
  					<h3 class="text-center">Sign up for Free</h3>
  					<div class="form-group">
					    <input type="text" class="form-control" id="fullname" placeholder="Full Name">
					  </div>
					  <div class="form-group">
					    <input type="email" class="form-control" id="email" placeholder="Email">
					  </div>
					  <div class="form-group">
					    <input type="password" class="form-control" id="password" placeholder="Password">
					  </div>
					  <button type="submit" class="btn btn-default">Submit</button>
					</form>
  				</div> -->
  		</div>
  		</div>

<?php get_footer();




