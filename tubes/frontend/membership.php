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
    <link rel="stylesheet" href="../styles/styles.css" />

    <title>Hello, world!</title>
  </head>

  <body>
    <div class="container-fluid set">
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
               <a class="nav-link active" aria-current="page" href="../index.php"
                 >Beranda</a
               >
             </li>
             <li class="nav-item" aria-current="page">
               <a class="nav-link" href="kelas.php">Kelas</a>
             </li>
             <li class="nav-item" aria-current="page">
               <a class="nav-link" href="membership.php">Membership</a>
             </li>
             <li class="nav-item">
              <a class="btn" href="login.php">Login</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>
      <!--akhir navbar-->
      <!--membership-->
      <section id="project">
        <div class="container">
          <div class="row text-center">
            <div class="row">
              <div class="col-md-4 mb-3">
                <div class="card-paket">
                  <img src="../img/thai-an-yTX-hfxbO6A-unsplash.jpg" class="card-img-top" alt="" />
                  <div class="card-body-mem">
                    <h5 class="card-text">
                      Sukses
                  </h5>
                  <p>
                   1 tahun pembelajaran. <br>
                    Interaksi dengan guru.  <br>
                    60 - 120 menit.  <br>
                    10-15 siswa per kelas.  <br>

                    
                  </p>
                 <a href="bayar/bayar.php"> <button type="button" class="btn btn-register">
                    Rp.550.000
                  </button></a>
                  
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card-paket">
                  <img src="../img/diggity-marketing-s8HyIEe7lF0-unsplash.jpg" class="card-img-top" alt="" />
                  <div class="card-body-mem">
                    <h5 class="card-text">
                      Juara
                  </h5>
                  <p>
                   6 bulan pembelajaran. <br>
                    Interaksi dengan guru.  <br>
                    45 - 60 menit.  <br>
                    10–15 siswa per kelas.  <br>

                    
                  </p>
                  <a href="bayar/bayar.php"> <button type="button" class="btn btn-register">
                    Rp.350.000
                  </button></a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="card-paket">
                  <img src="../img/alex-kotliarskyi-QBpZGqEMsKg-unsplash.jpg" class="card-img-top" alt="" />
                  <div class="card-body-mem">
                    <h5 class="card-text">
                      Standar
                  </h5>
                  <p>
                    3 bulan pembelajaran.  <br>
                    Interaksi dengan guru.  <br>
                    30 - 45  menit. <br>
                    10–15 siswa per kelas.  <br>


                  </p>
                  <a href="bayar/bayar.php"> <button type="button" class="btn btn-register">
                    Rp.250.000
                  </button></a>
                  </div>
                </div>
                </div>
              </div>
            </div>
              <!--akhir membership-->
    </div>
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
  
  </body>
</html>
