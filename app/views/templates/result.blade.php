<article class="search-result result row" data-id="{{ $result->id }}">
	<div class="small-12 medium-3 columns">
		<a href="#" title="Lorem ipsum" class="thumbnail img-responsive img-thumbnail"><img src="/img/profile-5.png" alt="Lorem ipsum"></a>
	</div>

	<div class="small-12 medium-2 columns">
		<ul class="no-bullet">
			<li><i class="fa fa-calendar"></i> <span>{{ $result->date() }}</span></li>
			<li><i class="fa fa-clock-o"></i> <span>{{ $result->time() }}</span></li>
			<li><a href="/project/{{ $result->id }}"><i class="fa fa-eye"></i> <span>View</span></a></li>
			<li><a><i class="fa fa-bookmark"></i> <span>Bookmark</span></a></li>
		</ul>
	</div>

	<div class="small-12 medium-7 columns excerpt">
		<h4><a href="/project/{{ $result->id }}" title="">{{ $result->name }}</a></h4>
		<p>{{ $result->excerpt() }}</p>						
	</div>
</article> <!--/.row-->
