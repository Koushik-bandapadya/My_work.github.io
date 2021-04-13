@extends('template')
@section('content')
  
<br>
    <br>
             
              <div class="card">
              <h3 class="login-heading mb-4">My Dashboard</h3>
                  <div class="card-body text-center">
                    Welcome <h3 class="text-success">{{ ucfirst(Auth()->user()->name) }}</h3>
                  </div>
                  <div class="card-body text-center">
                    <a class="small" href="{{url('logout')}}"><h5 class="text-danger">Logout</h5></a>
                  </div>
     

      
@endsection

