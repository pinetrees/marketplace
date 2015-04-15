<div class="settings-box content" id="panel-{{$panel}}">
	<!-- Upload projects form -->
	<form>
		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="projects-company-name" class="left inline padless">Name</label>
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
		          <label for="projects-company-email" class="left inline padless">Contact Email</label>
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
		          <label for="projects-project-description" class="left inline padless">Description</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <textarea id="projects-project-description" class="projects-project-description"></textarea>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="projects-project-description" class="left inline padless">Expected Dates</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <table class="table">
				<thead>
					<tr>
						<th>Start date&nbsp;
							<a href="#" class="button button-small button-blue start-date-controller" data-date-format="yyyy-mm-dd" data-date="2014-07-12">Change</a>
						</th>
						<th>End date&nbsp;
							<a href="#" class="button button-small button-blue end-date-controller" data-date-format="yyyy-mm-dd" data-date="2014-07-17">Change</a>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="start-date-view">2014-07-12</td>
						<td class="end-date-view">2014-07-17</td>
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
		          <label for="projects-project-category" class="left inline padless">Categories</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <p style="font-size: 90%;">Which categories apply to your project?</p>
		          </p>
			  @foreach( $categories as $category )
		          <input id="checkbox-{{$category->name}}" type="checkbox" value="{{$category->id}}"><label for="checkbox-{{$category->name}}">{{$category->name}}</label><br />
			  @endforeach
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
