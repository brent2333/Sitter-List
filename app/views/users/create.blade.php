@extends('master')
@section('content')
<h1>Register</h1>
<p>Registering with Sitter List will be the best thing you have ever done in your life.</p>

@if($errors->has())
<p>The following errors have occurred:</p>

<ul id="form-errors">
	{{ $errors->first('email', '<li>:message</li>') }}
	{{ $errors->first('password', '<li>:message</li>') }}
	{{ $errors->first('password_confirmation', '<li>:message</li>') }}
	</ul>
@endif

{{ Form::open(array('url' => 'users/createuser')) }}
{{ Form::token() }}
<p>
	{{ Form::label('email', 'Email') }}<br />
	{{ Form::text('email') }}
	</p>
	<p>
		{{ Form::label('password', 'Password') }}<br />
		{{ Form::password('password') }}
		</p>
		<p>
			{{ Form::label('password_confirmation', 'Confirm Password ') }}<br />
			{{ Form::password('password_confirmation') }}
			</p>
			
			<p>{{ Form::submit('Register') }}</p>
			
			{{ Form::close() }}
@stop
@section('footer')
<p>&copy; brentlawsoncreative 2013</p>
@stop