{{-- @extends('app-layouts.admin.index')

@section('content')
<iframe height="500px"  width="100%" src="/assets/{{$data->file}}"></iframe>
@endsection --}}

@extends('app-layouts.admin.index')

@section('content')
<div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>View File</h1>
      </div>
      <div class="section-body">
        <iframe height="500px"  width="100%" src="{{ asset('storage/'. $data->file) }}"></iframe>
      </div>
    </section>
  </div>
@endsection
