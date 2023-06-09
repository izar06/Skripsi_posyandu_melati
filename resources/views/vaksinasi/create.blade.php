{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Tambah Vaksinasi</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/vaksinasi" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="jenis_vaksin">Jenis Vaksinasi</label>
                                        <input type="text" class="form-control @error('jenis_vaksin') is-invalid @enderror"" name="jenis_vaksin" placeholder="Jenis vaksin" value="{{ old('jenis_vaksin') }}">
                                        @error('jenis_vaksin')
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
        <h2 class="section-title">Form Input Data Vaksinasi</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
              <form action="/dashboard/vaksinasi" method="POST">
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Vaksinasi Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="jenis_vaksin">Jenis Vaksinasi</label>
                        <input type="text" class="form-control @error('jenis_vaksin') is-invalid @enderror" name="jenis_vaksin" placeholder="Jenis vaksin" value="{{ old('jenis_vaksin') }}">
                        @error('jenis_vaksin')
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
