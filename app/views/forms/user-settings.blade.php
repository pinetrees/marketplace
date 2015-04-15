<form class="content @if(!$user->isAdmin()) active @endif settings user" id="settings-personal" method="post" action="/user/update" enctype="multipart/form-data">
	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-first" class="left inline">First Name</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="text" id="settings-first" name="first_name" class="settings-first" value='{{ Auth::user()->first_name }}'>
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
	          <input type="text" id="settings-last" class="settings-last" name="last_name" value='{{ Auth::user()->last_name }}'>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-company" class="left inline">Company</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="text" id="settings-company" class="settings-company" name="company" value='{{ Auth::user()->company }}'>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-email" class="left inline">Email</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="email" id="settings-email" class="settings-email" name="email" value='{{ Auth::user()->email }}'>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-phone" class="left inline">Phone</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="text" id="settings-phone" class="settings-phone" name="phone" value='{{ Auth::user()->phone }}'>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-website" class="left inline">Website</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="email" id="settings-website" class="settings-website" name="website" value='{{ Auth::user()->website }}'>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-password" class="left inline">Password</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
	          <input type="password" id="settings-password" name="password" class="settings-password">
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-tooltips" class="left inline">Tooltips</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
     		  <div class="switch">
		  <input id="x" name="tooltips" type="radio" value="1" @if( $user->tooltips ) checked @endif>
		  <label class="left" for="x" onclick="">On</label>

		  <input id="x1" name="tooltips" type="radio" value="0" @if( !$user->tooltips ) checked @endif>
		  <label class="right" for="x1">Off</label>

		  <span></span>
		</div>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-3 columns">
	          <label for="settings-notifications" class="left inline">Email notifications</label>
	        </div>
	        <div class="small-12 medium-9 large-7 columns left">
     		  <div class="switch">
		  <input id="x" name="notifications" type="radio" value="1" @if( $user->notifications ) checked @endif>
		  <label class="left" for="x" onclick="">On</label>

		  <input id="x1" name="notifications" type="radio" value="0" @if( !$user->notifications ) checked @endif>
		  <label class="right" for="x1">Off</label>

		  <span></span>
		</div>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
	        	<a class="btn-passport btn-blue upload-avatar">Avatar</a>
	    		<input type="file" name="avatar" style="display: none">
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
	        	<a class="btn-passport btn-blue update">Save</a>

	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

	<div class="row">
	    <div class="small-12 columns">
	      <div class="row">
	        <div class="small-12 medium-9 medium-offset-3 large-7 columns left">
			<span class="response-message">.</span>
	        </div>
	      </div> <!--/.row-->
	    </div>
	</div> <!--/.row-->

</form>
