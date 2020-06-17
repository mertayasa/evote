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
          @forelse ($items as $item)
            <div class="col-sm-6 col-md-4 col-lg-3 mt-3">
              <div class="card" style="width: auto;">
                <h3>01</h3>
                <img class="card-img-top" src="{{ Storage::url($item->image) }}" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->name }}</h5>
                  <p class="card-text">"{{ $item->motto }}"</p>
                  <a href="#" class="btn btn-warning" style="width: 100%;">Visi & Misi</a>
                  @auth
                  <form action="{{ route('voting.store') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $item->id }}" name="candidates_id">
                    <input type="hidden" value="{{Auth::user()->id}}" name="users_id">
                    <button type="submit" class="btn btn-primary mt-2" id="btnVotes" style="width: 100%;">Vote</button>
                  </form>
                  @endauth
                </div>
              </div>
            </div>
          @empty
              <h3>No Data</h3>
          @endforelse
        </div>
      </div>
    </section>
  </main>
    
@endsection