@extends('template')
@section('content')

    
<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp              FILL THE GAP AND SUBMIT TO GIVE AD </h3>


<link rel="stylesheet" href="{{asset('css/tabtamim.css')}}">

<form action="{{route('houseads1.store')}}" method="POST">
@csrf
<!-- 
<p>ID</p>
<input type="text" name="id"> -->
<h3>Title</h3>
<input type="text" name="title"> 
<h3>Cost</h3>
<input type="text" name="cost">
<h3>Area</h3>
<input type="text" name="area">
<h3>Pic</h3>
<input type="text" name="pic">
<h3>Bed</h3>
<input type="text" name="bed">
<h3>Bath</h3>
<input type="text" name="bath">
<h3>Size</h3>
<input type="text" name="size">


<br>
  <button type="submit">Submit</button>

</form>
<a href="javascript:window.history.back()"><button>BACK</button></a>
@endsection