<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Tokokar</title>
  @include('head')
</head>
<body>

<section class="header-section home">
<div class="row">
  <div class="small-12 columns">
  <nav class="top-bar" data-topbar>
    <ul class="title-area">
      <li class="name logo">
        <h1><a href="#">tokokar</a></h1>
        <span class="hidden-small">Tagline goes here</span>
      </li>
       <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
      <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="#">About</a></li>
        <li><a href="#">How Tokokar Works</a></li>
        <li><a href="#">Listings</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="loginModal" data-reveal-id="loginModal">Login</a></li>
        <li>
          <div class="search-field">
            <input type="text" id="librarySearch" placeholder="Search">
          </div>
        </li>
      </ul>

    </section>
  </nav>
  </div>
</div> <!--/.row-->

<!-- Slider -->
<div class="row slider">
  <div class="small-12 columns">
    <ul class="content-slider" data-orbit>
      <!-- Slide 1 -->
      <li data-orbit-slide="headline-1">
        <div class="text-center">
          <h2>Lorem Ipsum dolor</h2>
          <h3>sit amet, consectetur adipiscing elit, sed do.</h3>
          <a class="button button-hollow">Find Vehicles</a>
        </div>
      </li>
      <!-- Slide 2 -->
      <li data-orbit-slide="headline-2">
        <div class="text-center">
          <h2>Lorem Ipsum dolor</h2>
          <h3>sit amet, consectetur adipiscing elit, sed do.</h3>
          <a class="button button-hollow">Lorem Ipsum</a>
        </div>
      </li>
      <!-- Slide 3 -->
      <li data-orbit-slide="headline-3">
        <div class="text-center">
          <h2>Lorem Ipsum dolor</h2>
          <h3>sit amet, consectetur adipiscing elit, sed do.</h3>
          <a class="button button-hollow">Lorem Ipsum</a>
        </div>
      </li>
    </ul>
  </div>  
<div> <!--/.slider-->
</section>



<section class="section" id="home-intro">
<div class="row text-center">
  <div class="small-12 columns">
    <div class="home-intro-section">
      <a class="icon-block" href="/about">
        <i class="fa fa-car"></i>
        <h2 class="m-bot0">Learn what makes Tokokar different</h2>
        <h6 class="m-top0">We've created a new way to purchase vehicles, focused on you.</h6>
      </a>  
      <a href="/about">Learn more about this</a>

      <br />
      <br />
      <br />
        
      <div class="row bs-wizard" style="border-bottom:0;">
          
          <div class="small-3 columns bs-wizard-step complete">
            <div class="text-center bs-wizard-stepnum">Step 1</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
          </div>
          
          <div class="small-3 columns bs-wizard-step complete"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 2</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat. Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique placerat</div>
          </div>
          
          <div class="small-3 columns bs-wizard-step active"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 3</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi bibendum bibendum</div>
          </div>
          
          <div class="small-3 columns bs-wizard-step disabled"><!-- active -->
            <div class="text-center bs-wizard-stepnum">Step 4</div>
            <div class="progress"><div class="progress-bar"></div></div>
            <a href="#" class="bs-wizard-dot"></a>
            <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</div>
          </div>

      </div>    <!--/.row-->     


    </div>
  </div>
<div> <!--/.row-->

<div class="row collapse">
  <div class="small-12 columns">
    <div data-alert="" class="alert-box radius">
	  {{ Copy::block('home-alert', '') }}
      
      <a href="" class="close">×</a>
    </div>
  </div>
<div> <!--/.row-->
</section>

<section class="section" id="home-invite">
<div class="row">
  <div class="small-12 columns text-center">
    <h4>Join tokokar today <a class="button button-white" data-reveal-id="registerModal">Get Started</a></h4>
  </div>
<div> <!--/.row-->
</section>

@include('footer')

@include('modals')

@include('foot')

</body>
</html>
