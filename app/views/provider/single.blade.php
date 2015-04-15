<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Provider | ESM</title>
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
		<h1>{{$provider->company}}<h1>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section view-service">
  <div class="small-12 large-8 columns">
    <div class="panel">
      <div class="row">
        <div class="service-buyer-info small-12 columns">
          <div class="panel">
            <ul class="inline-list">
              <li><img src="/img/user-profile.png" alt="avatar" width="50"></li>
              <li>
                <span>United States</span>
              </li>
            </ul>
          </div> <!--/.panel-->
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="service-description small-12 columns">
	@foreach( $provider->services as $result )
	@include('templates/service')
	@endforeach
        </div>
      </div> <!--/.row--> 
    </div>
  </div>

  <div class="small-12 large-4 columns">
    <div class="panel">
      @if($user)
      @if($user->isProvider())
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-is-provider">Contact Provider</button>
      @elseif($user->hasProjects())
	  @include('modals.message')
      <button class="contact button btn-blue btn-passport" data-reveal-id="messageModal">Contact Provider</button>
      <span class="contact response-message"></span>
      @else
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-has-no-projects">Contact Provider</button>
      @endif
      @else
      <a class="button btn-blue btn-passport" href="{{ Request::url() . '/message' }}">Contact Provider</a>
      @endif
    </div>
  </div>
</section>


@include('modals.response', array('id' => 'user-has-no-projects', 'header' => 'Hey!', 'message' => 'You need to have at least one project before you can contact this provider.', 'actionurl' => '/dashboard', 'actiontext' => 'Create a project'))

@include('modals.response', array('id' => 'user-is-provider', 'header' => 'Hey!', 'message' => 'You are a provider!', 'actionurl' => '/market/type/projects', 'actiontext' => 'Browse projects'))

@include('foot');

</body>
</html>
<style>
.feature {
	background: #4f3735;
}
</style>
<script>
var provider = {{ $provider }};
</script>
