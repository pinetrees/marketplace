<div class="settings-box content details" id="panel-details">
	<!-- Upload services form -->
	<form name="service" method="post" action="/service/{{$action}}" data-abide="ajax">
		{{ eForm::input('Name', 'service-name', 'name', true) }}

		{{ eForm::text('Summary', 'service-summary', 'summary', true) }}

		{{ eForm::text('About', 'service-about', 'about', true) }}

		<div class="row">
		    <div class="small-12 columns">
		      <div class="row">
		        <div class="small-12 medium-3 columns">
		          <label for="services-service-region" class="left inline padless">Region</label>
		        </div>
			<div class="small-12 medium-9 large-7 columns left">
			  <select id="services-service-region" name="region_id">
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
		          <label for="services-service-category" class="left inline padless">Categories</label>
		        </div>
		        <div class="small-12 medium-9 large-7 columns left">
		{{ eForm::component('Category', '', 'category-validator', true, 'checkbox-validator') }}
			  @include('tables.categories')
			  <span class="categories-data-handler hide">
		          <p style="font-size: 90%;">Which categories apply to your service?</p>
		          </p>
			  @foreach( $categories as $category )
		          <input id="checkbox-{{$category->name}}" type="checkbox" name="categories[]" value="{{$category->id}}"><label for="checkbox-{{$category->name}}">{{$category->name}}</label><br />
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
		        	<input type="submit" class="btn-passport btn-blue service create" value="{{ucfirst($action)}} Project">
		        	<a name="view" href="/service/" class="btn-passport btn-blue carrier">View Service</a>
		        	<input type="submit" class="btn-passport btn-blue service delete" value="Delete Service">
	      			<span class="category response-message"></span>
		        </div>
		      </div> <!--/.row-->
		    </div>
		</div> <!--/.row-->
	</form>

</div> <!--/.settings-box-->
