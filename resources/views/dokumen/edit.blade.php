@extends('app-layouts.admin.index')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Data</h1>
      </div>
      <div class="section-body">
        <h2 class="section-title">Form Input File Posyandu</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
                <form action="/dashboard/dokumen/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="card-header">
                  <h4>Masukkan File Posyandu Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label for="deskripsi" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama File</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" placeholder="Nama File" value="{{ $data->nama}}">
                      </div>
                      @error('nama')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                      @enderror
                    </div>
                    <div class="form-group row mb-4">
                        <label for="deskripsi" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Deskripsi</label>
                        <div class="col-sm-12 col-md-7">
                            <input type="text" class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" placeholder="deskripsi File" value="{{ $data->deskripsi}}">
                          </div>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group row mb-4">
                        <label for="file" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Masukkan File</label>
                        <input class="form-control" type="hidden" name="oldfile" value="{{ $data->file }}">
                        <div class="col-sm-12 col-md-7">
                          <input type="file" class="form-control name="oldFile"  @error('file') is-invalid @enderror" name="file" placeholder="file" value="{{ $data->file }}">
                        </div>
                      @error('file')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                      @enderror
                    </div>
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
