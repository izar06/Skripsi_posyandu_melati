{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Tambah File</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/dokumen" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"" name="nama" placeholder="Nama File" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="deskripsi">Deskripsi</label>
                                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="file">File</label>
                                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" placeholder="file" value="{{ old('file') }}">
                                        @error('file')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection --}}

@extends('app-layouts.admin.index')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Tambah File</h1>
      </div>
      <div class="section-body">
        <h2 class="section-title">Form Input File Posyandu</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="/dashboard/dokumen" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>Masukkan File Posyandu</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"" name="nama" placeholder="Nama File" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="Deskripsi" value="{{ old('deskripsi') }}">
                        @error('deskripsi')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="file">File</label>
                        <input type="file" class="form-control @error('file') is-invalid @enderror" name="file" placeholder="file" value="{{ old('file') }}">
                        @error('file')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
