<!DOCTYPE html>
<html>
<head>
  
<title>Registration Form - Tutsmake.com</title>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="{{asset('css/th.css')}}">

<div class="sidenav">
         <div class="login-main-text">
            <h4>TOLET<br> Signup Page</h4>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
              <h2 class="login-heading mb-4">Register</h2>
               <form action="{{url('post-registration')}}" method="POST" id="regForm">
                 {{ csrf_field() }}
                <div class="form-label-group">
                  <input type="text" id="inputName" name="name" class="form-control" placeholder="Full name" autofocus>
                  <label for="inputName">Name</label>
 
                  @if ($errors->has('name'))
                  <span class="error">{{ $errors->first('name') }}</span>
                  @endif       
 
                </div> 
                <div class="form-label-group">
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >
                  <label for="inputEmail">Email address</label>
 
                  @if ($errors->has('email'))
                  <span class="error">{{ $errors->first('email') }}</span>
                  @endif    
                </div> 
 
                <div class="form-label-group">
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">
                  <label for="inputPassword">Password</label>
                   
                  @if ($errors->has('password'))
                  <span class="error">{{ $errors->first('password') }}</span>
                  @endif  
                </div>
 
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign Up</button>
                <div class="text-center">If you have an account?
                  <a class="small" href="{{url('login')}}">Sign In</a>
                  <br>
                  <!-- <a href="{{route('houseads.index')}}">BACK</a></div> -->
                  <a href="javascript:window.history.back()">BACK</a>
                  
              </form>

              </div>
         </div>
      </div>
</body>
</html>
