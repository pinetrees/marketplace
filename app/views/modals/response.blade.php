<!--Start Response Modal
    Uses zurb js attributes, a row, and a p
    =========================================== -->
<div id="{{ $id }}" class="reveal-modal" data-reveal>
  <div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">{{ $header }}</h3>
       <p>{{ $message }}</p>
        <a href="{{ $actionurl }}" class="btn-passport btn-blue">{{ $actiontext }}</a>
        <a class="close-reveal-modal">&#215;</a>
    </div>
  </div> <!--/.row-->
</div>
<!--End Response Modal-->
