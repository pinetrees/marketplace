<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Dashboard | ESM</title>
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
		<h1>Dashboard</h1>
		<p>This is the dashboard.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<div class="row section">

	<!-- Begin User Settings Box -->
	<div class="small-12 columns">
		<!-- Main tabs for page -->
		<ul class="button-group profile-nav" data-tab>
		  <li class="tab-title active"><a href="#services" class="button button-blue"><i class="fa fa-briefcase"></i> Services</a></li>
		  <li class="tab-title"><a href="#bookmarked-projects" class="button button-blue"><i class="fa fa-briefcase"></i> Bookmarked Projects</a></li>
		  <li class="tab-title"><a href="#current-projects" class="button button-blue"><i class="fa fa-briefcase"></i> Current Projects</a></li>
		  <li class="tab-title"><a href="#settings" class="button button-blue"><i class="fa fa-cogs"></i> Settings</a></li>

		</ul>

		<!-- Content for main tabs -->
		<div class="tabs-content">

			<!-- Dashboard tab -->
			<div class="content user-profile" id="dashboard">
			    <p>dashboard content goes here...</p>
			</div>

			<!-- Services tab -->
			<div class="content user-profile active" id="services">
				<div class="data-tab update service" data-name="update">
					@include('service/update')
				</div>
			</div>

			<!-- Bookmarked projects tab -->
			<div class="content user-profile" id="bookmarked-projects">
				@if( Auth::user()->bookmarks->count() == 0 )
				<p class="response center">You have no bookmarked projects</p>
			        <a href="/market" class="button btn-blue btn-passport">Go to the market</a>
				@endif
				@foreach( Auth::user()->bookmarks as $result )
					@include('templates.project')
				@endforeach
			</div>

			<!-- Current Projects tab -->
			<div class="content user-profile" id="current-projects">
				@foreach( Auth::user()->assignments as $result )
					@include('templates.project')
				@endforeach
			</div>

			<div class="small-12 columns content user-profile" id="settings">
				@include('settings')
			</div> <!--/#settings-->

		</div>


	</div>
	<!--End User Settings Box-->
</div> <!--/.row-->

@include('foot');

</body>
</html>
