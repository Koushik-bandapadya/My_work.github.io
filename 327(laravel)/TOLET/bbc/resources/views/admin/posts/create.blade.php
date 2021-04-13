@extends('template')
@section('content')

<h3>Post|New Records</h3>
<hr>
<form action="{{route('posts.store')}}" method="POST">
@csrf
<p>Title</p>
<input type="text" name="title">
<p>Slug</p>
<input type="text" name="slug">
<p>Description</p>
<textarea name="description" id="" cols="30" ros="10"></textarea>
<br>
<button type="submit">Submit</button>

</form>
@endsection