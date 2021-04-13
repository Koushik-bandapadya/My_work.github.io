@extends('template')
@section('content')

<h3>Post| <a href="{{route('posts.create')}}">New Records</a></h3>
<table style="width:100%">
      <tr>
        <td> ID   </td>
        <td> Title   </td>
        <td> Slug   </td>
        <td> Action   </td>
      </tr>
      @foreach($data as $row)
      <tr>
      
        <td> {{$row->id}}   </td>
        <td> {{$row->title}}   </td>
        <td> {{$row->slug}}   </td>
        <td>
        <a href="{{route('posts.show',$row->id)}}">Show></a>  
        <a href="{{route('posts.edit',$row->id)}}">Edit></a> 

    <form action="{{route('posts.destroy',$row->id)}}" method ="POST" onsubmit="return confirm('Are you sure !')">
        @csrf
        @method('delete')
        <button type="submit">Delete</button>
    </form>
</td>
      </tr>
      @endforeach
</table>
@endsection