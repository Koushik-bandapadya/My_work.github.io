@extends('template')
@section('content')
<link rel="stylesheet" href="{{asset('css/tabtamim.css')}}">
<link rel="stylesheet" href="{{asset('css/maps.css')}}">

<style>
h2 {text-align: center;}
 /* p {text-align: center;} */
/* a {text-align: center;}  */
</style>
<a href="javascript:window.history.back()"><button>BACK</button></a>
<div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">

   <?php 

     $conn = new mysqli('localhost', 'root', '', 'laravel_bbc');
     if(isset($_GET['search'])){
        $searchKey = $_GET['search'];
        $sql = "SELECT * FROM houseads WHERE title LIKE '%$searchKey%' OR cost LIKE '%$searchKey%' OR area LIKE '%$searchKey%' OR bed LIKE '%$searchKey%'
         OR bath LIKE '%$searchKey%' OR size LIKE '%$searchKey%'";
     }else
     $sql = "SELECT * FROM houseads";
     $result = $conn->query($sql);
   ?>

   <form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search By Name" value=<?php echo @$_GET['search']; ?> > 
     </div>
     <div class="col-md-6 text-left">
      <button class="btn">Search</button>
     </div>
   </form>

   <br> 
   <br>
</div>

<!-- <table class="table table-bordered"> -->
<table style="width:100%">
  <tr>
 
       <h2>House List</h2>
      
    </tr> 
      <tr>
        <!-- <td> ID   </td> -->
        <td> Title   </td>
        <td> Cost   </td>
        <td> Area   </td>
        <!-- <td> pic   </td> -->
        <td> Bed   </td>
        <td> Bath   </td>
        <td> Size   </td>
        <td> Show   </td>
  </tr>
  <?php while( $row = $result->fetch_object() ): ?>
  <tr>
     <td><?php echo $row->title ?></td>
     <td><?php echo $row->cost ?></td>
     <td><?php echo $row->area ?></td>
     <td><?php echo $row->bed ?></td>
     <td><?php echo $row->bath ?></td>
     <td><?php echo $row->size ?></td>
     <td> <button type="button" ><a href="{{route('houseads1.show',$row->id)}}">Show</a>  </button> </td>

  </tr>
  <?php endwhile; ?>
</table>
</div>
</div>
</div>
<a href="javascript:window.history.back()"><button>BACK</button></a>

@endsection