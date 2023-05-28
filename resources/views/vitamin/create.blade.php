{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Tambah Vitamin</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/vitamin" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="jenis_vitamin">Jenis vitamin</label>
                                        <input type="text" class="form-control @error('jenis_vitamin') is-invalid @enderror"" name="jenis_vitamin" placeholder="Jenis vitamin" value="{{ old('jenis_vitamin') }}">
                                        @error('jenis_vitamin')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" value="{{ old('keterangan') }}">
                                        @error('keterangan')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="maksimal_umur_pengguna">Maksimal Umur</label>
                                        <input type="text" class="form-control @error('maksimal_umur_pengguna') is-invalid @enderror" name="maksimal_umur_pengguna" placeholder="maksimal_umur_pengguna" value="{{ old('maksimal_umur_pengguna') }}">
                                        @error('maksimal_umur_pengguna')
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
        <h1>Tambah Data</h1>
      </div>
      <div class="section-body">
        <h2 class="section-title">Form Input Data Vitamin</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="/dashboard/vitamin" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Vitamin Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_vitamin">Jenis vitamin</label>
                        <input type="text" class="form-control @error('jenis_vitamin') is-invalid @enderror"" name="jenis_vitamin" placeholder="Jenis vitamin" value="{{ old('jenis_vitamin') }}">
                        @error('jenis_vitamin')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Keterangan" value="{{ old('keterangan') }}">
                        @error('keterangan')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="maksimal_umur_pengguna">Maksimal Umur</label>
                        <input type="text" class="form-control @error('maksimal_umur_pengguna') is-invalid @enderror" name="maksimal_umur_pengguna" placeholder="maksimal_umur_pengguna" value="{{ old('maksimal_umur_pengguna') }}">
                        @error('maksimal_umur_pengguna')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
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
