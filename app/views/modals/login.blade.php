<!--Start Login Modal
    Uses zurb js attributes, a row, and a form
    =========================================== -->
<div id="loginModal" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Login</h3>
        @include('forms/login')
      <p class="reveal-asterisk">&#42; Not a member? <a href="/registration" class="modal-action" data-reveal-id="registerModal">Register</a></p>
      <a class="close-reveal-modal">&#215;</a>
    </div>
</div> <!--/.row-->
</div>
<!--End Login Modal-->

