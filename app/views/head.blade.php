  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {{ HTML::style('css/foundation.css'); }}
  {{ HTML::style('css/foundation-datepicker.css'); }}
  {{ HTML::style('css/custom-style.css'); }}
  {{ HTML::style('css/self-style.css'); }}
  <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  {{ HTML::script('js/vendor/modernizr.js') }}
  {{ HTML::script('js/vendor/jquery.js') }}
  {{ HTML::script('js/vendor/underscore.js') }}
  {{ HTML::script('js/data.js') }}
  @if(Auth::check() && Auth::user()->isAdmin())
  <script>
  var isAdmin = true;
  </script>
  @endif
