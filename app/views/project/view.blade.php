<div class="row admin-project first">  
  <h3>{{ $project->name }}</h3>  
  <div class="small-12 medium-12 large-2 columns">
    <img class="img-circle" src="/img/don-draper.jpg" width="150">
    <blockquote>
      <p>{{ $project->name }}</p> <small><cite title="Source Title">{{ $project->summary }} <i class="glyphicon glyphicon-map-marker"></i></cite></small>
    </blockquote>
  </div>
  <div class="small-12 medium-12 large-7 columns">
    <p>{{ $project->about }}</p>
  </div>
  
  <div class="small-12 medium-12 large-3 columns">
    <ul class="panel no-bullet">
      @foreach( $project->categories as $category )
      <li>{{ $category->name }}</li>
      @endforeach
    </ul>
  </div>

  <div class="small-12 medium-12 large-3 columns">
    <ul class="panel no-bullet">
      <li>Start <span class="pull-right">{{ date('M j, Y', strtotime($project->start_date)) }}</span></li>
      <li>End <span class="pull-right">{{ date('M j, Y', strtotime($project->end_date)) }}</span></li>
    </ul>
  </div>
</div> <!--/.row-->
