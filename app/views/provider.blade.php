<div class="row admin-project first">  
  <h3>{{ $provider->first_name }} {{ $provider->last_name }}</h3>  
  <div class="small-12 medium-12 large-2 columns">
    <img class="img-circle" src="img/don-draper.jpg" width="150">
    <blockquote>
      <p>Lorem Ipsum</p> <small><cite title="Source Title">Lorem Ipsum <i class="glyphicon glyphicon-map-marker"></i></cite></small>
    </blockquote>
  </div>
  <div class="small-12 medium-12 large-7 columns">
    <p></p>
  </div>
  
  <div class="small-12 medium-12 large-3 columns">
    <p class="panel">
      {{ $provider->email }}
      <br />
      {{ $provider->website }}
      <br />
      {{ $provider->phone }}
    </p>
  </div>
</div> <!--/.row-->
