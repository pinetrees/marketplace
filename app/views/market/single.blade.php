<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>{{ $page->title }} | ESM</title>
  @include('head')
</head>
<script>
</script>
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

<!-- Begin Search query form -->
<form method="get" action="/market/query">
<div class="row">
    <div class="small-12 medium-10 columns">
        <input type="text" name="query" placeholder="Query">
    </div>
     <div class="small-12 medium-2 columns">
     	<div class="switch has-tooltip" data-tooltip-name="market-type-switch">
		  <input id="x" name="type" type="radio" value="project" checked>
		  <label class="left" for="x" onclick="">Projects</label>

		  <input id="x1" name="type" type="radio" value="service">
		  <label class="right" for="x1" onclick="">Services</label>

		  <span></span>
		</div>
     </div>
</div> <!--/.row-->

</form>
<!--End search query form -->

<div class="market section" id="search">
	<!--Begin Search Results Section -->
	<section class="search-results">

	<div class="row">
		<div class="small-12 columns search-results-number hide">
			<h5><span class="search-results-counter">2</span> results</h5>
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
			<a class="btn btn-blue btn-passport load-more-results">Load More</a>

	
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
var projects = {{ $projects }};
$.each(projects, function(index, project){
        indexedProjects[project.id] = project;
});     
var services = {{ $services }};
$.each(services, function(index, service){
        indexedServices[service.id] = service;
});     
@if(isset($type))
query.type = '{{ $type }}';
@endif
@if(isset($categoryExtension))
categoryExtension = {{ $categoryExtension }};
@endif
</script>
<script src="/js/market.js"></script>
