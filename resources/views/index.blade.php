<!DOCTYPE html>
<html>
<head>

<!-- CSS only -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"> 
 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
 <!-- <script type="text/javascript" href="{{asset('./yoyo/js/javascript.js')}}"></script> -->
 <link rel="stylesheet" type="text/css" href="{{asset('./yoyo/css/style.css')}}">
// replace google map api key with the original one  
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAtlTCNyyiOcLf2pgqkUDQLTvN_bgbWv_Y"></script>
 
</head>
<body> 


	<nav class="navbar navbar-expand-lg navbar-light bg-light nav_heading">
  <div class="container-fluid ">
    <div class="first">
      <a class="navbar-brand" href="#"> <img  src="{{asset('./yoyo/img/logo.png')}}" class="logo" alt="header" height="75" width="75" style="border-radius: 50%;" > </a> 
      
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
    <div class="second">
      
    </div>
   <div class="third">
   <div class="collapse navbar-collapse " id="navbarSupportedContent">
      <ul class="navbar-nav  mb-2 mb-lg-0 text-capitalize align-content-center">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active menu_list " href="#">Link</a>
        </li>
         
         <li class="nav-item">
          <a class="nav-link active menu_list" aria-current="page" href="#">Contact us </a>
        </li>
         <li class="nav-item">
          <a class="nav-link active menu_list" aria-current="page" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active menu_list" aria-current="page" href="#">partners </a>
        </li>

        <li class="nav-item">
          <a class="nav-link active menu_list" aria-current="page" href="#">Support</a>
        </li>


<li class="nav-item">
        <!--   <img src="{{asset('./yoyo/icons/person-circle.svg')}}" alt="Bootstrap" width="32" height="32"> -->

          
          <a class="nav-link active menu_list " aria-current="page" href="register_user/" ><i class="bi bi-person-circle"></i>  login/signup</a>

        </li>
       </ul>
     </div>

<!-- *****************login/signup************ -->
<div class="fourth">
  
 
</div>
<!-- *****************login/signup************ -->
  </div>

  </div>
</nav>


<header>
	  	<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    
  </div>
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img src="{{asset('./yoyo/wall2.jpg')}}" class="d-block w-100" alt="...">
      <div class="carousel-caption  d-md-block "  style=" transform: translateY(-300px);">
 <h1 class ="text-center text-capitalize display-1 m_heading"> Best at your place </h1>      
 <section class=" mt-1 mb-1 ">
  <form action="submit_search/" method="post" accept-charset="utf-8">
 @csrf
   <input class="search_bar" type="text" name="location" id="location"  placeholder="Near Me">

<select name="category" id="category" placeholder="category">
  <option value="bachelor">bachelor</option>
  <option value="family">family</option>
</select>

<select name="type" id="type" placeholder="type">
  <option value="single">single</option>
  <option value="double">double</option>
</select>

<select name="gender" id="gender" placeholder="gender">
  <option value="male">male</option>
  <option value="female">female</option>
</select>

   <button type="submit" class="bi bi-search"> search </button><br><br>
 </form>
   <P>Serving you at the lowest price </P>
</section> 

      </div>
    </div>
    
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</header>

<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
   
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Yo Yo rooms
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="bi bi-bag-fill" > </i> Products
          </h6>
          <p>
            <a href="#!" class="text-reset">Angular</a>
          </p>
          <p>
            <a href="#!" class="text-reset">React</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Vue</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Laravel</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
             <i class="bi bi-share" > </i> Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Settings</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Orders</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Help</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
             <i class="bi bi-person-lines-fill" > </i> Contact
          </h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">yoyorooms.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

<script type="text/javascript">
 var searchInput = 'location';
$(document).ready(function(){
  var autocomplete;
   autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)),{
  types: ['geocode']
   }); 

  google.maps.event.addListener(autocomplete, 'place_changed', function () {
  var near_place = autocomplete.getPlace();
 });

});   

</script>

</html>
