<!DOCTYPE html>
<html>
<head>

  <div class="topnav">
  <a class="active" href="/">Home</a>
  <a href="/house/houseads/create">Submit Ad</a>
  <a href="/index">House List</a>
  <!-- <a href="template">template</a> -->
  <a href="/map">Map</a>
  <a href="/about">About</a>
  <a style="float:right"  href="http://127.0.0.1:8000/login">Register</a>
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



</ul>
    @yield('content')
</section>





<div class="footer">
 <p> All copyrights reserved to TO-LET/BBC with help of https://colorlib.com</p>
 
</div>


</body>
</html>
