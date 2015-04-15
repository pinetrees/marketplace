<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>{{ $page->title }} | ESM</title>
  @include('head')
</head>
<script>
var query = {{ json_encode($query) }};
</script>
<?php extract($query); ?>
@include('header')

<body>

<!--Feature component used below the header of pages
	Uses: h1, p
	Structure: Title, title descriptor
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>{{ $page->title }}</h1>
		<p>{{ $page->summary }}</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<br>
<div class="row">
	<div class="small-12 columns search-query">
		<h3>Search Listings</h3>
	</div>
</div> <!--/.row-->

<!-- Begin Search query form -->
<form method="get" action="/market/query">
<div class="row">
    <div class="small-12 columns">
        <input type="text" name="query_string" placeholder="Query">
    </div>
</div> <!--/.row-->

<div class="row">
	<div class="small-12 medium-3 columns">
      <input type="radio" name="type" value="service" id="searchServices"@if( 'service' == $type ) checked="checked" @endif><label for="searchServices">Services</label>
      <input type="radio" name="type" value="project" id="searchProjects"@if( 'project' == $type ) checked="checked" @endif><label for="searchProjects">Projects</label>
	</div>

	<div class="small-12 medium-3 columns">
        <select name="category">
          <option value="0">All Categories</option>
	  @foreach($categories as $option)
	  <option value="{{ $option->id }}"@if( $option->id == $category ) selected="selected" @endif>{{ $option->name }}</option>
	  @endforeach
        </select>
     </div>

     <div class="small-12 medium-2 columns">
        <select name="region">
          <option value="0">All Regions</option>
	  @foreach($regions as $option)
	  <option value="{{ $option->id }}"@if( $option->id == $region ) selected="selected" @endif>{{ $option->name }}</option>
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
			<h5><span>{{ count($results) }}</span> {{ Text::queryText($results) }} <span>{{ $query_string }}</span></h5>
		</div>
	</div> <!--/.row-->

	<div class="row">
		@include('/market/sidebar')

		<div class="small-12 medium-10 columns">

			@foreach( $projects as $result )
			@include( 'templates/project' )
			@endforeach
			@foreach( $services as $result )
			@include( 'templates/service' )
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
<script>
var results = [];
$('.filters .category a').click(function(){
	query.category = $(this).attr('data-value');
	$selected = $(this);
	$.post('/query', query, function(res){
		results = $.parseJSON(res);
		$('.filters .category a').removeClass('active');	
		$selected.addClass('active');	
	});
});
$('.filters .region a').click(function(){
	query.region = $(this).attr('data-value');
	$selected = $(this);
	$.post('/query', query, function(res){
		results = $.parseJSON(res);
		$('.filters .region a').removeClass('active');	
		$selected.addClass('active');	
	});
});

var projects = {{ $projects }};
$.each(projects, function(index, project){
        indexedProjects[project.id] = project;
});     
var services = {{ $services }};
$.each(services, function(index, service){
        indexedServices[service.id] = service;
});     
</script>
