<div class="row">
  <div class="small-12 columns">
      <select name="update-service">
	<option value="0">Add a service</option>
	@foreach( $services as $service )
        <option value="{{$service->id}}">{{$service->name}}</option>
	@endforeach;
      </select>
  </div>
</div> <!--/.row-->
<div class="row">
	<div class="tabs-content">
		<!--Upload service content area-->
		<div class="small-12 medium-12 columns">
			@include('service/panel/details', array('action' => 'update'))
		</div> <!--/.columns-->  
	</div> <!--/.tabs-content-->
</div> <!--/.row-->
<script>
var services = {{json_encode($services)}};
</script>
