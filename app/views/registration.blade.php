<!doctype html>
<html class="no-js" lang="en">
<head>
  <title>Registration | ESM</title>
  @include('head')
  {{ HTML::style('css/no-modal.css'); }}
</head>

@include('header')

<a class="close-reveal-modal">&#215;</a>
<div class="row">
  <div class="small-12 medium-9 medium-centered large-5 large-centered reveal-form columns">
    <h3 class="pageheader">Become a Member</h3>
      @include('forms/registration')
    </form>
  </div>
</div> <!--/.row-->

@include('modals.thanks')
@include('foot')
