<h3>Create Service <small>General Information</small></h3>
<div class="row">
	<!-- Upload service side nav 
	<div class="small-12 medium-3 columns">
        <ul class="side-nav tab" data-tab>
		  <li class="tab-title active"><a href="#panel-details">Details</a></li>
		  <li class="tab-title"><a href="#panel-mission">Mission</a></li>
		  <li class="tab-title"><a href="#panel-photos">Photos</a></li>
		  <li class="tab-title"><a href="#panel-involvement">Involvement</a></li>
		</ul>  
	</div> -->

	<div class="tabs-content">
		<!--Upload service content area-->
		<div class="small-12 medium-12 columns">
			@include('service/panel/details', array('action' => 'create'))
		</div> <!--/.columns-->  
	</div> <!--/.tabs-content-->
</div> <!--/.row-->
