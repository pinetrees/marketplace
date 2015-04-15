<div class="row admin-service first">  
  <h3>{{ $service->name }}</h3>  
  <div class="small-12 medium-12 large-2 columns">
    <img class="img-circle" src="/img/don-draper.jpg" width="150">
    <blockquote>
      <p>{{ $service->name }}</p> <small><cite title="Source Title">{{ $service->summary }} <i class="glyphicon glyphicon-map-marker"></i></cite></small>
    </blockquote>
  </div>
  <div class="small-12 medium-12 large-7 columns">
    <p></p>
  </div>
  
  <div class="small-12 medium-12 large-3 columns">
    <ul class="panel no-bullet">
      @foreach( $service->categories as $category )
      <li>{{ $category->name }}</li>
      @endforeach
    </ul>
  </div>
</div> <!--/.row-->
