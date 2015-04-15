<article class="search-result service result row active-category active-region active-query" data-id="{{ $result->id }}" style="display: none">
	<div class="small-12 medium-3 columns">
		<a href="#" title="Lorem ipsum" class="thumbnail img-responsive img-thumbnail"><img src="/img/profile-5.png" alt="Lorem ipsum"></a>
	</div>

	<div class="small-12 medium-2 columns">
		<ul class="no-bullet">
			<li><i class="fa fa-calendar"></i> <span>{{ $result->date() }}</span></li>
			<li><i class="fa fa-clock-o"></i> <span>{{ $result->time() }}</span></li>
			<li><span>{{ $result->region->name }}</span></li>
			<li><a href="/service/{{ $result->id }}"><i class="fa fa-eye"></i> <span>View</span></a></li>
			@if( Auth::check() )
			@if( !$result->isBookmarked() )
			<li><a class="bookmark-service"><i class="fa fa-bookmark"></i> <span>Bookmark</span></a></li>
			@else
			<li><a class="unbookmark-service"><i class="fa fa-bookmark"></i> <span>Unbookmark</span></a></li>
			@endif
			@endif
		</ul>
	</div>

	<div class="small-12 medium-7 columns excerpt">
		<h4><a href="/service/{{ $result->id }}" title="">{{ $result->name }}</a></h4>
		<p>{{ $result->excerpt() }}</p>						
	</div>
	<div class="small-12 medium-7 columns">
          <ul class="inline-list">
	    @foreach( $result->categories as $category )
            <li class="tags category-option" data-id={{$category->id}}>{{$category->name}}</li>
	    @endforeach
          </ul>
	</div>
</article> <!--/.row-->
