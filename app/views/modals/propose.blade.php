<div id="proposeModal" class="reveal-modal message" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Submit a proposal</h3>

      <form method="post" action="/send/proposal" data-abide enctype="multipart/form-data">
	<div class="row">
	  <div class="small-12 medium-10 columns">
                <input type="text" class="hide-important" name="project_id" value="{{$project->id}}">
	  </div>
	</div>
	<div class="row">
	  <div class="small-12 medium-2 columns inline">
            <label for="message-service-id" class="right inline">Service</label>
	  </div>
	  <div class="small-12 medium-10 columns">
	        <select type="text" id="message-service-id" name="service_id">
		@foreach(Auth::user()->services as $service)
		  <option value="{{ $service->id }}">{{ $service->name }}</option>
		@endforeach
		</select>
	  </div>
	</div>
        <div class="row">
          <div class="large-12 columns">
	    <a class="btn-passport btn-blue file-upload" data-target="proposal">Upload proposal</a>
	    <input type="file" name="proposal">
            <small class="error">You MUST enter a subject.</small>
	  </div>
	</div>
        <div class="row">
          <div class="large-12 columns">
            <textarea type="text" name="message" placeholder="Optional message" rows="4"></textarea>
	  </div>
	</div>
	<a class="btn-passport btn-blue submit message">Submit</a>
	<p> All messages will be sent to the administrator for moderation.</p>
        <input type="text" class="hide-important" name="recipient_id" value="{{$buyer->id}}">
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>

