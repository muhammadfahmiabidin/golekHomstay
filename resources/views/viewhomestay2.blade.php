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
                <img class="d-block w-100" src="asset/room10.jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="asset/room11.jpg">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="asset/room12.jpg">
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
        <ul><h4><strong>LUCKY GUESTHOUSE</strong></h4></ul>
        </div>
      </div>

      <div class="row">
        <div class="col">
            <ul>
                <li><p>Fully furnished BNB located around Soekarno Hatta avenue. Everything you need and even more succeed in the city, whether you're traveling for fun or business.</p></li>
                <li><p>This guesthouse is perfect for couples and families who truly appreciate the comfort that brings a fine ambience and a convenient location for a good price</p></li>
                <li><p>The room has a queen sized comfortable bed, air conditioner, and closet. Towels, blankets, linens are provided</p></li>   
            </ul>

            <ul> The frontyard, dining table, living room, and laundry room are common spaces you can use.</ul>

            <ul><strong>Amenities</strong> </ul>
            <ul> 
                <li>Wifi</li>
                <li>Hair dryer</li>
                <li>Free parking on premises</li>
                <li>Laptop friendly workspace</li>
                <li>Air conditioning</li>    
                <li>Breakfast</li>  
                <li>Baby Crib</li>  
                <li>Children's books and toys</li>  
            </ul>
                     
        </div>

        <div class="col text-center">
            <h5><strong>Rp 571.160</strong> per night.</h5>
            <h6>7% off for Jul 26 - 28</h6>
            <h6> Book within the next 25 hours to get this special offer.</h6>
          </div>
      </div>

     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>