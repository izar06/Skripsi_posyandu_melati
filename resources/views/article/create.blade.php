{{-- @extends('app-layouts.admin.index')

@section('content')
    <div class="content-wrapper">
        <section>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card my-4">
                        <div class="card-header">
                            <div class="card-title">
                                <h5>Tambah Article</h5>
                            </div>
                        </div>
                        <div class="card-shadow">
                            <div class="card-body">
                                <form action="/dashboard/article" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title">Title</label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror"" name="title" placeholder="Judul" value="{{ old('title') }}">
                                        @error('title')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="body">Body</label>
                                        <textarea name="body" id="body" cols="20" rows="5" class="form-control @error('body') is-invalid @enderror"">{{ old('body') }}</textarea>
                                        @error('body')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="image" value="{{ old('image') }}">
                                        @error('image')
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
        <h2 class="section-title">Form Input Data Kegiatan</h2>

        <div class="row">
          <div class="col-12">
            <div class="card">
                <form action="/dashboard/article" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                  <h4>Masukkan Data Kegiatan Dengan Sesuai</h4>
                </div>
                <div class="card-body">
                    <div class="form-group row mb-4">
                      <label for="title" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Judul</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" placeholder="Judul" value="{{ old('title') }}">
                      </div>
                      @error('title')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                      @enderror
                    </div>
                    <div class="form-group row mb-4">
                      <label for="body" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                      <div class="col-sm-12 col-md-7">
                        <textarea name="body" id="body" class="summernote @error('body') is-invalid @enderror">{{ old('body') }}</textarea>
                      </div>
                      @error('title')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                      @enderror
                    </div>
                    <div class="form-group row mb-4">
                        <label for="image" class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Gambar</label>
                        <div class="col-sm-12 col-md-7">
                          <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" placeholder="image" value="{{ old('image') }}">
                        </div>
                      </div>
                      @error('title')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                      @enderror
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Publish</button>
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

