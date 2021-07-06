<head>
	
<link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/signup_login_model.css')}} ">
<script type="text/javascript" href="{{asset('./yoyo/js/signup_login_model.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"> </script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/style.css')}}">
</head>
<!-- <h1 class="center"> wlecome to dashboard </h1> -->
@include('sweet::alert')
	 
	 <!-- navbar  -->
<nav class="navbar navbar-expand-md navbar-light bg-light sidebarNavigation" data-sidebarClass="navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler leftNavbarToggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Link </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contact Us  </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="#">Blog </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Partners </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Support </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle bi bi-person-circle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false"> <?php 
  						 if(session()->has('email')){
  						 	 echo session('username');
  						 }
  						 else
  						 	 echo "Unknown User ";
                         ?> </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown01">
                        <a class="dropdown-item" href="./../preferences_modal/">preferences </a>
                        <a class="dropdown-item" href="#">Setting </a>
                         <?php
                      if(session()->has('email')){
                      	 echo '<a class="dropdown-item" href="/logout">Log out</a>';
                      } 
                      else{
                      	 echo '<a class="dropdown-item" href="/register_user">signup</a>';
                      }

                         ?> 
                        
                    </div>
                </li>
            </ul>
           <!--  <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </div>
    </nav>

  <!-- navbar --> 


<SECTION class="container-fluid">
<div class="row">
	<div class="col-xl-2 col-md-4 col-12 " >
   <!-- <x-sidebar/> -->

	</div>
		<div class="col-xl-8 col-md-4 col-12 " style="background-color: white;" >	
		  
     <x-user.middle_bar />
		
	</div>
 		<div class="col-xl-2 col-md-4 col-12 " >

    sectio 3 
   
	</div>
	
</div>	



</SECTION>




