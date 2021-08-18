@extends('FrontEnd.master')
@section('title')
Home
@endsection
@section('content')



<header class="content mb-5 pb-5" id="home">
  <div class="view">
    <div class="card p-3">
      <div class="container">
        <div class="row align-items-center">
          <!-- Column 1 -->
          <div class="col-md-6">
            <h1 class="mb-4 text-white">Selamat Datang
              <br/>
              <span class="text-warning">Shelterville Indonesia</span><br>Malang
            </h1>

            <p class="mb-4 pb-2 text-white">
              Sebuah kafe yang memberikan nuansa tempo doeloe & suasana yang cozy
              Kami menyajikan beragam kuliner dengan cita rasa yang membuat anda kembali ke masa lalu yang indah
            </p>
          </div>
          <!-- Column 1 -->

          <!-- Column 2 -->
          <div class="col-md-6 d-none d-sm-none d-md-block">
            <img src="{{ asset('/FrontEndSourceFile') }}/img/tours_pic.png" alt="tours pics" class="img-fluid">
          </div>
          <!-- Column 2 -->

        </div>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">

    <!-- 1 Column -->
      <div class="col-md-6 col-xl-4 mb-4">
                <div class="card text-center hov">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="far fa-hand-point-up fa-4x text-white"></i>
                    </p>
                    <h5 class="font-weight-normal my-4 py-2 text-white">
                      PILIH
                    </h5>
                    <p class="text-white mb-4">
                      Pilih pesanan yang anda inginkan
                    </p>
                  </div>
                </div>
              </div>
    <!-- 1 Column -->

          <!-- Column 2 -->
             <div class="col-md-6 col-xl-4 mb-4">
                <div class="card text-center hov">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-wallet fa-4x text-white"></i></i>
                    </p>

                    <h5 class="font-weight-normal my-4 py-2 text-white">
                      BAYAR
                    </h5>
                    <p class="text-white mb-4">
                      Bayar pesanan yang telah dipilih
                    </p>
                  </div>
                </div>
              </div>
          <!-- Column 2 -->

      <!-- Column 3 -->
             <div class="col-md-6 col-xl-4 mb-4">
                <div class="card text-center hov">
                  <div class="card-body">
                    <p class="mt-4 pt-2">
                      <i class="fas fa-utensils fa-4x text-white"></i></i>
                    </p>

                    <h5 class="font-weight-normal my-4 py-2 text-white">
                      NIKMATI
                    </h5>
                    <p class="text-white mb-4">
                      Anda bisa menikmati pesanan diinginkan
                    </p>
                  </div>
                </div>
              </div>
          <!-- Column 3 -->
  </div>
</div>

  <!-- Contact US -->
  <section id="about" class="pt-5">
    <div class="card p-5 m-4">
      <h3 class="font-weight-bold text-center text-white pb-2">TENTANG KAMI</h3>
      <p class="text-white text-center pt-2 mb-5">KAMI ADALAH SEBUAH KAFE DI MALANG YANG MENYAJIKAN MAKANAN DAN MINUMAN ALA INDONESIA TEMPO DOELOE</p>
    </div>

    <div class="container">
      <div class="text-light mb-5 center">
        <div class="row">


          <!-- 2 Column -->
          <div class="col-md-7">
            <div class="map-container-section mb-4 align: center" style="height: 400px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.4535260110574!2d112.61926555043401!3d-7.9519954942442626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629ad81ac25d9%3A0x42e2980c168e20!2sShelterville%20Indonesia%20Co!5e0!3m2!1sid!2sid!4v1626110581512!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>

            <!-- Icons -->
            <div class="row text-center">
              <!-- 1 Column -->
              <div class="col-md-6">
                <div class="card mb-3 py-2 text-white hov">
                  <a class="btn-floating text-success">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                  </a>
                  <p>Jl. Bunga Kumis Kucing No.15B, Jatimulyo, Kec. Lowokwaru</p>
                  <p class="mb-md-0">Kota Malang</p>
                </div>
              </div>
              <!-- 1 Column -->

               <!-- 2 Column -->
              <div class="col-md-6">
                <div class="card mb-3 py-2 text-white hov">
                  <a class="btn-floating text-success">
                    <i class="fas fa-2x fa-map-marker-alt"></i>
                  </a>
                  <p>JAM BUKA</p>
                  <p class="mb-md-0">16.00 - 22.00 (Selasa Libur)</p>
                </div>
              </div>
              <!-- 1 Column -->

            </div>
          </div>
          <!-- 2 Column -->
        </div>
      </div>
    </div>
  </section>
  <!-- Contact US -->

@endsection
