<div class="row">
  <div class="small-12 columns">
      <select name="update-content">
	<option value="0">Add content</option>
	@foreach( $content as $_content )
        <option value="{{$_content->id}}">{{$_content->title}}</option>
	@endforeach;
      </select>
  </div>
</div> <!--/.row-->
<div class="row">
	<div class="tabs-content">
		<!--Upload service content area-->
		<div class="small-12 medium-12 columns">
			@include('content/panel/details', array('action' => 'update'))
		</div> <!--/.columns-->  
	</div> <!--/.tabs-content-->
</div> <!--/.row-->
<script>
var content = {{json_encode($content)}};
</script>
