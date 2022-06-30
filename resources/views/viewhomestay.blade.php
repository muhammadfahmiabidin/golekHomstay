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
    @foreach($data as $data)
    <div class="row">
      <div class="col">
        <img src="{{$data->picture}}" alt="">
      </div>
    </div>
      <div class="row">
      <div class="col">
        <ul><h4><strong>{{$data->propertyName}}</strong></h4></ul>
        </div>
      </div>

      <div class="row">
        <div class="col">
            <ul>
                <li><strong>Description</strong></li>
                <li><p>{{$data->propertyDescription}}.</p></li>
            </ul>
            <ul>
                <li><strong>Property Amenity</strong></li>
                <li><p>{{$data->propertyAmenity}}.</p></li>
            </ul>
            <ul>
                <li><strong>Property Capacity</strong></li>
                <li><p>{{$data->propertyCapacity}}.</p></li>
            </ul>
            <ul>
                <li><strong>Property Contact</strong></li>
                <li><p>{{$data->propertyContact}}.</p></li>
            </ul>
          </div>

          <div class="col text-center">
            <h5><strong>Rp {{$data->price}}</strong> {{$data->timerangeType}}.</h5>
            <h6> Book within the next 25 hours to get this special offer.</h6>
          </div>
        </div>
        @endforeach
  </div>
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>