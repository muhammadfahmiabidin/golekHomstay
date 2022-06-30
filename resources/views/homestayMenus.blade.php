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

    <title>Website</title>
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
        <a class="nav-link" href="{{url('listHomestay')}}">Homestay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('listJob')}}">Looking for Job</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('listVacay')}}">Tourism Attraction</a>
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
      <div class="col text-center  ">
          <div class="btn dropdown">
              <a class="ml-5 btn btn-outline-dark dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Type of House
              </a>
    
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              @foreach($data2 as $type)
                <a class="dropdown-item" href="{{url('typeOfHouse/').'/'.$type->categoryID}}">{{$type->categoryType}}</a>
              @endforeach
              </div>
            </div>

        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            City and Area
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           @foreach($data3 as $city)
            <a class="dropdown-item" href="{{url('typeOfCity/').'/'.$city->cityID}}">{{$city->cityName}}</a>
           @endforeach
          </div>
        </div>
        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Price Range
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach($data4 as $price)
            <a class="dropdown-item" href="{{url('typeOfPriceRange/').'/'.$price->priceID}}">{{$price->priceRange}}</a>
            @endforeach
          </div>
        </div>

        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Time Range
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            @foreach($data5 as $time)
            <a class="dropdown-item" href="{{url('typeOfTimeRange/').'/'.$time->timerangeID}}">{{$time->timerangeType}}</a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div id= "map" style="width: 100%; height:400px; margin-top: 3%;">
        {!! Mapper::render() !!}
        </div>
      </div>

      <div class="col">
        <div class="content text-scroll">
          @foreach($data as $data)
          <!-- <div class="col"> -->
            <div class="card">
              <img class="card-img-top" src="{{ $data->picture}}" alt="Card image">
              <div class="card-body">
                <h5 class="card-title">{{$data->propertyName}}</h5>
                <p class="card-text">Rp {{$data->price}} - {{$data->timerangeType}}. <i>free cancellation</i></p>
                <a href="{{url('detailhomestay').'/'.$data->propertyID}}" class="btn btn-primary">See Profile</a>
              </div>
            </div>
          <!-- </div> -->
          @endforeach
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