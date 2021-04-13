@extends('template')
@section('content')

<h3>Admin|Edit Records</h3>
<hr>
<form action="{{route('admins.update',$data->id)}}" method="POST">
@csrf
@method('PUT')
<p>User Name</p>
<input type="text" name="user_name" value="{{$data->user_name}}">

<p>Password</p>
<input type="text" name="password" value="{{$data->password}}">

<pEmail</p>
<input type="text" name="email" value="{{$data->email}}">

<p>Phone</p>
<input type="text" name="phone" value="{{$data->phone}}">



<br>
<button type="submit">Update</button>
<br>
<br>
<a href="{{route('admins.index')}}">BACK</a>

</form>
@endsection