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
  					<h2 class="text-center">Create Something New</h2>
  					<h4 class="text-center home-sub-header">Easy on-demand printing, fulfilmment &amp; Shipping. Create custom apparel with out the risk and hassel.</h4>
  				</div>
  				<div class="col-md-6 col-sm-12 col-xs-12">
  					<form class="home-form">
  					<h3 class="">Sign up</h3>
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
<!--   			<div class="row blue">
  				<div class="upper-height col-md-5 col-sm-12 col-xs-12" style="background-color: #ffd7a3;">
  					<img class="padding-left-10 "src="https://www.theprintful.com/static/images/site/volume_discounts/ilsutracija.svg">
  				</div>
  				<div class="text-column upper-eight col-md-7 col-sm-12 col-xs-12">	
  			</div>
  		</div> -->

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
			          <p>No expensive printing machines, no storage</p>
			        </div><!-- /.col-sm-4 -->
			        <div class="col-sm-4">
			          <img class="img-circle" src="http://solid.city/wp-content/themes/thesolidcity/img/no-min-02.png" alt="Generic placeholder image" width="140" height="140">
			          <h2 class="key-values">No minimums</h2>
			          <p>Only order what you need when you need it</p>
			        </div><!-- /.col-sm-4 -->
			        <div class="col-sm-4">
			          <img class="img-circle" src="http://solid.city/wp-content/themes/thesolidcity/img/easy-04.png" alt="Generic placeholder image" width="140" height="140">
			          <h2 class="key-values">Easy To Use</h2>
			          <p>It's simple to create &amp; order your custom products</p>
			        </div><!-- /.col-sm-4 -->
			      </div><!-- /.row -->

			      <div class="col-xs-12">
			        <div class="text-center">
			        <p><a class="get-started-call btn btn-default" href="" role="button">Get Started</a></p>
			      </div>
			  </div>
			</div>
</div>



<div class="container">

			    <div class="row">
			    	<h1 class="text-center">Easy To Use Application</h1>
			    	<h2>1. Create Custom Apparel</h2>
			    	<h2>2. Sell To Anyone and Everyone</h2>
			    	<h2>3. Only Order What you Need</h2>
			    </div>

				<hr>

				<div class="row">
			    	<h1 class="text-center">Already Used By</h1>
			    	<ul>
			    		<li>Vunder Sports</li>
			    		<li>Bearded Bodybuilding</li>
			    		<li>Soul Fitness</li>
			    		<li>Netflix Customer Service</li>
			    	</ul>

			    	<h3 class="text-center">&amp; 2351 more Creators!</h3>
			    </div>

			    <hr>

			    <div class="">
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
  				</div>
  		</div>
  		</div>

<?php get_footer();




