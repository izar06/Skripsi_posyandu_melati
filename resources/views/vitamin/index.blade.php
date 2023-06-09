{{-- @extends('app-layouts.admin.index')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="d-sm-flex justify-content-start my-3">
            <a href="/dashboard/vitamin/create" class="btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Vitamin</a>
            <a href="/export-kader" class="btn-sm btn-primary shadow-sm mx-3">
            <i class="fas fa-plus fa-sm text-white-50"></i> Unduh Data</a>
        </div>
        @if(session()->has('success'))
          <div class="alert alert-success col-lg-12" role="alert">
            {{ session('success') }}
          </div>
        @endif
          <div class="card mt-3">
            <div class="card-header">
              <h3 class="card-title">Daftar Jenis Vitamin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Jenis Vitamin</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                  @foreach ($data as $item)
                  <tr>
                    <th>{{ $loop->iteration}}</th>
                    <th>{{ $item->jenis_vitamin }}</th>
                    <th>{{ $item->keterangan }}</th>
                    <td>
                        <a href="/dashboard/vitamin/{{ $item->id }}/edit" class="btn btn-info">
                        <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="/dashboard/vitamin/{{ $item->id }}" method="POST" class="d-inline">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                  @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Jenis Vitamin</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
@endsection

@push('add-style')
    <!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/plugins') }}/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend/plugins') }}/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('backend/plugins') }}/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('add-script')
    <!-- DataTables  & Plugins -->
<script src="{{ asset('backend/plugins') }}/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('backend/plugins') }}/jszip/jszip.min.js"></script>
<script src="{{ asset('backend/plugins') }}/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('backend/plugins') }}/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('backend/plugins') }}/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush --}}

@extends('app-layouts.admin.index')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Data List Vitamin</h1>
      </div>
      @include('includes.admin.alert')
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header d-inline">
              <h4>Data Vitamin</h4>
              <a href="/dashboard/vitamin/create" class=" btn btn-primary mt-3">Tambah Data Vitamin</a>
              <a href="#" class=" btn btn-primary mt-3">Unduh Data</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped" id="table-1">
                  <thead>
                    <tr>
                      <th class="text-center">
                        No
                      </th>
                      <th>Jenis Vitamin</th>
                      <th>Keterangan</th>
                      <th>Maksimal Umur</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                      <th class="text-center">{{ $loop->iteration}}</th>
                      <th>{{ $item->jenis_vitamin }}</th>
                      <th>{{ $item->keterangan }}</th>
                      <th>{{ $item->maksimal_umur_pengguna }}</th>
                      <td>
                          <a href="/dashboard/vitamin/{{ $item->id }}/edit" class="btn btn-info">
                          <i class="fa fa-pencil-alt"></i>
                          </a>
                          <form action="/dashboard/vitamin/{{ $item->id }}" method="POST" class="d-inline">
                          @csrf
                          @method('delete')
                          <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">
                              <i class="fa fa-trash"></i>
                          </button>
                          </form>
                      </td>
                  </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-body">
      </div>
    </section>
  </div>
@endsection
