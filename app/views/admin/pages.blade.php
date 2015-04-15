<div class="small-12 columns user-profile content" id="pages">
	<h3>Pages</h3>
	<div class="row">
		<!-- User admin side nav -->
		<div class="small-12 medium-3 columns">
	        <ul class="side-nav tab" data-tab>
			@foreach( $pages as $page )
			  <li class="tab-title"><a href="#{{ $page->name }}-page-tab">{{ $page->title }}</a></li>
			@endforeach
			</ul>  
		</div>  

		<div class="tabs-content">
			@foreach( $pages as $page )
			<!--User admin content area-->
			<div class="content" id="{{ $page->name }}-page-tab">
			<div class="small-12 medium-9 columns">
		        <div class="settings-box">
		        	<!-- Page admin form -->
		        	<form class="content active" id="{{ $page->name }}-page-form">
						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="{{ $page->name }}-page-title" class="left inline">Title</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="text" id="{{ $page->name }}-page-title" name="title" value="{{ $page->title }}">
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-3 columns">
						          <label for="{{ $page->name }}-page-summary" class="left inline">Excerpt</label>
						        </div>
						        <div class="small-12 medium-9 large-7 columns left">
						          <input type="text" id="{{ $page->name }}-page-excerpt" name="excerpt" value="{{ $page->summary }}">
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->
						<ul class="sortable page-content">
						@foreach( $page->content()->get() as $content )
							<div class="panel"><input name="content[]" type="hidden" value="{{$content->id}}">{{ $content->title }}</div>
						@endforeach
						</ul>
						<input type="hidden" name="id" value="{{ $page->id }}">

						<div class="row">
						    <div class="small-12 columns">
						      <div class="row">
						        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
						        	<a class="btn-passport btn-blue update">Update</a>
									<span class="response-message"></span>
						        </div>
						      </div> <!--/.row-->
						    </div>
						</div> <!--/.row-->
					</form>

				</div> <!--/.settings-box-->


			</div> <!--/.columns-->  
			</div> <!--/.content-->
		@endforeach
		</div> <!--/.tabs-content-->

	</div> <!--/.row-->
</div> <!--/#settings-->
