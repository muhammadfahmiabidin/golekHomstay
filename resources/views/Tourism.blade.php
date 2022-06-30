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


  <div class="container-fluid cont">
    <div class="row">
      <div class="col text-center">
        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            City and Area
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data2 as $city)
            <a class="dropdown-item" href="{{url('vacayTypeOfCity/').'/'.$city->cityID}}">{{$city->cityName}}</a>
          @endforeach
          </div>
        </div>

        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Category
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data as $category)
            <a class="dropdown-item" href="{{url('vacayType/').'/'.$category->categoryID}}">{{$category->categoryName}}</a>
          @endforeach
          </div>
        </div>    
      </div>
    </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div style="width: 100%; height:400px; margin-top: 3%;">
        {!! Mapper::render() !!}
        </div>
      </div>

      <div class="col"> 
        <div class="content text-scroll">

          <!-- <div class="col"> -->
          <div class="card">
            <img class="card-img-top" src="asset/background4.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
          <!-- </div> -->

          <!-- <div class="col"> -->
          <div class="card">
            <img class="card-img-top" src="asset/background.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">John Doe</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>
          <!-- </div> -->

          <div class="card">
              <img class="card-img-top" src="asset/background.jpg" alt="Card image">
              <div class="card-body">
                <h4 class="card-title">John Doe</h4>
                <p class="card-text">Some example text.</p>
                <a href="#" class="btn btn-primary disabled">See Profile</a>
              </div>
            </div>

            <div class="card">
                <img class="card-img-top" src="asset/background.jpg" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary disabled">See Profile</a>
                </div>
              </div>
        </div>
    </div>
  </div>
  
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>