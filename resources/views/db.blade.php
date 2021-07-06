<head> <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('./yoyo/db2/style.css')}}">
<script type="text/javascript" scr="{{asset('./yoyo/db2/js.js')}}"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
  <a class="navbar-brand" href="#">Sidebar Nav</a>
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarCollapse"
    aria-controls="navbarCollapse"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav mr-auto sidenav" id="navAccordion">
      <li class="nav-item active">
        <a class="nav-link" href="#"> <i class="fa fa-dashboard fa-lg"></i> Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Item 1</a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems2"
          aria-controls="collapseSubItems2"
          aria-expanded="false"
        >Item 2</a>
        <ul class="nav-second-level collapse" id="collapseSubItems2" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 2.1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 2.2</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Item 3</a>
      </li>
      <li class="nav-item">
        <a
          class="nav-link nav-link-collapse"
          href="#"
          id="hasSubItems"
          data-toggle="collapse"
          data-target="#collapseSubItems4"
          aria-controls="collapseSubItems4"
          aria-expanded="false"
        >Item 4</a>
        <ul class="nav-second-level collapse" id="collapseSubItems4" data-parent="#navAccordion">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.1</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.2</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span class="nav-link-text">Item 4.2</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Item 5</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto mt-2 mt-md-0"">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
  </div>
</nav>



  <?php 
  foreach ($result as $key=>$value) {
     echo $key."=".$value;
  }
	    ?>