{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('backend/dist') }}/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('backend/dist') }}/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ auth()->user()->name }}</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
              <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard v1</p>
                </a>
          <li class="nav-item">
            <a href="/dashboard/kader" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Kader
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Ibu Hamil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/balita" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Balita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/checkup" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Checkup Balita
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/imunisasi" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Imunisasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/vitamin" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Vitamin
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/vaksinasi" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Data Vaksinasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/article" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Article
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/dokumentasi" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                Dokumentasi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/dashboard/dokumen" class="nav-link">
              <i class="fa-solid fa-file"></i>
              <p>
                File Laporan Posyandu
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside> --}}

  <div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="/">Posyandu Melati 04</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="index.html">St</a>
      </div>
      <ul class="sidebar-menu">
          <li class="menu-header">Dashboard</li>
          <li><a class="nav-link" href="/dashboard"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
          <li class="menu-header">Data Master</li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i> <span>Data Posyandu</span></a>
            <ul class="dropdown-menu">
              <li><a class="nav-link" href="/dashboard/kader">Data Kader</a></li>
              <li><a class="nav-link" href="/dashboard/balita">Data Balita</a></li>
              <li><a class="nav-link" href="/dashboard/bumil">Data Ibu Hamil</a></li>
              <li><a class="nav-link" href="/dashboard/checkup">Data Checkup</a></li>
              <li><a class="nav-link" href="/dashboard/vitamin">Data Vitamin</a></li>
              <li><a class="nav-link" href="/dashboard/imunisasi">Data Imunisasi</a></li>
            </ul>
          </li>
          <li><a class="nav-link" href="/dashboard/article"><i class="far fa-square"></i> <span>Informasi Kegiatan</span></a></li>
          <li><a href="/dashboard/dokumen" class="nav-link"><i class="far fa-file-alt"></i> <span>File Posyandu</span></a></li>
        </ul>
    </aside>
  </div>
