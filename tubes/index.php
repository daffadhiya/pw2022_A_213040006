<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="styles/styles.css" />

    <title>Hello, world!</title>
  </head>

  <body>
    <div class="container-fluid">
      <!--navbar-->
      <nav
        class="navbar navbar-expand-lg navbar-light "
        style="background-color: white"
      >
        <div class="container">
          <a class="navbar-brand" href="#">ITD</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#beranda"
                  >Beranda</a
                >
              </li>
              <li class="nav-item" aria-current="page">
                <a class="nav-link active" href="frontend/kelas.php">Kelas</a>
              </li>
              <li class="nav-item" aria-current="page">
                <a class="nav-link active" href="frontend/membership.php">Membership</a>
              </li>
              <li class="nav-item">
                <a class="btn" href="frontend/login.php">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!--akhir navbar-->

      <!--isi-->
      <section id="kelas">
        <div class="container">
          <div class="row text-center mb-3"></div>
          <div class="row fs-5">
            <div class="col-md-6">
              <h1 class="heading">
                SOLUSI <br />
                PENDIDIKAN MAJU <br />
                DENGAN BELAJAR
              </h1>
              <p class="sub-title">
                Pendidikan merupakan hal <br />
                yang terpenting dalam <br />
                kehidupan.
              </p>
              <button type="button" class="btn btn-register">
                Daftar Segera
              </button>
            </div>
            <div class="col-md-6">
              <img
                src="./img/belajar.jpg"
                class="img d-none d-lg-block d-md-none"
                alt=""
              />
            </div>
            <div class="penjelasan text-center" style="margin-top: 50px;">
              <p>Kenapa Harus Langganan Di ITD</p>
            </div>
          </div>
        </div>
      </section>

      <!--akhir isi-->
      <!--promo-->
      <section id="project">
        <div class="container">
          <div class="row text-center">
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="img/jonathan-kemper-zSCHyhiRSeQ-unsplash.jpg" class="card-img-top" alt="" />
                  <div class="card-body">
                    <h5 class="card-text">
                      Terbukti membantu nilai rapot naik
                  </h5>
                  <p>
                   80% nilai pelajar SMA yang berlangganan di ITD nilai rapot nya dalam 3 bulan.
                  </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="img/estee-janssens-8fQ-k_Wd9yU-unsplash.jpg" class="card-img-top" alt="" />
                  <div class="card-body">
                    <h5 class="card-text">
                      Membantu siswa SMA lolos ke PTN
                  </h5>
                  <p>
                    50% pelajar SMA pengguna Ruangguru berhasil diterima di PTN, jalur SBMPTN ataupun seleksi mandiri.
                  </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card">
                  <img src="img/students-1807505_1920.jpg" class="card-img-top" alt="" />
                  <div class="card-body">
                    <h5 class="card-text">
                      Konten belajar kreatif dan interaktif
                  </h5>
                  <p>
                    Dilengkapi video belajar beranimasi, kuis, dan rangkuman sesuai kurikulum nasional.
                  </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <!--akhir promo-->
      <!--footer-->
      <footer class="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-3 footer-col">
              <h4>Produk ITD</h4>
              <ul>
                <li><a href="#">Kelas Freemium</a></li>
                <li><a href="#">Kelas Premium</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-col">
              <h4>Produk Lainya</h4>
              <ul>
                <li><a href="#">Daffa Akademy</a></li>
                <li><a href="#">Akademy Inggris</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-col">
              <h4>Bantuan & Panduan</h4>
              <ul>
                <li><a href="#">Company Credentials</a></li>
                <li><a href="#">Beasiswa ITD</a></li>
                <li><a href="#">Layanan Pengaduan</a></li>
                <li><a href="#">Syarat & Ketentuan</a></li>
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Tentang Kami</a></li>
              </ul>
            </div>
            <div class="col-md-3 footer-col">
              <h4>Hubungi Kami</h4>
              <ul>
                <li><a href="#">@itd.company</a></li>
                <li><a href="#">+62 0812345678</a></li>
                <li><a href="#">ITD@gmail.com</a></li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      <!--footer-->
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
