<article class="row message panel @if(!$message->read) unread @endif" data-id="{{ $message->id }}">

	<div class="small-12 medium-2 columns">
		<p>{{ $message->sender->username }}</p>
	</div>

	@if($user->isAdmin())
	<div class="small-12 medium-2 columns">
		<p>to {{ $message->recipient->username }}</p>
	</div>

	<div class="small-12 medium-8 columns">
		<h4><a class="message-link" href="/dashboard/message/{{ $message->id }}" title="">{{ $message->subject }}</a></h4>
	</div>
	@else
	<div class="small-12 medium-10 columns">
		<h4><a class="message-link" href="/dashboard/message/{{ $message->id }}" title="">{{ $message->subject }}</a></h4>
	</div>
	@endif
</article> <!--/.row-->
