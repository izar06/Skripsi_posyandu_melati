{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Ubah Imunisasi</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/imunisasi/{{ $data->id }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group">
                                        <label for="jenis_imunisasi">Jenis Imunisasi</label>
                                        <input type="text" class="form-control @error('jenis_imunisasi') is-invalid @enderror"" name="jenis_imunisasi" placeholder="jenis_imunisasi" value="{{ $data->jenis_imunisasi }}">
                                        @error('jenis_imunisasi')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="keterangan">Keterangan</label>
                                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"" name="keterangan" placeholder="keterangan" value="{{ $data->keterangan }}">
                                        @error('keterangan')
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
        <h1>Update Data</h1>
      </div>
      <div class="section-body">
        <h2 class="section-title">Form Input Data Imunisasi</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="/dashboard/imunisasi/{{ $data->id }}" method="POST">
                @method('PUT')
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Imunisasi Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_imunisasi">Jenis Imunisasi</label>
                        <input type="text" class="form-control @error('jenis_imunisasi') is-invalid @enderror"" name="jenis_imunisasi" placeholder="jenis_imunisasi" value="{{ $data->jenis_imunisasi }}">
                        @error('jenis_imunisasi')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control @error('keterangan') is-invalid @enderror"" name="keterangan" placeholder="keterangan" value="{{ $data->keterangan }}">
                        @error('keterangan')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="maksimal_umur_pengguna">Maksimal Umur</label>
                        <input type="text" class="form-control @error('maksimal_umur_pengguna') is-invalid @enderror"" name="maksimal_umur_pengguna" placeholder="maksimal_umur_pengguna" value="{{ $data->maksimal_umur_pengguna }}">
                        @error('maksimal_umur_pengguna')
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
