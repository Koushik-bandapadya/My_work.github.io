@extends('template')
@section('content')

<h3>Admin|New Records</h3>
<hr>
<form action="{{route('admins.store')}}" method="POST">
@csrf
<p>User Name</p>
<input type="text" name="user_name">
<p>Password</p>
<input type="text" name="password">
<p>Email</p>
<input type="text" name="email">
<p>Phone</p>
<input type="text" name="phone">
<br>
<button type="submit">Submit</button>

</form>
@endsection