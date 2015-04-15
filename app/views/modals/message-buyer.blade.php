<div id="messageModal" class="reveal-modal message" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Send a message</h3>
      <form method="post" action="/send/message" data-abide="ajax">
        <div class="row">
          <div class="large-12 columns">
            <input type="text" name="subject" placeholder="Subject" required>
            <small class="error">You MUST enter a subject.</small>
	  </div>
	</div>
        <div class="row">
          <div class="large-12 columns">
            <textarea type="text" name="message" placeholder="Message" required rows="4"></textarea>
            <small class="error">You MUST enter a message.</small>
	  </div>
	</div>
	<a class="btn-passport btn-blue submit message">Submit</a>
        <input type="text" class="hide-important" name="recipient_id" value="{{$buyer->id}}">
      </form>
      <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>

