@extends('template')
@section('content')

<h3>Post|Edit Records</h3>
<hr>
<form action="{{route('posts.update',$data->id)}}" method="POST">
@csrf
@method('PUT')
<p>Title</p>
<input type="text" name="title" value="{{$data->title}}">

<p>Slug</p>
<input type="text" name="slug" value="{{$data->slug}}">
<p>Description</p>
<textarea name="description" id="" cols="30" ros="10">
{{$data->description}}
</textarea>

<br>
<button type="submit">Update</button>
<br>
<br>
<a href="{{route('posts.index')}}">BACK</a>

</form>
@endsection