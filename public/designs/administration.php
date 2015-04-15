<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Administration | ESM</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/custom-style.css" />
  <link rel="stylesheet" href="css/responsive-tables.css">
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="js/vendor/modernizr.js"></script>
</head>

<?php include("header-logged-in.php"); ?>

<body>

<!--Feature component used below the header of pages
	Uses: h1, p
	Structure: Title, title descriptor
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>Administration</h1>
		<p>An interface to administer your profile.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<div class="row section">

	<!-- Begin Administration Box -->
	<div class="small-12 columns">
		<!-- Main tabs for page -->
		<ul class="button-group profile-nav" data-tab>
		  <li class="tab-title active"><a href="#projects" class="button button-blue active"><i class="fa fa-briefcase"></i> Projects</a></li>
		  <li class="tab-title"><a href="#users" class="button button-blue"><i class="fa fa-users"></i> Users</a></li>
		  <li class="tab-title"><a href="#data" class="button button-blue"><i class="fa fa-database"></i> Data</a></li>
		  <li class="tab-title"><a href="#configuration" class="button button-blue"><i class="fa fa-cogs"></i> Configuration</a></li>

		</ul>

		<!-- Content for main tabs -->
		<div class="tabs-content">

			

			<!-- Dashboard tab -->
			<div class="content active user-profile" id="projects">

				<!--Administration Project-->
				<div class="row admin-project first">  
				<h3>Project One</h3>  
					<div class="small-12 medium-12 large-2 columns">
						<img class="img-circle" src="img/don-draper.jpg" width="150">
						<blockquote>
			                <p>The Title</p> <small><cite title="Source Title">A caption <i class="glyphicon glyphicon-map-marker"></i></cite></small>
			            </blockquote>
					</div>
					 <div class="small-12 medium-12 large-7 columns">
			            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			        </div>

			        <div class="small-12 medium-12 large-3 columns">
			        	<p class="panel">don@draper.com
			                <br
			                />www.dd.com
			                <br />(123) 456-7890
			            </p>
			        </div>
		    	</div> <!--/.row-->
		    	<!--End Administration project-->

		    	<!--Administration Project-->
				<div class="row admin-project"> 
				<h3>Project Two</h3>     
					<div class="small-12 medium-12 large-2 columns">
						<img class="img-circle" src="img/don-draper.jpg" width="150">
						<blockquote>
			                <p>The Title</p> <small><cite title="Source Title">A caption <i class="glyphicon glyphicon-map-marker"></i></cite></small>
			            </blockquote>
					</div>
					 <div class="small-12 medium-12 large-7 columns">
			            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
			        </div>

			        <div class="small-12 medium-12 large-3 columns">
			        	<p class="panel">don@draper.com
			                <br
			                />www.dd.com
			                <br />(123) 456-7890
			            </p>
			        </div>
		    	</div> <!--/.row-->
		    	<!--End Administration project-->

			</div>

			<!-- Users tab -->

				<div class="content user-profile" id="users">

					<!-- Admin actions -->
					<ul class="button-group admin-actions">
					  <li><a href="contactModal" class="modal-action button" data-reveal-id="contactModal">Contact</a></li>

					 	<!--Start Contact Modal
						    =========================================== -->
						<div id="contactModal" class="reveal-modal" data-reveal>
						  <div class="row">
						    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
						      <h3 class="pageheader">Contact</h3>
						        <form>
							        <input type="email" name="contact-email" placeholder="Email Address">

							        <textarea type="text" name="contact-message" placeholder="Message" rows="4"></textarea>

							        <a class="btn-passport btn-blue">Submit</a>
							      </form>
							      <a class="close-reveal-modal">&#215;</a>
							    </form>
						    </div>
						  </div> <!--/.row-->
						</div>
						<!--End Thanks Modal-->

					  <li><a href="#" class="button">View</a></li>
					  <li><a href="#" class="button">Data</a></li>
					</ul>
					<!-- End admin actions -->

					<!-- Admin users table -->
				    <table class="responsive">
					  <thead>
					    <tr>
					      <th width="200">Name</th>
					      <th width="200">Type</th>
					      <th width="200">Member since</th>
					      <th width="200">Last activity</th>
					      <th >Status</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>Don Draper</td>
					      <td>Provider</td>
					      <td>June 2006</td>
					      <td>June 2014</td>
					      <td>Approved</td>
					    </tr>
					    <tr>
					      <td>Pete Campbell</td>
					      <td>Provider</td>
					      <td>June 2009</td>
					      <td>June 2014</td>
					      <td>Pending</td>
					    </tr>
					    <tr>
					      <td>Harold Crane</td>
					      <td>Buyer</td>
					      <td>June 2009</td>
					      <td>June 2014</td>
					      <td>Pending</td>
					    </tr>
					  </tbody>
					</table>
					<!--End admin users table-->
				</div>

			<!--End users tab-->

			<!-- Data tab -->	

				<div class="content user-profile" id="data">

					<!-- Admin actions -->
					<ul class="button-group admin-actions">
					  <li><a href="#" class="button">Form 1</a></li>
					  <li><a href="#" class="button">Form 2</a></li>
					  <li><a href="#" class="button">Form 3</a></li>
					</ul>
					<!-- End admin actions -->

					<!-- Admin data table -->
				    <table class="responsive">
					  <thead>
					    <tr>
					      <th width="200">User ID</th>
					      <th width="200">Employed</th>
					      <th width="200">Interest</th>
					      <th width="200">Company Size</th>
					      <th width="200">Company Economy</th>
					      <th width="200">Budget</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					      <td>1</td>
					      <td>Yes</td>
					      <td>Strong</td>
					      <td>Enormous</td>
					      <td>Flourishing</td>
					      <td>$30,000</td>
					    </tr>
					  </tbody>
					</table>
					<!--End admin data table-->
				</div>

			<!-- End data tab -->

			<!-- Configuration tab -->
			<div class="small-12 columns user-profile content" id="configuration">
				<h3>Configuration</h3>
				<div class="row">
					<!-- User admin side nav -->
					<div class="small-12 medium-3 columns">
				        <ul class="side-nav tab" data-tab>
						  <li class="tab-title active"><a href="#admin-personal">Administration</a></li>
						  <li class="tab-title"><a href="#admin-corporate">Content</a></li>
						  <li class="tab-title"><a href="#admin-details">Forms</a></li>
						</ul>  
					</div>  

					<div class="tabs-content">
						<!--User admin content area-->
						<div class="small-12 medium-9 columns">
					        <div class="settings-box">
					        	<!-- User admin form -->
					        	<form class="content active" id="admin-personal">
									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="admin-site-name" class="left inline">Site Name</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="text" id="admin-site-name" class="admin-site-name">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="admin-email" class="left inline">Contact Email</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="email" id="admin-email" class="admin-email">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="admin-telephone" class="left inline">Telephone</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="tel" id="admin-telephone" class="admin-telephone">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="admin-registration" class="left inline">Registration</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									        	<input type="radio" name="admin-registration" value="Open" id="admin-registrationOpen"><label for="admin-registrationOpen">Open</label>
      											<input type="radio" name="admin-registration" value="Closed" id="admin-registrationClosed"><label for="admin-registrationClosed">Closed</label>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
									        	<a class="btn-passport btn-blue">Save</a>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->
								</form>

							</div> <!--/.settings-box-->


						</div> <!--/.columns-->  
					</div> <!--/.tabs-content-->

				</div> <!--/.row-->
			</div> <!--/#settings-->
		</div>


	</div>
	<!--End Administration Box-->
</div> <!--/.row-->

<?php include("footer.php"); ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/responsive-tables.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>