<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile | ESM</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/custom-style.css" />
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
		<h1>Provider Profile</h1>
		<p>This is the provider profile page, and if you do some exploring you can discover its powers.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<div class="row section">

	<!--Begin User Profile Vertical Accordian -->
	<div class="small-12 medium-3 columns">
		<ul class="no-bullet profile-nav-vertical">
		 <dl class="accordion" data-accordion>
		  <dd>
		    <a href="#user-profile-about">About</a>
		    <div id="user-profile-about" class="content active">
		      <ul class="no-bullet">
		      	<li>Don Draper</li>
		      	<li>Sterling Cooper</li>
		      	<li>Baller</li>
		      </ul>
		    </div>
		  </dd>
		  <dd>
		    <a href="#user-profile-comment">Comment</a>
		    <div id="user-profile-comment" class="content">
		    	 <p>Comment information</p>
		    </div>
		  </dd>
		  <!--<dd>
		    <a href="#user-profile-request">Request Information</a>
		    <div id="user-profile-request" class="content">
		    	 <p>Request Information information</p>
		    </div>
		  </dd>
		  <dd>
		    <a href="#user-profile-bookmark">Bookmark</a>
		    <div id="user-profile-bookmark" class="content">
		    	 <p>Bookmark information</p>
		    </div>
		  </dd>-->
		</dl>
		</ul>
	</div>
	<!--End User Profile Vertical Accordian-->

	<!-- Begin User Profile tabs -->
	<div class="small-12 medium-9 columns">
		<!-- A default button-group with small buttons inside -->
		<ul class="button-group profile-nav" data-tab>
		  <li class="tab-title active"><a class="button button-blue" href="#panelprofile-details"><i class="fa fa-user"></i> Details</a></li>
		  <li class="tab-title"><a class="button button-blue" href="#panelprofile-mission"><i class="fa fa-bullseye"></i> Mission</a></li>
		  <li class="tab-title"><a class="button button-blue" href="#panelprofile-photos"><i class="fa fa-camera"></i> Photos</a></li>
		  <li class="tab-title"><a class="button button-blue" href="#panelprofile-projects"><i class="fa fa-briefcase"></i> Projects</a></li>
		  <li class="profile-links right">
		  	<a><i class="fa fa-info"></i> Request Information</a><br />
		  	<a><i class="fa fa-bookmark"></i> Bookmark</a>
		  </li>
		</ul>
		<div class="tabs-content user-profile">
		  <div class="content active" id="panelprofile-details">
		    <div class="row">
				<div class="small-12 medium-9 columns">
				<h3>Don Draper</h3>
	             	<p><strong>About: </strong> Creative Director at Sterling Cooper Draper Pryce. </p>
	            	<p><strong>Hobbies: </strong> Man of mystery. </p>
	                <p><strong>Skills: </strong>
	                	<span class="tags">womanizing</span> 
	                    <span class="tags">sales pitching</span>
	                  	<span class="tags">smoking</span>
	                    <span class="tags">drinking</span>
	                </p>
	        	</div>

	        	<div class="small-12 medium-3 columns">
	        		<img class="img-circle" src="img/don-draper.jpg">
	        	</div>
	        </div> <!--/.row-->
		  </div>

		  <div class="content" id="panelprofile-mission">
		    <h4>Mission Statement</h4>
		    <p>The world is changing all around us. To continue to thrive as a business over the next ten years and beyond, we must look ahead, understand the trends and forces that will shape our business in the future and move swiftly to prepare for what's to come. We must get ready for tomorrow today. That's what our 2020 Vision is all about. It creates a long-term destination for our business and provides us with a "Roadmap" for winning together with our bottling partners.</p>
		  	<br />
		  	<h4>Core Values</h4>
		  	<ul>
		  		<li>People: Be a great place to work where people are inspired to be the best they can be.</li>
		  		<li>Portfolio: Bring to the world a portfolio of quality beverage brands that anticipate and satisfy people's desires and needs.</li>
		  		<li>Partners: Nurture a winning network of customers and suppliers, together we create mutual, enduring value.</li>
		  		<li>Planet: Be a responsible citizen that makes a difference by helping build and support sustainable communities.</li>
		  		<li>Profit: Maximize long-term return to shareowners while being mindful of our overall responsibilities.</li>
		  		<li>Productivity: Be a highly effective, lean and fast-moving organization</li>
		  	</ul>
		  </div>
		  <div class="content" id="panelprofile-photos">
		  	<a class="th radius text-center">
				<img src="img/profile-wide.jpg">
				<h5>Windmills</h5>
				<p>A group of high-powered windmills.</p>
			</a>
		  </div>
		  <div class="content" id="panelprofile-projects">
		    <p>Projects info goes here.</p>
		  </div>
		</div> <!--User Profile tabs-->

	</div>
	<!--End User Profile-->
</div> <!--/.row-->


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>