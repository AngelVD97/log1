<a href="/">Inicio</a>
@guest
<a href="/login">Login</a>
@else
<a href="/dashboard">Dashboard</a>
<a href="#">Logout</a>
@endguest


@if(session('status'))

<br>
{{ session ('status')}}

@endif