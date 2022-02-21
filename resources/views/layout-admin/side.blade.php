<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image d-flex justify-content-center">
          <img src="{{ asset('image/logo-ypid.png')}}" class="img-circle elevation-2" width="100" alt="User Image" style="width: 50%">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/backend') }}" class="nav-link @yield('dashboard') ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/backend/jadwal-pendaftaran') }}" class="nav-link @yield('jadwal-pendaftaran') ">
              <i class="nav-icon fas fa-id-card"></i>
              <p>
                Jadwal pendaftaran
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/backend/calon-siswa') }}" class="nav-link @yield('calon-siswa') ">
              <i class="nav-icon fas fa-child"></i>
              <p>
                Calon Siswa
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/backend/transaksi') }}" class="nav-link @yield('transaksi') ">
              <i class="nav-icon fas fa-money-bill"></i>
              <p>
                Transaksi Pendaftaran
              </p>
            </a>
          </li>
        {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link @yield('berita') ">
            <i class="fas fa-newspaper"></i>
            <p>
                Berita Kecamatan
            </p>
            </a>
        </li> --}}
          
          {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link @yield('rating') ">
              <i class="nav-icon fas fa-star-half-alt"></i>
              <p>
                Rating
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview menu-open">
            <a href="{{ url('/') }}" class="nav-link">
              <i class="far fa-hand-point-left"></i>
              <p>
                Back To Homepage
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>