<div class="small-12 medium-2 columns sidebar">
	<ul class="side-nav filters">
	  <li class="search-result-checkbox category">
	    <a class="hide-important" data-value="0">All Categories</a>
	  @include('tables.categories')
	  @foreach( $categories as $category )
	  @if($category->ofRoot())
	    <a class="category data hide-important" data-id="{{$category->id}}">{{$category->name}}</a>
	  @endif
	  @endforeach
	  </li>
	  @include('tables.regions')
	  <li class="region hide">
	    <a data-value="0">All Regions</a>
	  @foreach( $regions as $option )
	    <a data-value="{{$option->id}}">{{$option->name}}</a>
	  @endforeach
	  </li>
	</ul>
</div>
<style>
.parent-directory {
	display: inline-block !important;
}
</style>
