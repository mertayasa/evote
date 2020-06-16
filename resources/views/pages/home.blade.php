@extends('layouts.app')

@section('content')
  <!-- Header -->
  <header class="text-center">
    <div class="row">
      <div class="col heading-text">
        <img src="{{url('dis/images/logo.png')}}" alt="" style="width: 100px;">
        <h1 class="mt-4">Sistem Pemilihan Ketua BEM <br> Berbasis Web</h1>

        <div class="divider mt-3 mb-2"></div>

        <!-- Countdown -->
        <div class="section-timer text-center mt-3">
        <h5 id="voteEndText">Vote Berakhir Dalam : </h5>
        <h2 id="countdown"></h2>
      </div>
    </div>
  </header>

  <main>
    <!-- Candidate List -->
  <section class="section-canditate-list">
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
                <a href="#" class="btn btn-primary mt-2"  style="width: 100%;" id="btnVote">Vote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
    
@endsection