@extends('layouts.admin')

@section('candidate-active', 'active')

@section('content')
  <div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Candidate</h1>
      <a href="{{ route('candidate.create') }}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50 pr-2"></i>New Candidate</a>
    </div>

    {{-- Candidate List --}}
    <main>
      <section class="section-canditate-list">
        <div class="container">
          <div class="row justify-content-center mx-auto">
            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
              <div class="card" style="width: auto;">
                <h3 class="text-center">01</h3>
                <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ni Luh Susianti</h5>
                  <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
                  <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
              <div class="card d-flex flex-column" style="width: auto;">
              <h3 class="text-center">02</h3>
                <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ni Luh Susianti</h5>
                  <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
                  <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
              <div class="card d-flex flex-column" style="width: auto;">
              <h3 class="text-center">03</h3>
                <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ni Luh Susianti</h5>
                  <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
                  <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
                </div>
              </div>
            </div>
    
            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
              <div class="card d-flex flex-column" style="width: auto;">
              <h3 class="text-center">04</h3>
                <img class="card-img-top" src="{{url('dis/images/avatar.jpg')}}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Ni Luh Susianti</h5>
                  <p class="card-text">"Kerja Cerdas, Kerja Cepat, Kerja Keras"</p>
                  <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
@endsection