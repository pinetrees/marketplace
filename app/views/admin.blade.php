<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Administration | ESM</title>
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
		<h1>Administration</h1>
		<p>This is the administration interface.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<div class="row section">

	<!-- Begin Administration Box -->
	<div class="small-12 columns">
		<!-- Main tabs for page -->
		<ul class="button-group admin profile-nav" data-tab>
		  <li class="tab-title"><a href="#users" class="button button-blue"><i class="fa fa-briefcase"></i> Users</a></li>
		  <li class="tab-title"><a href="#votables" class="button button-blue"><i class="fa fa-briefcase"></i> Votables</a></li>
		  <li class="tab-title"><a href="#vehicles" class="button button-blue"><i class="fa fa-users"></i> Vehicles</a></li>
		  <li class="tab-title"><a href="#listings" class="button button-blue"><i class="fa fa-database"></i> Listings</a></li>
		  <li class="tab-title"><a href="#vendors" class="button button-blue"><i class="fa fa-cogs"></i> Vendors</a></li>
		  <li class="tab-title"><a href="#statistics" class="button button-blue"><i class="fa fa-cogs"></i> Statistics</a></li>

		</ul>

		<!-- Content for main tabs -->
		<div class="tabs-content">

			

			<!-- Projects tab -->
			<div class="content user-profile" id="projects">
				@include('tables.projects')
			</div>

			<!-- Services tab -->
			<div class="content user-profile" id="services">
				@include('tables.services')
			</div>

			<!-- Users tab -->

				<div class="content user-profile" id="users">

					<!-- Admin actions -->
					<ul class="button-group admin-actions">
					  <li><a data-reveal-id="admin-contact" class="button">Create</a></li>
					  <li><a href="/user/[id]" class="view button">Modify</a></li>
					  <li><a href="#" class="become button">Delete</a></li>
					</ul>
					<!-- End admin actions -->

					<!-- Admin users table -->
   				        @include('tables.users')
					<!-- End admin users table -->
					@include('modals/admin-contact')
				</div>

			<!--End users tab-->

			@include('admin/filters')

			<!-- Configuration tab -->
			@include('/admin/configuration')
			<!-- End configuration tab -->

			<!-- Pages tab -->
			@include('/admin/pages')
			<!-- End pages tab -->

			<!-- Content tab -->
			@include('/admin/content')
			<!-- End content tab -->

		</div>


	</div>
	<!--End Administration Box-->
</div> <!--/.row-->

@include('footer');

@include('foot');

</body>
</html>
{{ HTML::script('js/admin.js') }}
<script>
var content = {{$content}}
</script>
