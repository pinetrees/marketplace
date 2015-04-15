<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<section class="header-section header-section-secondary">
<div class="row">
  <div class="small-12 columns">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name logo">
        <h1><a href="/">tokokar</a></h1>
        <span>{{ Setting::get('sitename') }}</span>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="/logout">Logout</a></li>
        <li class="has-dropdown">
        <li><a href="/{{ $user->wants() }}">Search</a></li>
        <li><a href="/dashboard/inbox">Inbox (<span class="unread-messages">{{$unread}}</span>)</a></li>
        </li>
	@if( Session::has('skeleton') )
        <li class="has-dropdown">
        <a href="#">Roles</a>
        <ul class="dropdown">
		  @foreach( $roles as $role )
          <li><a href="/role/{{ $role->id }}">{{ $role->name }}</a></li>
		  @endforeach
        </ul>
        </li>
        <li class="has-dropdown">
        <a href="#">Become</a>
        <ul class="dropdown">
		  @foreach( User::all() as $u )
          <li><a href="/become/{{ $u->id }}">{{ $u->display() }}</a></li>
		  @endforeach
        </ul>
        </li>
	@endif
        <li><a class="avatar has-tooltip" data-tooltip-name="avatar-navigation" href="/dashboard"><img class="" src="{{ Auth::user()->getAvatarPath() }}" alt="avatar" width="60"></a><span class="uppercase-blue">{{$user->username}}</span></li>
      </ul>

    </section>
  </nav>
  </div>
</div> <!--/.row-->
</section>
<script>
var user = {{ $user }};
</script>
