<!DOCTYPE html>
<html>
<head>

  <div class="topnav">
  <a class="active" href="/">Home</a>
  <a href="/house/houseads/create">Submit Ad</a>
  <a href="/house/houseads">House List</a>
  <!-- <a href="template">template</a> -->
  <a href="#map">Map</a>
  <a href="/about">About</a>
 

  <a style="float:right" class="dropdown-item" href="{{ route('logout') }}"
     onclick="event.preventDefault();
     document.getElementById('logout-form').submit();">
 <!-- {{ __('Logout') }} -->
 <button>Logout</button>
 </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
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

<a href="javascript:window.history.back()"><button>BACK</button></a>
    
<h3>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp              FILL THE GAP AND SUBMIT TO GIVE AD </h3>


<link rel="stylesheet" href="{{asset('css/tabtamim.css')}}">

<form action="{{route('houseads.store')}}" method="POST">
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

</body>
</html>