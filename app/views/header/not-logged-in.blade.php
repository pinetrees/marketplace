<link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

<section class="header-section header-not-home">
<div class="row">
  <div class="small-12 columns">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name logo">
        <h1><a href="/">{{ Setting::get('shortname') }}</a></h1>
        <span>{{ Setting::get('sitename') }}</span>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section not-home">
      <!-- Right Nav Section -->
      <ul class="right">
		@foreach( Page::header() as $page )
        <li><a href="/{{ $page->name }}">{{ $page->title }}</a></li>
		@endforeach
        <li><a href="/contact" data-reveal-id="contactModal">Contact</a></li>
        <li><a href="/login" data-reveal-id="loginModal">Login</a></li>
      </ul>

    </section>
  </nav>
  </div>
</div> <!--/.row-->
</section>
