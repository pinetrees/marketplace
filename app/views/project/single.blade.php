<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>View Project | ESM</title>
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
		<h1>{{$project->name}}<h1>
	</div>
  <div class="small-10 small-offset-1 medium-6 medium-offset-3">
    <ul class="breadcrumbs">
      <li><a class="history-back"><<</a></li>
      @foreach( $project->structure() as $category )
      <li><a href="#">{{ $category->name }}</a></li>
      @endforeach
    </ul>
  </div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section view-project">
  <div class="small-12 large-8 columns">
    <div class="panel">
      <div class="row project-details">
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-pencil-square-o"></i> Posted: {{$project->posted()}}</li>
            <li><i class="fa fa-globe"></i> Location: {{$project->region->name}}</li>
          </ul>
        </div>
        <div class="small-6 columns">
          <ul class="no-bullet">
            <li><i class="fa fa-calendar"></i> Start: {{$project->starts()}}</li>
            <li><i class="fa fa-calendar"></i> End: {{$project->ends()}}</li>
            <!--<li><i class="fa fa-money"></i> Rate: $20-$30 / hr</li>-->
          </ul>
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="project-buyer-info small-12 columns">
          <div class="panel">
            <ul class="inline-list">
              <li><img src="/img/user-profile.png" alt="avatar" width="50"></li>
              <li>
                <span>User</span>
                <span>United States</span>
              </li>
            </ul>
          </div> <!--/.panel-->
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="project-description small-12 columns">
	@foreach(array('summary', 'about', 'purpose', 'requirements', 'terms', 'timeline', 'budget', 'resources', 'qualifications', 'evaluation') as $att)
	@if( $project->$att != '' )
	  <h4>{{ ucfirst($att) }}</h4>
          <p>{{$project->$att}}</p>
	@endif
	@endforeach

          <h4>Categories</h4>
          <ul class="inline-list">
	    @foreach( $project->categories as $category )
            <li class="tags"><a href="/projects/category/{{$category->id}}">{{$category->name}}</a></li>
	    @endforeach
          </ul>
        </div>
      </div> <!--/.row--> 
    </div>
    <div class="project-description-footer">
      <span>Job ID:{{$project->id}}</span>
    </div>
  </div>

  <div class="small-12 large-4 columns">
    <div class="panel">
      @if($user)
      @if($project->isOf($user))
      <a href="/dashboard/projects/{{$project->id}}" class="button btn-blue btn-passport">Edit Project</a>
      @elseif($user->isAdmin())
            @if($project->isAssigned())
            <form method="post" action="/unassign">
            <input name="project_id" class="hide-important" value="{{$project->id}}">
            <button class="button btn-blue btn-passport submit unassignment">Unassign from Provider</button>
            </form>
            @else
            <button class="button btn-blue btn-passport" data-reveal-id="assign-to-provider">Assign to Provider</button>
            @endif
      @include('modals.assign')
      @elseif($user->isBuyer())
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-is-buyer">Submit Proposal</button>
      @include('modals.response', array('id' => 'user-is-buyer', 'header' => 'Hey!', 'message' => 'You are a buyer!', 'actionurl' => '/market/type/services', 'actiontext' => 'Browse services'))
      @elseif($user->hasProposed($project))
      <span class="">You've submitted a proposal for this project!</span>
      @elseif($user->hasServices())
      <button class="contact button btn-blue btn-passport" data-reveal-id="proposeModal">Submit Proposal</button>
      <span class="contact response-message"></span>
      @include('modals.propose', array('buyer' => $project->buyer))
      @else
      <button class="contact button btn-blue btn-passport" data-reveal-id="user-has-no-services">Submit Proposal</button>
      @include('modals.response', array('id' => 'user-has-no-services', 'header' => 'Hey!', 'message' => 'You need to have at least one service before you can contact this buyer.', 'actionurl' => '/dashboard', 'actiontext' => 'Create a service'))
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
	background: #4d4f35;
}
</style>
<script>
var project = {{$project}}
</script>
