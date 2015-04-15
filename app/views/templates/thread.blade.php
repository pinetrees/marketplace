<article class="row thread panel @if(!$thread->isRead()) unread @endif" data-id="{{ $thread->id }}">

	<div class="small-12 medium-2 columns">
		<p>{{ $thread->lastSender()->username }}</p>
	</div>

	<div class="small-12 medium-10 columns">
		<h4><a class="thread-link" href="/dashboard/message/{{ $thread->id }}" title="">{{ $thread->name }}</a></h4>
	</div>

</article> <!--/.row-->
