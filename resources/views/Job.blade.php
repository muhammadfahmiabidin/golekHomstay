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
                Type of Job
              </a>
    
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
              @foreach($data1 as $type)
                <a class="dropdown-item" href="{{url('jobType/').'/'.$type->jobID}}">{{$type->jobtypeName}}</a>
              @endforeach
              </div>
            </div>
        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            City and Area
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data2 as $city)
            <a class="dropdown-item" href="{{url('jobTypeOfCity/').'/'.$city->cityID}}">{{$city->cityName}}</a>
          @endforeach
          </div>
        </div>

        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Education Level
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data3 as $education)
            <a class="dropdown-item" href="{{url('jobTypeOfEducation/').'/'.$education->educationID}}">{{$education->jobEducation}}</a>
          @endforeach
          </div>
        </div>
        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Job Field
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data4 as $field)
            <a class="dropdown-item" href="{{url('jobTypeOfField/').'/'.$field->jobfieldID}}">{{$field->jobfield}}</a>
          @endforeach
          </div>
        </div>
        <div class="btn dropdown">
          <a class="ml-5 btn btn-outline-dark dropdown dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Salary
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          @foreach($data5 as $salary)
            <a class="dropdown-item" href="{{url('jobTypeOfSalary/').'/'.$salary->jobSalaryID}}">{{$salary->jobSalary}}</a>
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
        <div id="map" style="width: 100%; height:400px; margin-top:3%;">
        {!! Mapper::render() !!}
        </div>
      </div>

      <div class="col">
        <div class="content text-scroll">

            <div class="row">
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="{{asset('asset/img/background.jpg')}}" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title">John Doe</h4>
                          <p class="card-text">Some example text.</p>
                          <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                      </div>
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