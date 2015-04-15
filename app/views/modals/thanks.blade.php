<!--Start Thanks Modal
    Uses zurb js attributes, a row, and a p
    =========================================== -->
<div id="thanksModal" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Thank you!</h3>
    	<p>{{ Copy::block('registration-thank-you') }}</p>
        <a href="/dashboard" class="btn-passport btn-blue">My Dashboard</a>
        <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>
<!--End Thanks Modal-->
