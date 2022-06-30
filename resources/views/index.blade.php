<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<!-- css lokal -->
<link rel="stylesheet" href="{{asset('css/style.css')}}">

  <title>Website</title>
  </style>

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

  <div id="utama" class="text-center">
    <div class="container-fluid text">
      <h1 class="display-4">
        <strong> Hello, Guest! </strong>
      </h1>
      <h5>
        <strong> Looking for Your Dream Destination or Desired Job? </strong>
      </h5>
      <form class="form-inline justify-content-center">
        <input class="form-control-lg mr-sm-12" type="search" placeholder="Enter Your Destination.." aria-label="Search">
        <button class="btn-lg btn-outline-primary mr-my-5 my-sm-12" type="submit">Search</button>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <img src="{{asset('asset/img/Graduation_cap.jpg')}}" alt="dekat_campus">
        <h3 class="display-4">
          <b>Near Campus</b>
        </h3>
        <h4>Find Lodging near Your Campus</h4>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JAKARTA</h6>
          </li>
          <li>
            <a href="{{url('listHomestay/Binus')}}">near Binus Kemanggisan</a>
          </li>
          <li>
            <a href="#">near Binus Alam Sutra</a>
          </li>
          <li>
            <a href="#">near STAN</a>
          </li>
          <li>
            <a href="#">near Trisakti</a>
          </li>
          <li>
            <a href="#">near UIN Jakarta</a>
          </li>
          <li>
            <a href="#">near UNJ</a>
          </li>
          <li>
            <a href="#">near UNTAR</a>
          </li>
          <li>
            <a href="#">near UPH</a>
          </li>
          <li>
            <a href="#">near UI Depok</a>
          </li>
          <li>
            <a href="#">near Gunadarma</a>
          </li>
          <li>
            <a href="#">near Kelapa Dua</a>
          </li>
        </ul>
      </div>

      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">BANDUNG</h6>
          </li>
          <li>
            <a href="#">near ITB</a>
          </li>
          <li>
            <a href="#">near MARANATHA</a>
          </li>
          <li>
            <a href="#">near STT Telokom</a>
          </li>
          <li>
            <a href="#">near UNIKOM</a>
          </li>
          <li>
            <a href="#">near UNISABA</a>
          </li>
          <li>
            <a href="#">near UNPAD DipatiukurUNJ</a>
          </li>
          <li>
            <a href="#">near UNPAR</a>
          </li>
          <li>
            <a href="#">near UNPAD Jatinangor</a>
          </li>
          <li>
            <a href="#">near UPI</a>
          </li>
          <li>
            <a href="#">near UNJANI</a>
          </li>
          <li>
            <a href="#">near ITENAS</a>
          </li>
          <li>
            <a href="#">near WIDYATAMA</a>
          </li>
          <li>
            <a href="#">near UNISBA</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JOGJA</h6>
          </li>
          <li>
            <a href="#">near UGM</a>
          </li>
          <li>
            <a href="#">near UMY</a>
          </li>
          <li>
            <a href="#">near Atmajaya Jogja</a>
          </li>
          <li>
            <a href="#">near UAD</a>
          </li>
          <li>
            <a href="#">near UPN Jogja</a>
          </li>
          <li>
            <a href="#">near UNY</a>
          </li>
          <li>
            <a href="#">near UIN Sunan Kali Jaga</a>
          </li>
          <li>
            <a href="#">near Stie YKPN</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">SURABAYA</h6>
          </li>
          <li>
            <a href="#">near ITS</a>
          </li>
          <li>
            <a href="#">near UBAYA</a>
          </li>
          <li>
            <a href="#">near UNAIR</a>
          </li>
          <li>
            <a href="#">near UNESA</a>
          </li>
          <li>
            <a href="#">near UPN Surabaya</a>
          </li>
          <li>
            <a href="#">near UN Sunan Ampel Surabaya</a>
          </li>
          <li>
            <a href="#">near UWM</a>
          </li>
          <li>
            <a href="#">near UK Petra</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">KOTA LAIN</h6>
          </li>
          <li>
            <a href="#">near IPB Bogor</a>
          </li>
          <li>
            <a href="#">near UNNES Semarang</a>
          </li>
          <li>
            <a href="#">near UDINUS Semarang</a>
          </li>
          <li>
            <a href="#">near UB Malang</a>
          </li>
          <li>
            <a href="#">near UMM Malang</a>
          </li>
          <li>
            <a href="#">near UIN Malang</a>
          </li>
          <li>
            <a href="#">near UM Malang</a>
          </li>
          <li>
            <a href="#">near UNEJ Jember</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <img class="img-icon" src="{{asset('asset/img/jobs.jpg')}}" alt="mencari_job">
        <h3 class="display-4">
          <b>Job Vacancy</b>
        </h3>
        <h4>Find Residence Near Your Workplace</h4>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JAKARTA</h6>
          </li>
          <li>
            <a href="{{url('listJob/Jakarta Utar')}}">near Binus Kemanggisan</a>
          </li>
          <li>
            <a href="#">near Binus Alam Sutra</a>
          </li>
          <li>
            <a href="#">near STAN</a>
          </li>
          <li>
            <a href="#">near Trisakti</a>
          </li>
          <li>
            <a href="#">near UIN Jakarta</a>
          </li>
          <li>
            <a href="#">near UNJ</a>
          </li>
          <li>
            <a href="#">near UNTAR</a>
          </li>
          <li>
            <a href="#">near UPH</a>
          </li>
          <li>
            <a href="#">near UI Depok</a>
          </li>
          <li>
            <a href="#">near Gunadarma</a>
          </li>
          <li>
            <a href="#">near Kelapa Dua</a>
          </li>
        </ul>
      </div>

      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">BANDUNG</h6>
          </li>
          <li>
            <a href="#">near ITB</a>
          </li>
          <li>
            <a href="#">near MARANATHA</a>
          </li>
          <li>
            <a href="#">near STT Telokom</a>
          </li>
          <li>
            <a href="#">near UNIKOM</a>
          </li>
          <li>
            <a href="#">near UNISABA</a>
          </li>
          <li>
            <a href="#">near UNPAD DipatiukurUNJ</a>
          </li>
          <li>
            <a href="#">near UNPAR</a>
          </li>
          <li>
            <a href="#">near UNPAD Jatinangor</a>
          </li>
          <li>
            <a href="#">near UPI</a>
          </li>
          <li>
            <a href="#">near UNJANI</a>
          </li>
          <li>
            <a href="#">near ITENAS</a>
          </li>
          <li>
            <a href="#">near WIDYATAMA</a>
          </li>
          <li>
            <a href="#">near UNISBA</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JOGJA</h6>
          </li>
          <li>
            <a href="#">near UGM</a>
          </li>
          <li>
            <a href="#">near UMY</a>
          </li>
          <li>
            <a href="#">near Atmajaya Jogja</a>
          </li>
          <li>
            <a href="#">near UAD</a>
          </li>
          <li>
            <a href="#">near UPN Jogja</a>
          </li>
          <li>
            <a href="#">near UNY</a>
          </li>
          <li>
            <a href="#">near UIN Sunan Kali Jaga</a>
          </li>
          <li>
            <a href="#">near Stie YKPN</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">SURABAYA</h6>
          </li>
          <li>
            <a href="#">near ITS</a>
          </li>
          <li>
            <a href="#">near UBAYA</a>
          </li>
          <li>
            <a href="#">near UNAIR</a>
          </li>
          <li>
            <a href="#">near UNESA</a>
          </li>
          <li>
            <a href="#">near UPN Surabaya</a>
          </li>
          <li>
            <a href="#">near UN Sunan Ampel Surabaya</a>
          </li>
          <li>
            <a href="#">near UWM</a>
          </li>
          <li>
            <a href="#">near UK Petra</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">KOTA LAIN</h6>
          </li>
          <li>
            <a href="#">near IPB Bogor</a>
          </li>
          <li>
            <a href="#">near UNNES Semarang</a>
          </li>
          <li>
            <a href="#">near UDINUS Semarang</a>
          </li>
          <li>
            <a href="#">near UB Malang</a>
          </li>
          <li>
            <a href="#">near UMM Malang</a>
          </li>
          <li>
            <a href="#">near UIN Malang</a>
          </li>
          <li>
            <a href="#">near UM Malang</a>
          </li>
          <li>
            <a href="#">near UNEJ Jember</a>
          </li>
        </ul>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col text-center">
        <img src="{{asset('asset/img/tourism.png')}}" alt="attraction">
        <h3 class="display-4">
          <b>Tourist Attraction</b>
        </h3>
        <h4>Find an Attraction</h4>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JAKARTA</h6>
          </li>
          <li>
            <a href="#">near Binus Kemanggisan</a>
          </li>
          <li>
            <a href="#">near Binus Alam Sutra</a>
          </li>
          <li>
            <a href="#">near STAN</a>
          </li>
          <li>
            <a href="#">near Trisakti</a>
          </li>
          <li>
            <a href="#">near UIN Jakarta</a>
          </li>
          <li>
            <a href="#">near UNJ</a>
          </li>
          <li>
            <a href="#">near UNTAR</a>
          </li>
          <li>
            <a href="#">near UPH</a>
          </li>
          <li>
            <a href="#">near UI Depok</a>
          </li>
          <li>
            <a href="#">near Gunadarma</a>
          </li>
          <li>
            <a href="#">near Kelapa Dua</a>
          </li>
        </ul>
      </div>

      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">BANDUNG</h6>
          </li>
          <li>
            <a href="#">near ITB</a>
          </li>
          <li>
            <a href="#">near MARANATHA</a>
          </li>
          <li>
            <a href="#">near STT Telokom</a>
          </li>
          <li>
            <a href="#">near UNIKOM</a>
          </li>
          <li>
            <a href="#">near UNISABA</a>
          </li>
          <li>
            <a href="#">near UNPAD DipatiukurUNJ</a>
          </li>
          <li>
            <a href="#">near UNPAR</a>
          </li>
          <li>
            <a href="#">near UNPAD Jatinangor</a>
          </li>
          <li>
            <a href="#">near UPI</a>
          </li>
          <li>
            <a href="#">near UNJANI</a>
          </li>
          <li>
            <a href="#">near ITENAS</a>
          </li>
          <li>
            <a href="#">near WIDYATAMA</a>
          </li>
          <li>
            <a href="#">near UNISBA</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">JOGJA</h6>
          </li>
          <li>
            <a href="#">near UGM</a>
          </li>
          <li>
            <a href="#">near UMY</a>
          </li>
          <li>
            <a href="#">near Atmajaya Jogja</a>
          </li>
          <li>
            <a href="#">near UAD</a>
          </li>
          <li>
            <a href="#">near UPN Jogja</a>
          </li>
          <li>
            <a href="#">near UNY</a>
          </li>
          <li>
            <a href="#">near UIN Sunan Kali Jaga</a>
          </li>
          <li>
            <a href="#">near Stie YKPN</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">SURABAYA</h6>
          </li>
          <li>
            <a href="#">near ITS</a>
          </li>
          <li>
            <a href="#">near UBAYA</a>
          </li>
          <li>
            <a href="#">near UNAIR</a>
          </li>
          <li>
            <a href="#">near UNESA</a>
          </li>
          <li>
            <a href="#">near UPN Surabaya</a>
          </li>
          <li>
            <a href="#">near UN Sunan Ampel Surabaya</a>
          </li>
          <li>
            <a href="#">near UWM</a>
          </li>
          <li>
            <a href="#">near UK Petra</a>
          </li>
        </ul>
      </div>
      <div class="col">
        <ul>
          <li>
            <h6 class="bord-bottom">KOTA LAIN</h6>
          </li>
          <li>
            <a href="#">near IPB Bogor</a>
          </li>
          <li>
            <a href="#">near UNNES Semarang</a>
          </li>
          <li>
            <a href="#">near UDINUS Semarang</a>
          </li>
          <li>
            <a href="#">near UB Malang</a>
          </li>
          <li>
            <a href="#">near UMM Malang</a>
          </li>
          <li>
            <a href="#">near UIN Malang</a>
          </li>
          <li>
            <a href="#">near UM Malang</a>
          </li>
          <li>
            <a href="#">near UNEJ Jember</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
   <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="{{asset('js/jquery-3.2.1.slim.min.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>