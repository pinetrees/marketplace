<div class="settings-box content details" id="content-panel-details">
	<!-- Upload content form -->
	<form method="post" name="content" action="/content/{{$action}}">
		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="services-company-title" class="left inline padless">Title</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <input type="text" id="services-company-title" name="title">
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="services-service-content" class="left inline padless">Content</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <textarea id="services-service-content" name="content"></textarea>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="services-service-page" class="left inline padless">Page</label>
		        </div>
			<div class="small-12 medium-9 large-7 columns left">
			  <select id="services-service-page" name="page_id">
			    @foreach( $pages as $page )
			    <option value="{{$page->id}}">{{$page->title}}</option>
			    @endforeach
			  </select>
			</div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
		        	<input type="text" class="hide-important" name="id">
		        	<input type="submit" class="btn-passport btn-blue content carrier" value="{{ucfirst($action)}}">
		        	<input type="submit" class="btn-passport btn-blue content delete" value="Delete Content">
	      			<span class="response-message"></span>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->
	</form>

</div> <!--/.settings-box-->
