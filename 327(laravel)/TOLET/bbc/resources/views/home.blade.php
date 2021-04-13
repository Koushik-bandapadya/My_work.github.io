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
  <!-- <a style="float:right"  href="http://127.0.0.1:8000/login">Sign in</a> -->


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



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ Auth::user()->name }} <span class="caret"></span>
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>



</ul>
    @yield('content')
</section>





<div class="footer">
 <p> All copyrights reserved to TO-LET/BBC with help of https://colorlib.com</p>
 
</div>


</body>
</html>