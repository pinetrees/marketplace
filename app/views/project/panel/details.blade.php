<div class="settings-box content details" id="panel-details">
	<!-- Upload projects form -->
	<form name="project" method="post" action="/project/{{$action}}" data-abide="ajax">
		{{ eForm::input('Name', 'project-name', 'name', true) }}
		{{ eForm::text('Summary', 'project-summary', 'summary', true) }}
		{{ eForm::text('About', 'project-about', 'about', true) }}
		{{ eForm::text('Purpose', 'project-purpose', 'purpose') }}
		{{ eForm::text('Requirements', 'project-requirements', 'requirements') }}
		{{ eForm::text('Terms', 'project-terms', 'terms') }}
		{{ eForm::text('Timeline', 'project-timeline', 'timeline') }}
		{{ eForm::text('Budget', 'project-budget', 'budget') }}
		{{ eForm::text('Resources', 'project-resources', 'resources') }}
		{{ eForm::text('Qualifications', 'project-qualifications', 'qualifications') }}
		{{ eForm::text('Evaluation', 'project-evaluation', 'evaluation') }}

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="projects-project-description" class="left inline padless">Expected Dates</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		          <table class="table full-width">
				<thead>
					<tr>
						<th>Start date&nbsp;
							<a href="#" class="button button-small button-blue" id="start-date-controller" data-date-format="yyyy-mm-dd" data-date="{{ date('Y-m-d') }}">Change</a>
						</th>
						<th>End date&nbsp;
							<a href="#" class="button button-small button-blue" id="end-date-controller" data-date-format="yyyy-mm-dd" data-date="{{ date('Y-m-d') }}">Change</a>

						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="hide">
						<td><input type="text" class="start-date-view" name="start_date" value="2014-07-12"></td>
						<td><input type="text" class="end-date-view" name="end_date" value="2014-07-12"></td>
					</tr>
					<tr>
						<td><span class="start-date-view"></span></td>
						<td><span class="end-date-view"></span></td>
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
		          <label for="projects-project-region" class="left inline padless">Region</label>
		        </div>
			<div class="small-12 medium-9 large-7 columns left">
			  <select id="projects-project-region" name="region_id">
			    @foreach( $regions as $region )
			    <option value="{{$region->id}}">{{$region->name}}</option>
			    @endforeach
			  </select>
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
		{{ eForm::component('Category', '', 'category-validator', true, 'checkbox-validator') }}
			  @include('tables.categories')
			  <span class="categories-data-handler hide">
		          <p style="font-size: 90%;">Which categories apply to your project?</p>
		          </p>
			  @foreach( $categories as $category )
				<input class="tab-{{$category->parent_id}} up-10" id="checkbox-{{$category->name}}" type="checkbox" name="categories[]" value="{{$category->id}}"><label for="checkbox-{{$category->name}}">{{$category->name}}</label><br />
			  @endforeach
			  </span>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
		        	<input type="text" class="hide-important" name="id">
		        	<input type="submit" class="btn-passport btn-blue project create" value="{{ucfirst($action)}} Project">
		        	<a name="view" href="/project/" class="btn-passport btn-blue carrier">View Project</a>
		        	<input type="submit" class="btn-passport btn-blue project delete" value="Delete Project">
	      			<span class="category response-message"></span>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->
	</form>

</div> <!--/.settings-box-->
<script src="/js/project.js"></script>
