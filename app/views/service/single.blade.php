<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Service | ESM</title>
  @include('head')
</head>

@include('header')

<body>

<!--Feature component used below the header of pages
	Uses: h1, breadrumbs
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>{{$service->name}}<h1>
	</div>
  <div class="small-10 small-offset-1 medium-6 medium-offset-3">
    <ul class="breadcrumbs">
      <li><a class="history-back"><<</a></li>
      @foreach( $service->structure() as $category )
      <li><a href="#">{{ $category->name }}</a></li>
      @endforeach
    </ul>
  </div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section view-service">
  <div class="small-12 large-8 columns">
    <div class="panel">
      <div class="row service-details">
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-pencil-square-o"></i> Posted: {{$service->posted()}}</li>
            <li><i class="fa fa-globe"></i> Location: {{$service->region->name}}</li>
          </ul>
        </div>
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-calendar"></i> Start: {{$service->starts()}}</li>
            <li><i class="fa fa-calendar"></i> End: {{$service->ends()}}</li>
            <!--<li><i class="fa fa-money"></i> Rate: $20-$30 / hr</li>-->
          </ul>
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="service-buyer-info small-12 columns">
          <div class="panel">
            <ul class="inline-list">
              <li><img src="/img/user-profile.png" alt="avatar" width="50"></li>
              <li>
                <span><a href="/provider/{{$service->provider->id}}">{{ $service->provider->company }}</a></span>
              </li>
            </ul>
          </div> <!--/.panel-->
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="service-description small-12 columns">
          <p>{{$service->summary}}</p>

          <p>{{$service->about}}</p>

          <h4>Categories</h4>
          <ul class="inline-list">
	    @foreach( $service->categories as $category )
            <li class="tags"><a href="/services/category/{{$category->id}}">{{$category->name}}</a></li>
	    @endforeach
          </ul>
        </div>
      </div> <!--/.row--> 
    </div>
    <div class="service-description-footer">
      <span>Service ID:{{$service->id}}</span>
    </div>
  </div>

  <div class="small-12 large-4 columns">
    <div class="panel">
      @if($user)
      @if($user->isProvider())
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-is-provider">Contact Provider</button>
      @include('modals.response', array('id' => 'user-is-provider', 'header' => 'Hey!', 'message' => 'You are a provider!', 'actionurl' => '/market/type/projects', 'actiontext' => 'Browse projects'))
      @elseif($user->hasProjects())
      <button class="contact button btn-blue btn-passport" data-reveal-id="messageModal">Contact Provider</button>
      <span class="contact response-message"></span>
      @include('modals.message', array('provider' => $service->provider))
      @else
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-has-no-projects">Contact Provider</button>
      @include('modals.response', array('id' => 'user-has-no-projects', 'header' => 'Hey!', 'message' => 'You need to have at least one project before you can contact this provider.', 'actionurl' => '/dashboard', 'actiontext' => 'Create a project'))
      @endif
      @else
      <a class="button btn-blue btn-passport" href="{{ Request::url() . '/message' }}">Contact Provider</a>
      @endif
    </div>
  </div>
</section>




@include('foot');

</body>
</html>
<style>
.feature {
	background: #4f3735;
}
</style>
<script>
$('select[name="service_id"]').val('{{$service->id}}').trigger('change');
</script>
