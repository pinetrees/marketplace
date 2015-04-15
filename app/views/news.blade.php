<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>{{ $page->title }} | ESM</title>
  @include('head');
</head>

@include('header');

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

<div class="row section" id="about">

	<!--Begin News Section -->
	<div class="small-12 columns">
		@foreach( $page->content as $article )
		<h1>{{ $article->title }}</h1>
		<p>{{ $article->content }}</p>
		@endforeach
	</div>
	<!--End News Section-->

</div> <!--/.row-->

<div class="call-to-action">
<div class="row section text-center">
	<h2>Get in touch</h2>
	<p>Find out more about how we can help.</p>
	<a data-reveal-id="contactModal" class="button button-success">Contact</a>
</div> <!--/.row-->
</div> <!--/.call-to-action-->


@include('footer')

@include('modals')

@include('foot')

</body>
</html>
