<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Settings | ESM</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/foundation-datepicker.css" />
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
		<h1>User Settings</h1>
		<p>This is the user settings page.</p>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<div class="row section">

	<!-- Begin User Settings Box -->
	<div class="small-12 columns">
		<!-- Main tabs for page -->
		<ul class="button-group profile-nav" data-tab>
		  <li class="tab-title active"><a href="#dashboard" class="button button-blue active"><i class="fa fa-user"></i> Dashboard</a></li>
		  <li class="tab-title"><a href="#projects" class="button button-blue"><i class="fa fa-briefcase"></i> Projects</a></li>
		  <li class="tab-title"><a href="#providers" class="button button-blue"><i class="fa fa-wrench"></i> Providers</a></li>
		  <li class="tab-title"><a href="#settings" class="button button-blue"><i class="fa fa-cogs"></i> Settings</a></li>

		</ul>

		<!-- Content for main tabs -->
		<div class="tabs-content">

			<!-- Dashboard tab -->
			<div class="content active user-profile" id="dashboard">
			    <p>dashboard content goes here...</p>
			</div>

			<!-- Projects tab -->
			<div class="content user-profile" id="projects">
			    <h3>Upload Project <small>General Information</small></h3>
				<div class="row">
					<!-- Upload project side nav -->
					<div class="small-12 medium-3 columns">
				        <ul class="side-nav tab" data-tab>
						  <li class="tab-title active"><a href="#project-details">Details</a></li>
						  <li class="tab-title"><a href="#project-mission">Mission</a></li>
						  <li class="tab-title"><a href="#project-photos">Photos</a></li>
						  <li class="tab-title"><a href="#project-involvement">Involvement</a></li>
						</ul>  
					</div>  

					<div class="tabs-content">
						<!--Upload project content area-->
						<div class="small-12 medium-9 columns">
					        <div class="settings-box">
					        	<!-- Upload projects form -->
					        	<form class="content active" id="projects-details">
									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="projects-company-name" class="left inline">Company Name</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="text" id="projects-company-name" class="projects-company-name">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="projects-company-email" class="left inline">Company Email</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="email" id="projects-company-email" class="projects-company-email">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="projects-project-description" class="left inline">Project Description</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <p style="font-size: 90%;">Please detail the overall purpose of the project, including problems and/or needs
									          	to be addressed, background of project location, existing conditions, and scope
									          	(specific goals, deliverables, tasks and deadlines).</p>
									          <input type="text" id="projects-project-description" class="projects-project-description">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="projects-project-description" class="left inline">Expected Dates</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <table class="table">
												<thead>
													<tr>
														<th>Start date&nbsp;
															<a href="#" class="button button-small button-blue" id="dp4" data-date-format="yyyy-mm-dd" data-date="2014-07-12">Change</a>
														</th>
														<th>End date&nbsp;
															<a href="#" class="button button-small button-blue" id="dp5" data-date-format="yyyy-mm-dd" data-date="2014-07-17">Change</a>
														</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td id="startDate">2014-07-12</td>
														<td id="endDate">2014-07-17</td>
													</tr>
												</tbody>
											</table>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="projects-project-category" class="left inline">Project Category</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <p style="font-size: 90%;">What categories apply to your project?  Select all that apply.</p>
									          </p>
									          <input id="checkbox-air" type="checkbox"><label for="checkbox-air">Air</label><br />
      										  <input id="checkbox-energy" type="checkbox"><label for="checkbox-energy">Energy</label><br />
      										  <input id="checkbox-environment" type="checkbox"><label for="checkbox-environment">Environment</label><br />
      										  <input id="checkbox-labs" type="checkbox"><label for="checkbox-labs">Labs</label><br />
      										  <input id="checkbox-materials" type="checkbox"><label for="checkbox-materials">Materials</label><br />
      										  <input id="checkbox-sustainability" type="checkbox"><label for="checkbox-sustainability">Sustainability</label><br />
      										  <input id="checkbox-health-safety" type="checkbox"><label for="checkbox-health-safety">Health &amp; Safety</label><br />
      										  <input id="checkbox-land-use" type="checkbox"><label for="checkbox-land-use">Land Use</label><br />
      										  <input id="checkbox-water" type="checkbox"><label for="checkbox-water">Water</label><br />
      										  <input id="checkbox-wastewater" type="checkbox"><label for="checkbox-wastewater">Wastewater</label><br />
      										  <input id="checkbox-non-profit" type="checkbox"><label for="checkbox-non-profit">Non Profit</label><br />
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
									        	<submit class="btn-passport btn-blue">Submit</submit>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->
								

								</form>

							</div> <!--/.settings-box-->


						</div> <!--/.columns-->  
					</div> <!--/.tabs-content-->

				</div> <!--/.row-->
			</div>

			<!-- Providers tab -->
			<div class="content user-profile" id="providers">
			    <p>providers content goes here...</p>
			</div>

			<!-- Settings tab -->
			<div class="small-12 columns user-profile content" id="settings">
				<h3>Settings</h3>
				<div class="row">
					<!-- User settings side nav -->
					<div class="small-12 medium-3 columns">
				        <ul class="side-nav tab" data-tab>
						  <li class="tab-title active"><a href="#settings-personal">Personal</a></li>
						  <li class="tab-title"><a href="#settings-corporate">Corporate</a></li>
						  <li class="tab-title"><a href="#settings-details">Details</a></li>
						</ul>  
					</div>  

					<div class="tabs-content">
						<!--User settings content area-->
						<div class="small-12 medium-9 columns">
					        <div class="settings-box">
					        	<!-- User settings form -->
					        	<form class="content active" id="settings-personal">
									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="settings-first" class="left inline">First Name</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="text" id="settings-first" class="settings-first">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="settings-last" class="left inline">Last Name</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="text" id="settings-last" class="settings-last">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="settings-telephone" class="left inline">Telephone</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="tel" id="settings-telephone" class="settings-telephone">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-3 columns">
									          <label for="settings-question" class="left inline">Question</label>
									        </div>
									        <div class="small-12 medium-9 large-7 columns left">
									          <input type="number" id="settings-question" class="settings-question">
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
									        	<input type="checkbox" name="login-checkbox" id="login-checkbox"><label for="login-checkbox">I am cool.</label>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->

									<div class="row">
									    <div class="small-12 columns">
									      <div class="row">
									        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
									        	<a class="btn-passport btn-blue">Save</a>
									        </div>
									      </div> <!--/.row-->
									    </div>
									</div> <!--/.row-->
								</form>

							</div> <!--/.settings-box-->


						</div> <!--/.columns-->  
					</div> <!--/.tabs-content-->




				</div> <!--/.row-->
			</div> <!--/#settings-->
		</div>


	</div>
	<!--End User Settings Box-->
</div> <!--/.row-->


  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script src="js/foundation-datepicker.js"></script>
  <script>
    $(document).foundation();
  </script>
  <script>
			$(function () {
				window.prettyPrint && prettyPrint();
				$('#dp1').fdatepicker({
					format: 'mm-dd-yyyy'
				});
				$('#dp2').fdatepicker({
					closeButton: true
				});
				$('#dp3').fdatepicker();
				$('#dp3').fdatepicker();
				$('#dp-margin').fdatepicker();
				$('#dpMonths').fdatepicker();
				var startDate = new Date(2014, 1, 20);
				var endDate = new Date(2014, 1, 25);
				$('#dp4').fdatepicker()
					.on('changeDate', function (ev) {
					if (ev.date.valueOf() > endDate.valueOf()) {
						$('#alert').show().find('strong').text('The start date can not be greater then the end date');
					} else {
						$('#alert').hide();
						startDate = new Date(ev.date);
						$('#startDate').text($('#dp4').data('date'));
					}
					$('#dp4').fdatepicker('hide');
				});
				$('#dp5').fdatepicker()
					.on('changeDate', function (ev) {
					if (ev.date.valueOf() < startDate.valueOf()) {
						$('#alert').show().find('strong').text('The end date can not be less then the start date');
					} else {
						$('#alert').hide();
						endDate = new Date(ev.date);
						$('#endDate').text($('#dp5').data('date'));
					}
					$('#dp5').fdatepicker('hide');
				});
				// implementation of disabled form fields
				var nowTemp = new Date();
				var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
				var checkin = $('#dpd1').fdatepicker({
					onRender: function (date) {
						return date.valueOf() < now.valueOf() ? 'disabled' : '';
					}
				}).on('changeDate', function (ev) {
					if (ev.date.valueOf() > checkout.date.valueOf()) {
						var newDate = new Date(ev.date)
						newDate.setDate(newDate.getDate() + 1);
						checkout.update(newDate);
					}
					checkin.hide();
					$('#dpd2')[0].focus();
				}).data('datepicker');
				var checkout = $('#dpd2').fdatepicker({
					onRender: function (date) {
						return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
					}
				}).on('changeDate', function (ev) {
					checkout.hide();
				}).data('datepicker');
			});
		</script>
</body>
</html>