<div id="messageModal" class="reveal-modal message" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Send a message</h3>
      <form method="post" action="/send/message" data-abide="ajax">
	<div class="row">
	  <div class="small-12 medium-2 columns inline">
            <label for="message-project-id" class="right inline">Project</label>
	  </div>
	  <div class="small-12 medium-10 columns">
	        <select type="text" id="message-project-id" name="project_id">
		@foreach(Auth::user()->projects as $project)
		  <option value="{{ $project->id }}">{{ $project->name }}</option>
		@endforeach
		</select>
	  </div>
	</div>
	<div class="row">
	  <div class="small-12 medium-2 columns inline">
            <label for="message-service-id" class="right inline">Service</label>
	  </div>
	  <div class="small-12 medium-10 columns">
	        <select type="text" id="message-service-id" name="service_id">
		@foreach($provider->services as $service)
		  <option value="{{ $service->id }}">{{ $service->name }}</option>
		@endforeach
		</select>
	  </div>
	</div>
        <div class="row">
          <div class="large-12 columns">
            <input type="text" name="subject" placeholder="Subject" required>
            <small class="error">You must enter a subject.</small>
	  </div>
	</div>
        <div class="row">
          <div class="large-12 columns">
            <textarea type="text" name="message" placeholder="Message" required rows="4"></textarea>
            <small class="error">You haven't entered anything here!</small>
	  </div>
	</div>
	<a class="btn-passport btn-blue submit message">Submit</a>
	<p> All messages will be sent to the administrator for moderation.</p>
        <input type="text" class="hide-important" name="recipient_id" value="{{$provider->id}}">
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>

