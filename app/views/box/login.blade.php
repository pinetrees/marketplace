<!--Start Login Modal
    Uses zurb js attributes, a row, and a form
    =========================================== -->
<div id="loginModal" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Login</h3>
      <form method="post" action="/login">

        <input type="email" name="email" placeholder="Email Address">

        <input type="password" name="password" placeholder="Password">

        <input type="checkbox" name="login-checkbox" id="login-checkbox"><label for="login-checkbox">I am cool.</label>

        <a class="btn-passport btn-blue">Login</a>
      </form>
      <a class="close-reveal-modal">&#215;</a>
            <p class="reveal-asterisk">&#42; Not a member? <a href="registerModal" class="modal-action" data-reveal-id="registerModal">Register</a></p>

    </div>
  </div> <!--/.row-->
</div>
<!--End Login Modal-->

