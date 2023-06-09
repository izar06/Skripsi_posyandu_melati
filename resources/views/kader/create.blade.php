{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Tambah Kader</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/kader" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="nama">Nama</label>
                                        <input type="text" class="form-control @error('nama') is-invalid @enderror"" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                                        @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="alamat">Alamat</label>
                                        <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror"">{{ old('alamat') }}</textarea>
                                        @error('alamat')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="umur">Umur</label>
                                        <input type="text" class="form-control @error('umur') is-invalid @enderror"" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                                        @error('umur')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="jabatan">Jabatan</label>
                                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">
                                        @error('jabatan')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="text" class="form-control @error('status') is-invalid @enderror"" name="status" placeholder="status" value="{{ old('status') }}">
                                        @error('status')
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
        <h2 class="section-title">Form Input Data Kader</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="/dashboard/kader" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Kader Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"" name="nama" placeholder="Nama" value="{{ old('nama') }}">
                        @error('nama')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="20" rows="5" class="form-control @error('alamat') is-invalid @enderror"">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control @error('umur') is-invalid @enderror"" name="umur" placeholder="Umur" value="{{ old('umur') }}">
                        @error('umur')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" name="jabatan" placeholder="Jabatan" value="{{ old('jabatan') }}">
                        @error('jabatan')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control @error('status') is-invalid @enderror"" name="status" placeholder="status" value="{{ old('status') }}">
                        @error('status')
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
