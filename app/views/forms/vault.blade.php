<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Dashboard | ESM</title>
  @include('head');
</head>

@include('header');

<body>

<!--Feature component used below the header of pages
	Uses: h1, p
	Structure: Title, title descriptor
========================================== -->
<div class="feature">
<div class="row">
	<div class="small-12 columns text-center">
		<h1>Form Vault</h1>
	</div>
</div> <!--/.row-->
</div> <!--/.feature-->

<section class="row section">

<!-- Start Two-half inputs with validation and a button -->
<div data-alert="" class="alert-box alert round">
   form with validation,  dropdown, half inputs, third inputs, quarter inputs, radios, checkboxes and a submit button
  <a href="" class="close">×</a>
</div>
<form data-abide class="panel">
  @include('forms/components/dropdown')

    <!-- start 1/2 input full on small -->
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
    <!-- end 1/2 input full on small -->

    <!-- start 1/2 input 1/2 on small -->
   	<div class="row">
    	<div class="small-6 columns">
        	<label for="password">Password <small>required</small>
        		<input type="password" id="password" name="password" required>
        	</label>
        	<small class="error">Passwords must be at least 8 characters with 1 capital letter, 1 number, and one special character.</small>
      	</div>

      	<div class="small-6 columns">
        	<label for="confirmPassword">Confirm Password <small>required</small>
          		<input type="password" id="confirmPassword" name="confirmPassword" required data-equalto="password">
        	</label>
        	<small class="error">Passwords must match.</small>
      	</div>
    </div> <!--/.row-->
    <!-- end 1/2 input 1/2 on small -->

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

    </div> <!--/.row-->

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

    <div class="row">
      <div class="large-12 columns">
        <label for="remarks">Closing Remarks</label>
        <textarea id="remarks" name="remarks" placeholder="Leave your remarks here."></textarea>
      </div>
    </div>

    <hr />

    <div class="row">
    	<div class="small-12 columns">
      		<submit class="button btn-blue">Submit</submit>
  		</div>
    </div> <!--/.row-->

</form>
<!-- End Two-half inputs with validation and a button -->
</section> <!--/.row-->


@include('foot');

</body>
</html>
