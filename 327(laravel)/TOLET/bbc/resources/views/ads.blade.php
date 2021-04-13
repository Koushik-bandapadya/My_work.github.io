@extends('template')
@section('content')

<style>
h2 {text-align: center;}
/* p {text-align: center;}
div {text-align: center;} */
</style>

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
     
      </tr>
      @foreach($hasan as $row)
      <tr>
        <td> {{$row->id}}   </td>
        <td> {{$row->title}}   </td>
        <td> {{$row->cost}}   </td>
        <td> {{$row->area}}   </td>
        <!-- <td> {{$row->pic}}   </td> -->
        <td> {{$row->bed}}   </td>
        <td> {{$row->bath}}   </td>
        <td> {{$row->size}}   </td>
    
        <td> <button type="button" ><a href="{{route('houseads.show',$row->id)}}">Show</a>  </button> </td>
       
      </tr>
      @endforeach

     
</table>
<a href="javascript:window.history.back()"><button>BACK</button></a>

@endsection