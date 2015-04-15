<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Inbox | ESM</title>
  @include('head')
</head>
<script>
</script>
@include('header')

<body>

<!--Feature component used below the header of pages
	Uses: h1, p
	Structure: Title, title descriptor
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>Inbox</h1>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<br>

<!-- Begin Search query form -->
<form method="get" action="/market/query">
<div class="row">
    <div class="small-12 medium-12 columns">
        <input type="text" name="query" placeholder="Query">
    </div>
</div> <!--/.row-->

</form>
<!--End search query form -->

<div class="section" id="search">
	<!--Begin Search Results Section -->
	<section class="search-results">

	<div class="row">
		<div class="small-12 columns search-results-number">
		</div>
	</div> <!--/.row-->

	<div class="row threads">
		<div class="small-12 medium-12 columns">
		@if( count($threads) > 0 )
			@foreach( $threads as $thread )
			@include( 'templates/thread' )
			@endforeach
		@else
			<div class="panel">You have no messages.</div>
		@endif
		</div>
	</div> <!--/.row-->
	<div class="row">
		<div class="small-12 medium-12 columns active-thread hide">
			@if($user->isAdmin())
			<div class="row">
				<div class="small-12 medium-4 columns panel">
					<span class="sender">Sender</span>
				</div>
				<div class="small-12 medium-4 columns panel">
					<span class="recipient">Recipient</span>
				</div>
				<button class="small-12 medium-4 columns panel btn-blue approve-thread">
					<span>Approve</span>
				</button>
				<button class="small-12 medium-4 columns panel btn-blue unapprove-thread">
					<span>Unapprove</span>
				</button>
			</div>
			@endif
			<div class="row">
				<div class="small-12 medium-1 columns panel">
					<a id="thread-to-threads"><<</a>
				</div>
				<div class="small-12 medium-5 columns panel">
					Relevant project: <span class="project">None</span>
				</div>
				<div class="small-12 medium-5 columns panel">
					Relevant service: <span class="service">None</span>
				</div>
				<button class="small-12 medium-1 columns panel btn-blue archive-message">
					<span>Archive</span>
				</button>
			</div>
			<div class="row hide">
				<div class="small-12 medium-12 columns panel">
					<div class="subject">Subject</div>
				</div>
			</div>
			<div class="row hide">
				<div class="small-12 medium-12 columns panel">
					<div class="proposal"><a href="/proposals/">Proposal</a></div>
				</div>
			</div>
			<div class="messages">
				<div class="row">
					<div class="small-12 medium-2 columns panel">
						<div class="sender">Sender</div>
					</div>	
					<div class="small-12 medium-10 columns panel">
						<div class="body">Body</div>
					</div>
				</div>
			</div>
			<div class="row reply">
				<button class="small-12 medium-12 columns btn-blue open-reply">
	  				<span>Reply</span>
		   		</button>
				<div class="small-12 medium-12 columns panel post-reply hide">
					<div class="row">
					    <div class="small-12 columns">
					      <div class="row">
					        <div class="small-12 medium-12 columns left padless">
					          <textarea rows="10" name="response"></textarea>
					        </div>
					      </div> <!--/.row-->
					    </div>
					    <button class="small-12 medium-12 columns btn-blue submit">
	   					<span>Send</span>
		   			    </button>
					</div> <!--/.row-->
				</div>
			</div>
		</div>
	</div>
	</section>
	<!--End Search Results Section-->
</div> <!--/#search-->


@include('footer')

@include('modals')

@include('foot')

</body>
</html>
<script>
var threads = {{ $threads }};
$.each(threads, function(index, thread){
        indexedThreads[thread.id] = thread;
});     
</script>
<script src="/js/market.js"></script>
