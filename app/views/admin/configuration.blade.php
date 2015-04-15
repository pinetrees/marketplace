<div class="small-12 columns user-profile content" id="configuration">
	<h3>Configuration</h3>
	<div class="row">
		<!-- User admin side nav -->
		<div class="small-12 medium-3 columns">
	        <ul class="side-nav tab" data-tab>
			  <li class="tab-title active"><a href="#admin-personal">Administration</a></li>
		  	  <li class="tab-title"><a href="#settings-personal">Personal</a></li>
			  <!--<li class="tab-title"><a href="#admin-corporate">Content</a></li>-->
			  <!--<li class="tab-title"><a href="#admin-details">Forms</a></li>-->
			</ul>  
		</div>  

		<div class="small-12 medium-9 columns">
		<div class="settings-box">
		<div class="tabs-content">
			<!--User admin content area-->
		        	<!-- User admin form -->
		        	<form class="content active" id="admin-personal" method="post" action="/admin/configuration/settings/update">
						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="admin-site-name" class="left inline">Site Name</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="text" id="admin-site-name" class="admin-site-name" name="site-name" @if($setting = Setting::has('site-name')) value="{{$setting}}" @endif>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="admin-name" class="left inline">Administrator Name</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="text" id="admin-name" class="admin-name" name="admin-name" @if($setting = Setting::has('admin-name')) value="{{$setting}}" @endif>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="admin-email" class="left inline">Administrative Email</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="email" id="admin-email" class="admin-email" name="administrative-email-address" @if($setting = Setting::has('administrative-email-address')) value="{{$setting}}" @endif>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						<div class="row hide">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="admin-email-password" class="left inline">Email Password</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="password" id="admin-email-password" class="admin-email" name="administrative-email-password">
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="admin-registration" class="left inline">Registration</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						        	<input type="radio" name="registration-status" value="1" id="admin-registrationOpen" @if(Setting::has('registration-status') == 1) checked="checked" @endif><label for="admin-registrationOpen">Open</label>
								<input type="radio" name="registration-status" value="0" id="admin-registrationClosed" @if(Setting::has('registration-status') == 0) checked="checked" @endif><label for="admin-registrationClosed">Closed</label>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
						        	<input type="submit" class="btn-passport btn-blue submit carrier" value="Save">
								<span class="response-message"></span>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->
					</form>

				
					@include('forms/user-settings')
			  


		</div> <!--/.tabs-content-->
		</div> <!--/.settings-box-->
		</div> <!--/.columns-->

	</div> <!--/.row-->
</div> <!--/#settings-->
