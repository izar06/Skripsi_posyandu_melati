{{-- @extends('app-layouts.admin.index')

@section('content')
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Selamat Datang {{ auth()->user()->name }}</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $kader }}</h3>

          <p>Total Kader</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-user-nurse"></i>
        </div>
        <a href="/dashboard/kader" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $balita }}</h3>

          <p>Total Balita</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-baby"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $vitamin }}</h3>

          <p>Total Vitamin</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-syringe"></i>
        </div>
        <a href="/dashboard/vitamin" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-lg-3 col-6">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $imunisasi }}</h3>

          <p>Total Imunisasi</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-syringe"></i>
        </div>
        <a href="/dashboard/imunisasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-4">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $vaksinasi }}</h3>

          <p>Total Vaksinasi</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-syringe"></i>
        </div>
        <a href="/dashboard/vaksinasi" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <div class="col-4">
      <!-- small box -->
      <div class="small-box bg-primary">
        <div class="inner">
          <h3>{{ $checkup }}</h3>

          <p>Total Cehckup</p>
        </div>
        <div class="icon">
          <i class="fa-solid fa-notes-medical"></i>
        </div>
        <a href="/dashboard/checkup" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
      </div>
    </div>
  </div>
</div>
@endsection
 --}}

 @extends('app-layouts.admin.index')

 @section('content')
 <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Dashboard</h1>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Kader</h4>
              </div>
              <div class="card-body">
                {{ $kader }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Balita</h4>
              </div>
              <div class="card-body">
                {{ $balita }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Ibu Hamil</h4>
              </div>
              <div class="card-body">
                {{ $bumil }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
              <i class="far fa-user"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Total Checkup Balita</h4>
              </div>
              <div class="card-body">
                {{ $checkup }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
              <i class="far fa-newspaper"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Kegiatan Posyandu</h4>
              </div>
              <div class="card-body">
                {{ $article }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
              <i class="far fa-file"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>File Posyandu</h4>
              </div>
              <div class="card-body">
                {{ $dokumen }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fa-sharp fa-solid fa-syringe fa-2x"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Vitamin</h4>
              </div>
              <div class="card-body">
                {{ $vitamin }}
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
          <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fa-sharp fa-solid fa-syringe fa-2x"></i>
            </div>
            <div class="card-wrap">
              <div class="card-header">
                <h4>Imunisasi</h4>
              </div>
              <div class="card-body">
                {{ $imunisasi }}
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 @endsection
