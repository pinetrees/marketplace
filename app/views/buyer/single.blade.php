<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Buyer | ESM</title>
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
		<h1>{{$buyer->company}}<h1>
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
	@foreach( $buyer->projects as $result )
	@include('templates/project')
	@endforeach
        </div>
      </div> <!--/.row--> 
    </div>
  </div>

  <div class="small-12 large-4 columns">
    <div class="panel">
      <button class="contact button btn-blue btn-passport" data-reveal-id="messageModal">Contact Buyer</button>
      <span class="contact response-message"></span>
    </div>
  </div>
</section>

@include('modals.message-buyer')

@include('foot');

</body>
</html>
<style>
.feature {
	background: #4f3735;
}
</style>
<script>
var buyer = {{ $buyer }};
</script>
