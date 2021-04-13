<!DOCTYPE html>
<html>
<head>

  <div class="topnav">
  <a class="active" href="/">Home</a>
  <a href="/house/houseads1/create">Submit Ad</a>
  <a href="/house/houseads1">House List</a>
  <!-- <a href="template">template</a> -->
  <a href="#map">Map</a>
  <a href="/about">About</a>
  <a style="float:right"  href="http://127.0.0.1:8000/registration">Register</a>
</div>
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
 <!-- <div style="background-image: url('t.jpg')" > -->
 

<section class="main_content">

@if(count($errors) > 0)
<ul>
@foreach ($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
@endif

@if(Session::has('success'))
<p>{{Session::get('success')}}</p>
@endif
@if(Session::has('danger'))
<p>{{Session::get('danger')}}</p>
@endif

    
<h3>&nbsp EDIT AND UPDATE  </h3>


<link rel="stylesheet" href="{{asset('css/tabtamim.css')}}">
<form action="{{route('houseads1.update',$data->id)}}" method="POST">
@csrf
@method('PUT')

<!-- <p>ID</p>
<input type="text" name="id"> -->
<p>Title</p>
<input type="text" name="title" placeholder="{{$data->title}}">

<p>Cost</p>
<input type="text" name="cost" placeholder="{{$data->cost}}">
<p>Area</p>
<input type="text" name="area" placeholder="{{$data->area}}">
<p>Pic</p>
<input type="text" name="pic" placeholder="{{$data->pic}}">

<p>Bed</p>
<input type="text" name="bed" placeholder="{{$data->bed}}">
<p>Bath</p>
<input type="text" name="bath" placeholder="{{$data->bath}}">
<p>Size</p>
<input type="text" name="size" placeholder="{{$data->size}}">


<br>
<button type="submit">Update</button>
<br>
<br>
<a href="{{route('houseads1.index')}}">BACK</a>

</form>

</ul>
    @yield('content')
</section>





<div class="footer">
 <p> All copyrights reserved to TO-LET/BBC with help of https://colorlib.com</p>
 
</div>


</body>
</html>