<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Form Vault | ESM</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link rel="stylesheet" href="css/custom-style.css" />
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="js/vendor/modernizr.js"></script>
</head>

<?php include("header-not-home-not-logged-in.php"); ?>

<body>

<!--Feature component used below the header of pages
	Uses: h1
	Structure: Title
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>Form Vault</h1>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section">
<!-- Start alert box -->
<div data-alert="" class="alert-box alert round">
   form with validation,  standard labels, dropdown, half inputs, third inputs, quarter inputs, radios, checkboxes and a submit button
  <a href="" class="close">×</a>
</div>
<!-- End alert box -->

<!--Start form
  In order for validation to work properly, we need to define the element data-abide within the form, as well as define a field as required,
  and include <small> with a class of error, and define the error.
========================================== -->
<form data-abide class="panel">
  <!-- start full width dropdown -->
  <div class="row">
   	<div class="small-12 columns">
      <label for="customDropdown1">This form vault is <small>required</small>
        <select id="customDropdown1" required>
          <option value="" disabled>Select item</option>
          <option value="first">Amazing</option>
          <option value="second">Decent</option>
          <option value="third">Crappy</option>
          <option value="fourth">Worst Ever</option>
        </select>
      </label>
      <small class="error">Option is required.</small>
    </div>
  </div> <!--/.row-->
  <!-- end full width dropdown -->

  <hr />

  <!-- start 1/2 input, full on small -->
  <div class="row">
    <div class="small-12 medium-6 columns">
      <label for="name">Your name <small>required</small>
        <input type="text" id="name" required pattern="[a-zA-Z]+">
      </label>
      <small class="error">Name is required and must be a string.</small>
    </div>

    <div class="small-12 medium-6 columns">
      <label for="email">Email <small>required</small>
        <input type="email" id="email" required>
      </label>
      <small class="error">An email address is required.</small>
    </div>
	</div> <!--/.row-->
  <!-- end 1/2 input, full on small -->

  <hr />

  <!-- start 1/2 input, 1/2 on small -->
  <div class="row">
    <div class="small-6 columns">
      <label for="password">Password <small>required</small>
        <input type="text" id="password" name="password" required>
      </label>
      <small class="error">Passwords must be at least 8 characters with 1 capital letter, 1 number, and one special character.</small>
    </div>

    <div class="small-6 columns">
      <label for="confirmPassword">Confirm Password <small>required</small>
        <input type="text" id="confirmPassword" name="confirmPassword" required data-equalto="password">
      </label>
      <small class="error">Passwords must match.</small>
    </div>
  </div> <!--/.row-->
  <!-- end 1/2 input, 1/2 on small -->

  <hr />

  <!-- start 1/3 input -->
  <div class="row">
    <div class="small-12 medium-4 columns">
      <label for="one-third-1">One-third
        <input type="text" id="one-third-1" name="onethird-1">
      </label>
    </div>

    <div class="small-12 medium-4 columns">
      <label for="one-third-2">One-third
        <input type="text" id="one-third-2" name="onethird-2">
      </label>
    </div>

    <div class="small-12 medium-4 columns">
      <label for="url">URL <small>required</small>
        <input type="url" id="url" placeholder="http://tier27.com" required>
      </label>
      <small class="error">Valid URL required.</small>
    </div>
  </div> <!--/.row-->
  <!-- end 1/3 input -->

  <hr />

  <!-- start 1/4 input -->
  <div class="row">
    <div class="small-6 medium-3 columns">
      <label for="one-quarter-1">One-quarter
        <input type="text" id="one-quarter-1" name="one-quarter-1">
      </label>
    </div>

    <div class="small-6 medium-3 columns">
      <label for="one-quarter-2">One-quarter
        <input type="text" id="one-quarter-2" name="one-quarter-2">
      </label>
    </div>

    <div class="small-6 medium-3 columns">
      <label for="one-quarter-3">One-quarter
        <input type="text" id="one-quarter-3" name="one-quarter-3">
      </label>
    </div>

    <div class="small-6 medium-3 columns">
      <label for="one-quarter-4">One-quarter
        <input type="text" id="one-quarter-4" name="one-quarter-4">
      </label>
    </div>
  </div> <!--/.row-->
  <!-- end 1/4 input -->

  <hr />

  <!-- Start radios / checkboxes -->
  <div class="row">
    <div class="small-6 columns">
      <label for="radio1"><input name="radio-buttons" type="radio" id="radio1" required> Radio Button 1</label>
      <label for="radio2"><input name="radio-buttons" type="radio" id="radio2" required> Radio Button 2</label>
      <label for="radio3"><input name="radio-buttons" type="radio" id="radio3" required> Radio Button 3</label>
    </div>
    <div class="small-6 columns">
      <label for="checkbox1"><input type="checkbox" id="checkbox1" required> Label for Checkbox</label>
      <label for="checkbox2"><input type="checkbox" id="checkbox2" required checked> Label for Checkbox</label>
      <label for="checkbox3"><input type="checkbox" id="checkbox3" required> Label for Checkbox</label>
    </div>
  </div> <!--/.row-->
  <!--End radios / checkboxes -->

  <hr />

  <!-- Start full width textarea -->
  <div class="row">
    <div class="large-12 columns">
      <label for="comments">Comments</label>
      <textarea id="comments" name="comments" placeholder="Leave comments."></textarea>
    </div>
  </div> <!--/.row-->
  <!-- End full width textarea -->

  <hr />

  <!--Start fixed with button-->
  <div class="row">
    <div class="small-12 columns">
      <input class="button btn-blue" type="submit" value="submit">
  	</div>
  </div> <!--/.row-->
  <!--End fixed with button-->

  <hr />

  <!--Start custom width button
    I've added a class btn-passport, which tells it to display block.  
    small-12 says: go full width of the container at the smallest breakpoint
    medium-3 says: go a width of 25% of the container on medium breakpoints and up (large inherets the 25% width as well, unless you say otherwise)
  ========================================== -->
  <div class="row">
    <div class="small-12 medium-3 columns">
      <input class="button btn-blue btn-passport" type="submit" value="submit">
    </div>
  </div> <!--/.row-->
  <!--End custom width button-->

</form>
<!-- End form -->
</section> <!--/.row-->

<section class="row section">
<!-- Start alert box -->
<div data-alert="" class="alert-box alert round">
   form with fieldset (a wrapper inside of the form element), a legend, prefix, postfix
  <a href="" class="close">×</a>
</div>
<!-- End alert box -->

<!--Start form-->
<form class="panel">
  <!-- begin fieldset -->
  <fieldset>
  <legend>Legend</legend>

  <!-- begin collapsed row with prefix
    the collapsed class removes the negative margin on the row element, and removes padding on the columns within.
  ========================================== -->
  <div class="row collapse">
    <div class="small-3 large-2 columns">
      <span class="prefix">http://</span>
    </div>
    <div class="small-9 large-10 columns">
      <input type="text" placeholder="Enter your URL...">
    </div>
  </div> <!--/.row-->

  <hr />

  <!-- begin collapsed row with postfix
    you could put anything you want in the postfix sections - I chose icons.  If you notice, the mediums only add up to 10 
    (leaving 2 leftover)  I gave the third column an offset of 2, to push it over, bc remember a collapsed row removes the margin and padding, 
    so otherwise these inputs would be squished together.  You need to use the class of collapse to push the postfix next to the input.
  ========================================== -->
  <div class="row collapse">
    <div class="small-9 medium-4 columns">
      <input type="text" id="name-2" placeholder="McGrupp Douvlos">
    </div>
    <div class="small-3 medium-1 columns">
      <span class="postfix radius"><i class="fa fa-user"></i></span>
    </div>

    
    <div class="small-9 medium-4 medium-offset-2 columns">
      <input type="text" id="telephone" placeholder="814-123-4567">
    </div>
    <div class="small-3 medium-1 columns">
      <span class="postfix radius"><i class="fa fa-phone"></i></span>
    </div>
  </div> <!--/.row-->
    
  </fieldset>
  <!--end fieldset-->
</form>
</section> <!--/.row-->


<section class="row section">
<!-- Start alert box -->
<div data-alert="" class="alert-box alert round">
   form with inline labels
  <a href="" class="close">×</a>
</div>
<!-- End alert box -->

<!--Start form with inline labels
========================================== -->
<form class="panel">
  <div class="row">
    <div class="small-12 medium-9">
      <div class="row">
        <div class="small-3 columns">
          <label for="first-label" class="right inline">Label 1</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="first-label">
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="small-3 columns">
          <label for="second-label" class="right inline">Label 2</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="second-label">
        </div>
      </div> <!--/.row-->

      <div class="row">
        <div class="small-3 columns">
          <label for="third-label" class="right inline">Label 3</label>
        </div>
        <div class="small-9 columns">
          <input type="text" id="third-label">
        </div>
      </div> <!--/.row-->
    </div>
  </div> <!--/.row-->
</form>
<!--End form with inline labels -->
</section>


<?php include("footer.php"); ?>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>
</html>