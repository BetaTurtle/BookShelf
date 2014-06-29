<!-- app/views/login.blade.php -->
<div id="myModal" class="reveal-modal" data-reveal>
  <h2>Login/Register</h2>
	{{ Form::open(array('url' => 'login')) }}
		<h4>Login</h4>

		<!-- if there are login errors, show them here -->
		<p>
			{{ $errors->first('email') }}
			{{ $errors->first('password') }}
		</p>

		<p>
			{{ Form::label('email', 'Email Address') }}
			{{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
		</p>

		<p>
			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}
		</p>

		<p>{{ Form::submit('Submit!', array('class' => 'button')) }}</p>
	{{ Form::close() }}
	<a href="{{ URL::to('logout') }}">Logout</a>
  <a class="close-reveal-modal">&#215;</a>
 
</div>
