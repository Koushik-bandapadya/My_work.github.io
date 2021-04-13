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



<h2>ADVERTISEMENT LIST&nbsp&nbsp&nbsp| </h2>
<!-- <a href=>CREATE NEW ADS</a> -->
<div>
<form action="{{route('houseads1.create')}}">
         <button type="submit">CREATE NEW AD</button>
         <!-- <a href="javascript:window.history.back()">BACK</a> -->
         <a href="javascript:window.history.back()"><button>BACK</button></a>
         
      </form>
      
</div>
<link rel="stylesheet" href="{{asset('css/tabtamim.css')}}">
<link rel="stylesheet" href="{{asset('css/maps.css')}}">
<table style="width:100%">

      <tr>
        <td> ID   </td>
        <td> Title   </td>
        <td> Cost   </td>
        <td> Area   </td>
        <!-- <td> pic   </td> -->
        <td> Bed   </td>
        <td> Bath   </td>
        <td> Size   </td>
        <td> Show   </td>
        <td> Edit   </td>	
        <td> Delete   </td>	
      </tr>
      @foreach($data as $row)
      <tr>
        <td> {{$row->id}}   </td>
        <td> {{$row->title}}   </td>
        <td> {{$row->cost}}   </td>
        <td> {{$row->area}}   </td>
        <!-- <td> {{$row->pic}}   </td> -->
        <td> {{$row->bed}}   </td>
        <td> {{$row->bath}}   </td>
        <td> {{$row->size}}   </td>
    
        <td> <button type="button" ><a href="{{route('houseads1.show',$row->id)}}">Show</a>  </button> </td>
        <td> <button type="button" ><a href="{{route('houseads1.edit',$row->id)}}">Edit</a>  </button> </td>
        <td>  
       <form action="{{route('houseads1.destroy',$row->id)}}" method ="POST" onsubmit="return confirm('Are you sure !')">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
       </form> 
    </td>
      </tr>
      @endforeach

     
</table>
<a href="javascript:window.history.back()"><button>BACK</button></a>

</ul>
    @yield('content')
</section>





<div class="footer">
 <p> All copyrights reserved to TO-LET/BBC with help of https://colorlib.com</p>
 
</div>


</body>
</html>