@extends('app-layouts.index')

@section('content')
<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 mt-5">
          <img src="{{ asset('image') }}/kader.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 pt-4 pt-lg-0 mt-4 justify-content-">
          <h3>Tentang Posyandu Melati 04</h3>
          <p>
            Posyandu (Pos Pelayanan Terpadu) merupakan upaya pemerintah untuk memudahkan masyarakat Indonesia dalam memperoleh pelayanan kesehatan ibu dan anak. Tujuan utama posyandu adalah mencegah peningkatan angka kematian ibu dan bayi saat kehamilan, persalinan, atau setelahnya melalui pemberdayaan masyarakat. <br>
            Posyandu Melati 04 merupakan posyandu yang berada di KP. Cilangkap RT 004/004, Kelurahan Cilangkap, Kecamatan Tapos, Kota Depok. Posyandu Melati 04 sendiri didirikan pada tahun 2006 dan sampai saat ini posyandu melati 04 masih aktif dalam memberikan pelayanan kepada masyarakat RW 04.
          </p>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Pelayanan</h2>
        <p>Kegiatan posyandu terdiri dari kegiatan utama dan kegiatan pengembangan</p>
      </div>

      <div class="row">
        <div class="col-md-6">
          <div class="icon-box">
            <i class="bi bi-briefcase"></i>
            <h4><a href="#">Penimbangan Balita</a></h4>
            <p>Mengadakan penimbangan balita secara rutin setiap satu bulan sekali</p>
          </div>
        </div>
        <div class="col-md-6 mt-4 mt-lg-0">
          <div class="icon-box">
            <i class="bi bi-card-checklist"></i>
            <h4><a href="#">Imunisasi anak</a></h4>
            <p>imunisasi untuk anak-anak bertujuan untuk mencegah terjadinya penyakit infeksi yang berbahaya.</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-bar-chart"></i>
            <h4><a href="#">Pemberian Vitamin A</a></h4>
            <p>Memberikan Vitamin A untuk balita setiap satu tahun dua kali</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-binoculars"></i>
            <h4><a href="#">Pelayanan pemeriksaan untuk ibu hamil</a></h4>
            <p>Kegiatan yang dilakukan posyandu untuk ibu hamil yaitu mencakup pemeriksaan kehamilan dan pemantauan gizi.</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-brightness-high"></i>
            <h4><a href="#">Penyuluhan tentang kesehatan, gizi yang baik, dll</a></h4>
            <p>Memberikan informasi terkait kesehatan, gizi yang baik, dll ke warga RW 04</p>
          </div>
        </div>
        <div class="col-md-6 mt-4">
          <div class="icon-box">
            <i class="bi bi-calendar4-week"></i>
            <h4><a href="#">Memberikan PMT kepada balita</a></h4>
            <p>Pemberian makanan tambahan kepada balita berupa bubur kacang ijo, ager, bubur sumsu, dll</p>
          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Testimonials Section ======= -->
  <section id="kegiatan" class="testimonials section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Kegiatan</h2>
        <p>Info Seputar Kegiatan Posyandu Melati 04</p>
      </div>
      <div class="text-center text-md-start pb-5 pb-md-0 wow fadeInUp" data-wow-delay="0.1s"
      style="max-width: 500px;">
      </div>
      <div class="owl-carousel project-carousel wow fadeInUp" data-wow-delay="0.1s">
        @foreach ($data as $item)
        <div class="project-item mb-5">
            <div class="position-relative">
                @if ($item->image)
                    <img class="img-fluid" src="{{ asset('storage/'. $item->image) }}" alt="" style="max-height: 300px; overflow:hidden;">
                @endif
            </div>
            <div class="px-4 py-4">
                <div class="article-title">
                    <h2><a>{{ $item->title }}</a></h2>
                </div>
                <span>{{ $item->body }}</span>
            </div>
            <div class="px-4">
                <p>
                    <small class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</small>
                </p>
            </div>
            <div class="px-4 pb-4 text-right">
                <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
        @endforeach
    </div>
      {{-- <div class="row">
        @foreach ($data as $item)
        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
          <article class="article article-style-b">
            <div class="article-header">
                @if ($item->image)
                    <div class="article-image" data-background="{{ asset('storage/'. $item->image) }}">
                @endif
              </div>
            </div>
            <div class="article-details">
              <div class="article-title">
                <h2><a href="#">{{ $item->title }}</a></h2>
              </div>
              <p>{{$item->body}}</p>
              <p>
                <small class="text-muted">{{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}</small>
              </p>
              <div class="article-cta">
                <a href="#">Read More <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
          </article>
        </div>
        @endforeach
      </div> --}}
    </div>
  </section>

  <!-- ======= Contact Section ======= -->
  <section id="lokasi" class="contact section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Lokasi</h2>
        <p>Lokasi Posyandu Melati 04</p>
      </div>

        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.79137365949734!2d106.85884798876943!3d-6.437441095979054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ea5c1fbcb78b%3A0x5a1eeae02b3a6b7f!2sAula%20Melati!5e0!3m2!1sid!2sid!4v1673397024926!5m2!1sid!2sid" allowfullscreen="" frameborder="0"></iframe>
        </div><!-- End Google Maps -->

    </div>
  </section><!-- End Contact Section -->

</main>
@endsection
