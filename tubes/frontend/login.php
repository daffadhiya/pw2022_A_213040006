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
                <button type="button" class="btn">Login</button>
              </li>
            </ul>
          </div>
        </div>
</div>
      </nav>
      <!--akhir navbar-->
      <!--login-->
      <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card border-1 shadow rounded-3 my-5">
          <div class="card-login p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign In</h5>
            <form>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>

              <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" value="" id="rememberPasswordCheck">
                <label class="form-check-label" for="rememberPasswordCheck">
                  Remember password
                </label>
              </div>
              <div class="d-grid">
              <a href="logout/logout.php"> <button type="button" class="btn btn-register" style="width: 100%;">
                 Sign In
                  </button></a>
              </div>
              <hr class="my-4">
              <div class="d-grid mb-2">
                <button class="btn btn-google btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-google me-2"></i> Sign in with Google
                </button>
              </div>
              <div class="d-grid">
                <button class="btn btn-facebook btn-login text-uppercase fw-bold" type="submit">
                  <i class="fab fa-facebook-f me-2"></i> Sign in with Facebook
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
      <!--alhir login-->
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
    </div>
    
        
    </body>
    </html>