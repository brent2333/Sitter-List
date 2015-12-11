@extends('master')
	<div class="login_reg">
		@if(Auth::guest())
		{{ HTML::link('#', 'Sign in', array('id' => 'loginlink')) }}
		{{ HTML::link('users/createuser', 'Register') }}
		@endif
		@if(Auth::check())
		{{ HTML::link('users/logout', "Log out")}}
		@endif

		
		
		
	</div>
@section('nav')
{{ HTML::link('dashboard', 'My Lists') }}
@stop

@section('content')
<h1>Welcome to Sitter-List</h1>
@stop

@section('footer')
<p>&copy; brentlawsoncreative 2013</p>
@stop
@section('dropform')
<div id="loginform">
<h1>Sign in</h1>

{{ Form::open(array('url' => 'users/login'))}}

{{ Form::token() }}
<p>
{{ Form::label('email', 'Email') }}<br />
{{ Form::text('email', Input::old('email')) }}
</p>

	<p>
	{{ Form::label('password', 'Password') }}<br />
	{{ Form::password('password') }}
	</p>
	
	<p>{{ Form::submit('Sign in') }}</p>

{{ Form::close() }}
</div>
@stop