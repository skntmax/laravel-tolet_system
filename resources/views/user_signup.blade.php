
<html>
<head>

<link rel="stylesheet" type="text/css" href="<?php echo 'http://127.0.0.1:8000/./yoyo/css/signup_login_model.css';?> ">
<script type="text/javascript" href="<?php echo 'http://127.0.0.1:8000/./yoyo/js/signup_login_model.js';?>"></script>

 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{asset('./yoyo/js/main_js.js')}}"></script> 

  <title></title>
</head>
<body>
@include('sweet::alert')
  <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row"> <img src="{{asset('./yoyo/img/logo.png')}}" class="logo" alt="header" onclick="redirect()"> </div>
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="{{asset('./yoyo/img/user_logo.jpg')}}" class="image"> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign in with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="twitter text-center mr-3">
                            <div class="fa fa-twitter"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <form action="./../validate/" method="post" accept-charset="utf-8">
                     @csrf
                    

                    
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Username </h6>
                        </label> <input class="mb-4" type="text" name="username" placeholder="Enter a username "> 
                        <span class="text-danger"> @error('username'){{$message}}@enderror </span>

                    </div>
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email</h6>
                        </label> <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> 
                        <span class="text-danger"> @error('email'){{$message}}@enderror </span>

                    </div>
                  
                       <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label> <input type="password" name="password" placeholder="Enter password"> 
                        <span class="text-danger"> @error('password'){{$message}}@enderror </span>

                    </div>        
                    <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Re-enter Password</h6>
                        </label> <input type="password" name="password2" placeholder="Renter password"> 
                        <span class="text-danger"> @error('password2'){{$message}}@enderror </span>

                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button style="background-color: #ff6600;" type="submit" class="btn text-center btn">Login</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger " href="./../register_user" >Sign in </a></small> </div>
                </div>
            </div>
        </div>
    </form>
        <div class=" py-4" style="background-color: #ff6600;">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2 text-white">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>