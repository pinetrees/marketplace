  @if( Auth::check() && $user->tooltips ) {{ HTML::script('js/tooltips.js') }}
  @endif
  {{ HTML::script('js/foundation.min.js') }}
  {{ HTML::script('js/functions.js') }}
  {{ HTML::script('js/app.js') }}
  {{ HTML::script('js/foundation-datepicker.js') }}
  {{ HTML::script('js/datepicker.js') }}
  <script>
    jQuery(document).foundation();
  </script>
  {{ HTML::script('js/seeds.js') }}
  {{ HTML::script('js/jquery.autosize.js') }}
  <script src="https://code.jquery.com/ui/1.11.2/jquery-ui.min.js"></script>

