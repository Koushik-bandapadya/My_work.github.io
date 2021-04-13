<!DOCTYPE html>
<html>
<head>
<title>Login/BBC</title>
 


 
</head>
<body>
<link rel="stylesheet" href="{{asset('css/th.css')}}">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="sidenav">
         <div class="login-main-text">
            <h2>TOLET<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
              <h3 class="login-heading mb-4">Welcome back!</h3>

               <form action="{{url('post-login')}}" method="POST" id="logForm">


                 {{ csrf_field() }}


                <div class="form-label-group">
                <label for="inputEmail">Enter your email address to login</label>
                  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" >

                  


                  @if ($errors->has('email'))

                  <span class="error">{{ $errors->first('email') }}</span>

                  @endif    

                </div> 


                <div class="form-label-group">
                <label for="inputPassword">Please enter your Password</label>
                  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password">

                

                   

                  @if ($errors->has('password'))

                  <span class="error">{{ $errors->first('password') }}</span>

                  @endif  

                </div>


                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign In</button>

                <div class="text-center">If you have an account?

                  <a class="small" href="{{url('registration')}}">Sign Up</a>
                <h1> <a href="http://127.0.0.1:8000/login/google">Sign in with google</a></h1>
                <a href="javascript:window.history.back()"><button>BACK</button></a>
                </div>

              </form>

              </div>
         </div>
      </div>

</body>

</html>