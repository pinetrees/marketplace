<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Login | ESM</title>
  @include('head')
  {{ HTML::style('css/no-modal.css'); }}
</head>

@include('header')

<div class="row">
    <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
      <h3 class="pageheader">Login</h3>
	@include('forms/login')
      <p class="reveal-asterisk">&#42; Not a member? <a href="/registration" class="modal-action" data-reveal-id="registerModal">Register</a></p>
    </div>
</div> <!--/.row-->

@include('foot')
