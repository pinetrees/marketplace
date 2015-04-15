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
		  <li class="tab-title active"><a href="#projects" class="button button-blue has-tooltip" data-tooltip-name="dashboard-projects"><i class="fa fa-briefcase"></i> Projects</a></li>
		  <li class="tab-title"><a href="#bookmarked-services" class="button button-blue"><i class="fa fa-briefcase"></i> Bookmarked Services</a></li>
		  <li class="tab-title"><a href="#current-services" class="button button-blue"><i class="fa fa-briefcase"></i> Current Services</a></li>
		  <li class="tab-title"><a href="#settings" class="button button-blue has-tooltip" data-tooltip-name="dashboard-settings"><i class="fa fa-cogs"></i> Settings</a></li>

		</ul>

		<!-- Content for main tabs -->
		<div class="tabs-content">

			<!-- Dashboard tab -->
			<div class="content user-profile" id="dashboard">
			    <p>dashboard content goes here...</p>
			</div>

			<!-- Projects tab -->
			<div class="content user-profile active" id="projects">
				<div class="data-tab update project" data-name="update">
					@include('project/update')
				</div>
			</div>

			<!-- Bookmarked Services tab -->
			<div class="content user-profile" id="bookmarked-services">
				@if( Auth::user()->bookmarks->count() == 0 )
				<p class="response center">You have no bookmarked projects</p>
			        <a href="/market" class="button btn-blue btn-passport">Go to the market</a>
				@endif
				@foreach( Auth::user()->bookmarks as $result )
					@include('templates.service')
				@endforeach
			</div>

			<!-- Current Services tab -->
			<div class="content user-profile" id="current-services">
				@foreach( $projects as $project )
					@if( $project->isAssigned() )
					@foreach( $project->provider->services as $result )
						@include('templates.service')
					@endforeach
					@endif
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
@if($tab)
<script>
	$('a').filter(function(){
		return ( $(this).attr('href') == '#{{$tab}}' );
	}).trigger('click')
</script>
@endif
