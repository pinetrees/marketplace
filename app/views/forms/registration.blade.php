{{ Form::open(array('class' => 'user')) }}

{{ Form::select('role_id', Role::lists()) }}

{{ Form::text('first_name', '', array('placeholder'=>'First Name')) }}

{{ Form::text('last_name', '', array('placeholder'=>'Last Name')) }}

{{ Form::email('email', '', array('placeholder'=>'Email Address')) }}

{{ Form::password('password', array('placeholder'=>'Password')) }}

{{ Form::password('password-confirm', array('placeholder'=>'Confirm Password')) }}

      <a class="btn-passport btn-blue register" href="/user/register" data-reveal-id="thanksModal">Register</a>

{{ Form::close() }}
