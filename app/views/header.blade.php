@if(Auth::user())
	@include('header.logged-in')
@else
	@include('header.not-logged-in')
@endif
<div class="loading">
	<i class="fa fa-4x fa-spinner fa-spin"></i>
</div>
