  <!-- Navbar -->
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <h3>eVote</h3>
      <!-- Topbar Navbar -->
      <ul class="navbar-nav ml-auto">
      <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        @auth
        <h5 class="mr-2 d-none d-lg-inline text-gray-600">{{Auth::user()->name}}</h5>     
        @endauth
        </a>
        <!-- Dropdown - User Information -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{Auth::logout()}}" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
            Logout
          </a>
        </div>
      </li>
    </nav>
  </div>