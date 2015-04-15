<div id="assign-to-provider" class="reveal-modal message" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Assign to Provider</h3>
      <form method="post" action="/assign">
	<div class="row">
	  <div class="small-12 medium-2 columns inline">
            <label for="message-service-id" class="right inline">Provider</label>
	  </div>
	  <div class="small-12 medium-10 columns">
	        <select type="text" id="provider_id" name="provider_id">
		@foreach($providers as $provider)
		  <option value="{{ $provider->id }}">{{ $provider->company }}</option>
		@endforeach
		</select>
	  </div>
	</div>
        <input type="text" class="hide-important" name="project_id" value="{{$project->id}}">
	<a class="btn-passport btn-blue submit assignment">Submit</a>
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>

