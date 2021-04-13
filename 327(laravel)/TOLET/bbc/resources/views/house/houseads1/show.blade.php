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


<title>BBC</title>
<a href="javascript:window.history.back()"><button>BACK</button></a>

<div>
<div class="card">
  
  <div class="container">
   
<!-- ID:{{$data->id}} <br> -->
<h1>{{$data->title}} <br></h1>
<h3>Per month<br> {{$data->cost}} <br></h3>
<h4> Address: {{$data->area}}<br> </h4>
<br>
{{$data->pic}} 
<br>
<br>
<h4> Bed:&nbsp{{$data->bed}} &nbsp&nbsp&nbspBath:&nbsp{{$data->bath}} </h4>
<h4> Size: {{$data->size}}<br> </h4>

  </div>
</div>




<style>
.card {
  /* Add shadows to create the "card" effect */
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
}

/* On mouse-over, add a deeper shadow */
.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

/* Add some padding inside the card container */
.container {
  padding: 2px 16px;
}
</style>
</ul>
    @yield('content')
</section>





<div class="footer">
 <p> All copyrights reserved to TO-LET/BBC with help of https://colorlib.com</p>
 
</div>


</body>
</html>