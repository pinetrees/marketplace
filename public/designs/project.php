<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Project | ESM</title>
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
	Uses: h1, breadrumbs
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>Need Clean Air Consultant</h1>
	</div>
  <div class="small-10 small-offset-1 medium-6 medium-offset-3">
    <ul class="breadcrumbs">
      <li><a href="#">Home</a></li>
      <li><a href="#">Categories</a></li>
      <li><a href="#">Air</a></li>
      <li class="current"><a href="#">Consultant</a></li>
    </ul>
  </div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section view-project">
  <div class="small-12 large-8 columns">
    <div class="panel">
      <div class="row project-details">
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-pencil-square-o"></i> Posted: 1m ago</li>
            <li><i class="fa fa-globe"></i> Location: San Francisco, CA</li>
          </ul>
        </div>
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-calendar"></i> Start: Thu, Jul 24</li>
            <li><i class="fa fa-money"></i> Rate: $20-$30 / hr</li>
          </ul>
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="project-buyer-info small-12 columns">
          <div class="panel">
            <ul class="inline-list">
              <li><img src="img/user-profile.png" alt="avatar" width="50"></li>
              <li>
                <span>Client Name</span>
                <span>United States</span>
              </li>
            </ul>
          </div> <!--/.panel-->
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="project-description small-12 columns">
          <p>I am looking to hire a clean air consultant for my restaurant.  I need to improve the overall Indoor Air Quality (IAQ) to meet industry standards.</p>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

          <h4>Job Details</h4>
          <ul>
            <li>Eliminate Toxic Mold</li>
            <li>Reduce Heating and Cooling Costs</li>
            <li>Purify Air</li>
            <li>Dryer Vent Cleaning</li>
            <li>Eliminate the Risk of Fire</li>
          </ul>

          <h4>Required Qualifications</h4>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ul>

          <h4>Desired Qualifications</h4>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
            <li>Lorem Ipsum</li>
          </ul>

          <h4>Desired Skills</h4>
          <ul class="inline-list">
            <li class="tags">Skill 1</li>
            <li class="tags">Skill 2</li>
            <li class="tags">Skill 3</li>
            <li class="tags">Skill 4</li>
          </ul>
        </div>
      </div> <!--/.row--> 
    </div>
    <div class="project-description-footer">
      <span>Job ID:00001</span>
    </div>
  </div>

  <div class="small-12 large-4 columns">
    <div class="panel">
      <button class="button btn-blue btn-passport">Contact Client</button>
      <button class="button btn-blue btn-passport">Submit Proposal</button>
    </div>
  </div>
</section>

<?php include("footer.php"); ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>