@extends('template')
@section('content')

<h3>Admin|Show Records</h3>
<div>
<p>
ID:{{$data->id}} <br>
User Name:{{$data->user_name}} <br>
Password:{{$data->password}} <br>
Email:{{$data->email}}<br>
Phone:{{$data->phone}}<br>
</p>
</div>
@endsection