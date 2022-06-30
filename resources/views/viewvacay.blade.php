<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<!-- css lokal -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/content.css')}}">
  <title>Golek Homestay</title>
</head>

<body>
<nav class="navbar navbar-expand-sm navbar-light justify-content-between">
  <div id="icon">
  <a href="{{url('/')}}">
    <img src="{{asset('asset/img/golekLogo-small.jpg')}}" alt="golekHomestay">
    </a>
  </div>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="listHomestay">Homestay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listJob">Looking for Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="listVacay">Tourism Attraction</a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Sign Up</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li> -->
    </ul>
  </nav>
   
        <ul class="breadcrumb">
            <li class="breadcrumb-item active"><a href="index.html">Index</a></li>
            <li class="breadcrumb-item active"><a href="homestayMenus.html">Homestay</a></li>
            <li class="breadcrumb-item active"><a href="Job.html">Job</a></li>
            <li class="breadcrumb-item active"><a href="Tourism.html">Tourism</a></li>
        </ul>

        

    <div class="container-1">
    <div class="row">
      <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>

            <div class="carousel-inner">

              <div class="carousel-item active">
                <img class="d-block w-100" src="asset/wisata.jpg">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="asset/wisata2.jpg">
              </div>

              <div class="carousel-item">
                <img class="d-block w-100" src="asset/room3.jpg">
              </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>

        </div>

    </div>
    </div>

      <div class="row">
        <div class="col">
             <ul><h4><strong>Jodipan Village</strong></h4></ul>
        </div>
      </div>

      <div class="row">
        <div class="col">
           
            <ul>Humble, iconic village with colorfully painted buildings on a hill, art and souvenir </ul>

            <ul> Gang 1, Jodipan, Blimbing, Kesatrian, Blimbing, Kota Malang, Jawa Timur 65126 </ul>
            <ul><strong>Open </strong> . Closes 12AM</ul>
        <button type="button" class="btn btn-outline-dark ml-4">see home stay near</button>

        </div>    
        
      </div>  

    
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>