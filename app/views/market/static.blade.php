<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Market | ESM</title>
  @include('head')
</head>

@include('header')

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
<form method="post" action="/market">
<div class="row">
    <div class="small-12 columns">
        <input type="text" name="query" placeholder="Query">
    </div>
</div> <!--/.row-->

<div class="row">
	<div class="small-12 medium-3 columns">
      <input type="radio" name="type" value="service" id="searchServices"><label for="searchServices">Services</label>
      <input type="radio" name="type" value="project" id="searchProjects" checked="checked"><label for="searchProjects">Projects</label>
	</div>

	<div class="small-12 medium-3 columns">
        <select name="category">
          <option value="">-Select Category-</option>
	  @foreach($categories as $category)
	  <option value="{{ $category->id }}">{{ $category->name }}</option>
	  @endforeach
        </select>
     </div>

     <div class="small-12 medium-2 columns">
        <select name="search-region">
          <option value="">-Select Region-</option>
	  @foreach($regions as $region)
	  <option value="{{ $region->id }}">{{ $region->name }}</option>
	  @endforeach
        </select>
     </div>

     <div class="small-12 medium-2 columns">
        <select name="sort-by">
          <option value="">-Sort by-</option>
          <option value="">Creation Date</option>
          <option value="">Category</option>
          <option value="">Region</option>
        </select>
     </div>

     <div class="small-12 medium-2 columns">
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
			@foreach( $subcategories as $subcategory )
      			<a><input id="checkbox1" type="checkbox"><label for="checkbox1">not</label></a>
			@endforeach
      			<a><input id="checkbox2" type="checkbox" checked><label for="checkbox2">to be</label></a>
      			<a><input id="checkbox3" type="checkbox" checked><label for="checkbox3">to be</label></a>
			  </li>
			</ul>
		</div>

		<div class="small-12 medium-10 columns">

			@foreach( $results as $result )
			@include( 'templates/result' )
			@endforeach
			<br><br>
			<a class="btn btn-blue btn-passport">Load More</a>

	
	</div>
	</div> <!--/.row-->
	</section>
	<!--End Search Results Section-->
</div> <!--/#search-->


@include('footer')

@include('modals')

@include('foot')

</body>
</html>
