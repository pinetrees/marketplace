<div id="admin-contact" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Contact</h3>
        <form name="contact" method="post" action="/admin/send/message">
			<select name="recipient_id">
			@foreach( $users as $user )
				<option value="{{$user->id}}">{{ $user->name() }}</option>
			@endforeach
			</select>
	        <input type="text" name="subject" placeholder="Subject">
	        <textarea type="text" name="message" placeholder="Message" rows="4"></textarea>
	        <input type="submit" class="btn-passport btn-blue admin-contact">
	        <a class="close-reveal-modal">&#215;</a>
		</form>
    </div>
  </div> <!--/.row-->
</div>
