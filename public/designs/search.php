<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search | ESM</title>
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
		<h1>Search</h1>
		<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<br>
<div class="row">
	<div class="small-12 columns search-query">
		<h3>Search Query</h3>
	</div>
</div> <!--/.row-->

<!-- Begin Search query form -->
<form>
<div class="row">
    <div class="small-12 columns">
        <input type="text" name="search-query" placeholder="Query">
    </div>
</div> <!--/.row-->

<div class="row">
	<div class="small-12 medium-3 columns">
      <input type="radio" name="search-radio-type" value="Providers" id="searchProviders"><label for="searchProviders">Providers</label>
      <input type="radio" name="search-radio-type" value="Projects" id="searchProjects"><label for="searchProjects">Projects</label>
	</div>

	<div class="small-6 medium-3 columns">
        <select name="search-category">
          <option value="husker">-Select Category-</option>
          <option value="">C 1</option>
          <option value="">C 2</option>
          <option value="">C 3</option>
        </select>
     </div>

     <div class="small-6 medium-2 columns">
        <select name="search-region">
          <option value="">-Select Region-</option>
          <option value="">R 1</option>
          <option value="">R 2</option>
          <option value="">R 3</option>
        </select>
     </div>

     <div class="small-6 medium-2 columns">
        <select name="sort-by">
          <option value="">-Sort by-</option>
          <option value="">S 1</option>
          <option value="">S 2</option>
          <option value="">S 3</option>
        </select>
     </div>

     <div class="small-6 medium-2 columns">
     	<div class="switch">
		  <input id="x" name="switch-x" type="radio" value="0" checked>
		  <label for="x" onclick="">Coolness</label>

		  <input id="x1" name="switch-x" type="radio" value="1">
		  <label for="x1" onclick="">On</label>

		  <span></span>
		</div>
     </div>
</div> <!--/.row-->
</form>
<!--End search query form -->

<div class="section" id="search">
	<!--Begin Search Results Section -->
	<section class="search-results">

	<div class="row">
		<div class="small-12 columns search-results-number">
			<h3>Search Results</h3>
			<h5><span>2</span> results were found for the search for <span>Energy</span></h5>
		</div>
	</div> <!--/.row-->

	<div class="row">
		<div class="small-12 medium-2 columns">
			<ul class="side-nav">
			  <li><a href="#">Filter</a></li>
			  <li><a href="#">Results</a></li>
			  <li><a href="#">Using</a></li>
			  <li><a href="#">This</a></li>
			  <li><a href="#">List</a></li>
			  <li class="search-result-checkbox">
      			<a><input id="checkbox1" type="checkbox"><label for="checkbox1">not</label></a>
      			<a><input id="checkbox2" type="checkbox" checked><label for="checkbox2">to be</label></a>
      			<a><input id="checkbox3" type="checkbox" checked><label for="checkbox3">to be</label></a>
			  </li>
			</ul>
		</div>

		<div class="small-12 medium-10 columns">

			<article class="search-result row">
				<div class="small-12 medium-3 columns">
					<a href="#" title="Lorem ipsum" class="thumbnail img-responsive img-thumbnail"><img src="img/profile-5.png" alt="Lorem ipsum"></a>
				</div>

				<div class="small-12 medium-2 columns">
					<ul class="no-bullet">
						<li><i class="fa fa-calendar"></i> <span>07/04/2014</span></li>
						<li><i class="fa fa-clock-o"></i> <span>10:52 am</span></li>
						<li><a><i class="fa fa-eye"></i> <span>View</span></a></li>
						<li><a><i class="fa fa-bookmark"></i> <span>Bookmark</span></a></li>
					</ul>
				</div>

				<div class="small-12 medium-7 columns excerpt">
					<h4><a href="#" title="">This is the title of a search result</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
	                <span class="plus"><a href="#" title="Lorem ipsum"><i class="fa fa-plus"></i></a></span>
				</div>
			</article> <!--/.row-->

			<article class="search-result row">
				<div class="small-12 medium-3 columns">
					<a href="#" title="Lorem ipsum" class="thumbnail img-responsive img-thumbnail search-result-avatar"><img src="img/profile-4.png" alt="Lorem ipsum"></a>
				</div>

				<div class="small-12 medium-2 columns">
					<ul class="no-bullet">
						<li><i class="fa fa-calendar"></i> <span>07/04/2014</span></li>
						<li><i class="fa fa-clock-o"></i> <span>2:31 pm</span></li>
						<li><a><i class="fa fa-eye"></i> <span>View</span></a></li>
						<li><a><i class="fa fa-bookmark"></i> <span>Bookmark</span></a></li>
					</ul>
				</div>

				<div class="small-12 medium-7 columns excerpt">
					<h4><a href="#" title="">This is the title of a search result</a></h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, exercitationem, suscipit, distinctio, qui sapiente aspernatur molestiae non corporis magni sit sequi iusto debitis delectus doloremque.</p>						
	                <span class="plus"><a href="#" title="Lorem ipsum"><i class="fa fa-plus"></i></a></span>
				</div>
			</article> <!--/.row-->

			<br><br><br>
			<a class="btn btn-blue btn-passport">Load More</a>

	
	</div>
	</div> <!--/.row-->
	</section>
	<!--End Search Results Section-->
</div> <!--/#search-->


<?php include("footer.php"); ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>
