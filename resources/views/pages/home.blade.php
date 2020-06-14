<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{url('dis/styles/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('dis/styles/style.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">
  <title>Welcome Evote</title>
</head>
<body>

  <!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <h3>eVote</h3>
      <form action="#" method="post" class="ml-auto">
        @csrf
        <button class="btn btn-login btn-navbar-right" type="submit">
          Login
        </button>
      </form>
    </nav>
  </div>

  <!-- Header -->
  <header class="text-center">
    <div class="row">
      <div class="col heading-text">
        <img src="{{url('dis/images/logo.png')}}" alt="" style="width: 100px;">
        <h1 class="mt-4">Sistem Pemilihan Ketua BEM <br> Berbasis Web</h1>
        <div class="rule-text mt-3">
          <h5>Syarat & Ketentuan :</h5>
          <p>1. Pemilih merupakan mahasiswa aktiv Univ ABC</p>
          <p>2. Pemilih hanya bisa memilih satu kandidat</p>
          <p>3. Data pemilih dijamin kerahasiaannya</p>
        </div>
      </div>
    </div>
  </header>

  <!-- Candidate List -->
  <section class="section-canditate-list mt-5">
    <div class="container">
      <div class="row justify-content-center mx-auto">
        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
          <div class="card" style="width: auto;">
            <h3>01</h3>
            <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ni Luh Susianti</h5>
              <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
              <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
              <a href="#" class="btn btn-primary mt-2"  style="width: 100%;">Vote</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
          <div class="card d-flex flex-column" style="width: auto;">
          <h3>02</h3>
            <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ni Luh Susianti</h5>
              <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
              <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
              <a href="#" class="btn btn-primary mt-2"  style="width: 100%;">Vote</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
          <div class="card d-flex flex-column" style="width: auto;">
          <h3>03</h3>
            <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ni Luh Susianti</h5>
              <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
              <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
              <a href="#" class="btn btn-primary mt-2"  style="width: 100%;">Vote</a>
            </div>
          </div>
        </div>

        <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
          <div class="card d-flex flex-column" style="width: auto;">
          <h3>04</h3>
            <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Ni Luh Susianti</h5>
              <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
              <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
              <a href="#" class="btn btn-primary mt-2"  style="width: 100%;">Vote</a>
            </div>
          </div>
        </div>


      </div>
    </div>
  </section>

  <!-- Countdown -->
  <div class="section-timer text-center mt-5 mb-5">
    <h5>Vote Berakhir Dalam : </h5>
    <h2 id="countdown"></h2>
  </div>

  <!-- Scripts -->
  <script src="{{ url('dis/scripts/jQuery3.5.1.js') }}"></script>
  <script>
    src="{{url('dis/scripts/bootstrap.min.js')}}";
  </script>
  <script src="{{url('dis/scripts/main.js')}}"></script>
</body>
</html>