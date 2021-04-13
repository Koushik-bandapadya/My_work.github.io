@extends('template')
@section('content')

<h3>Post|Show Records</h3>
<div>
<p>
ID:{{$data->id}} <br>
Title:{{$data->title}} <br>
Slug:{{$data->slug}} <br>
Description:{{$data->description}}
</p>
</div>
@endsection