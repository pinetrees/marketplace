<div class="row">
  <div class="small-12 columns">
      <select name="update-project">
	<option value="0">Add a project</option>
	@foreach( $projects as $project )
        <option value="{{$project->id}}">{{$project->name}}</option>
	@endforeach;
      </select>
  </div>
</div> <!--/.row-->
<div class="row">
	<div class="tabs-content">
		<!--Upload project content area-->
		<div class="small-12 medium-12 columns">
			@include('project/panel/details', array('action' => 'update'))
		</div> <!--/.columns-->  
	</div> <!--/.tabs-content-->
</div> <!--/.row-->
<script>
var projects = {{json_encode($projects)}};
@if($projectID)
var projectID = {{$projectID}};
$('select[name="update-project"]').val(projectID);
@endif
</script>
