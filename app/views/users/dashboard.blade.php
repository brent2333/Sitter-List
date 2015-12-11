@extends('master')
	<div class="login_reg">
		@if(Auth::guest())
		<a href="#" id="loginlink" />Sign in</a>
		{{ HTML::link('users/createuser', 'Register') }}
		@endif
		@if(Auth::check())
		{{ HTML::link('users/logout', "Log out")}}
		@endif

	</div>
@section('nav')

@stop

@section('content')
<h1>Welcome back user {{ $userid }}</h1>
<p><button>View My Saved Lists</button></p>
<p><button>Create Babysitting List</button>
<button>Create Housesitting List</button><br />
<button>Create Petsitting List</button>
<button>Create Plantsitting List</button></p>
@stop

@section('footer')
<p>&copy; brentlawsoncreative 2013</p>
@stop

