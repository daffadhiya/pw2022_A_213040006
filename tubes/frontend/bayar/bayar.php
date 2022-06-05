<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hello, world!</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <form action="">
        <div class="row">
          <div class="col">
            <h3 class="title">Pembayaran</h3>

            <div class="inputBox">
              <span>nama:</span>
              <input type="text" placeholder="Daffa Dhiya" />
            </div>
            <div class="inputBox">
              <span>email:</span>
              <input type="email" placeholder="exampel@gmail.com" />
            </div>
            <div class="inputBox">
              <span> alamat :</span>
              <input type="text" placeholder="Alamat " />
            </div>
            <div class="inputBox">
              <span> kota :</span>
              <input type="text" placeholder="Bandung " />
            </div>
            <div class="flex">
              <div class="inputBox">
                <span> kelas :</span>
                <input type="text" placeholder="X XI XII" />
              </div>
              <div class="inputBox">
                <span> kode voucher :</span>
                <input type="text" placeholder="Daffa ganteng" />
              </div>
            </div>
          </div>

          <div class="col">
            <h3 class="title">Payment</h3>
            <div class="inputBox">
              <span>akses bank:</span>
              <img src="card_img.png" alt="" />
            </div>

            <div class="inputBox">
              <span>nama bank :</span>
              <input type="text" placeholder="BCA" />
            </div>

            <div class="inputBox">
              <span>number kartu bank:</span>
              <input type="number" placeholder="1234-5678-1234-5678" />
            </div>
            <div class="inputBox">
              <span> exp bulan :</span>
              <input type="number" placeholder="Oktober " />
            </div>
            <div class="flex">
              <div class="inputBox">
                <span> exp tahun :</span>
                <input type="number]" placeholder="2023" />
              </div>
              <div class="inputBox">
                <span> CVV :</span>
                <input type="number" placeholder="1234" />
              </div>
            </div>
          </div>
        </div>

        <input type="submit" value="Bayar Sekarang" class="submit-btn" />
      </form>
    </div>
  </body>
</html>
