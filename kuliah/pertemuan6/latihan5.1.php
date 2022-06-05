<!doctype html>
<?php

$mahasiswa = [
    [
        "nama" => "Moch. Daffa Dhiya ULhaq", 
        "nrp" => "213040006",
        "email" => "daffa@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "pro.jpg"

    ],
    [
        "nama" => "Nabila Putri Aisyah Insirawati", 
        "nrp" => "213040144",
        "email" => "nabila@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "bali.jpg"
    ],
    [
        "nama" => "Moch. Rashid", 
        "nrp" => "213040174",
        "email" => "arab@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "rashid.jpeg"
    ],
    [
        "nama" => "Nicholas Saputra", 
        "nrp" => "213040134",
        "email" => "aadc@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "nicholas_saputra.jpg"
    ],
    [
      "nama" => "Mark Klok", 
        "nrp" => "213040135",
        "email" => "a3c@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "klok.jpg"
    ],
    [
      "nama" => "A. Griezmann", 
        "nrp" => "213040124",
        "email" => "aaww@gmail.com",
        "jurusan" => "Teknik Sipil",
        "gambar" => "grizi.jpg"
    ],
    [
      "nama" => "Ferran Torres", 
        "nrp" => "213040130",
        "email" => "barca@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "ferran.jpg"
    ],
    [
      "nama" => "Vincent Rompies", 
        "nrp" => "213040234",
        "email" => "abc@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "vincent.jpg"
    ],
    [
      "nama" => "Dedi Mahendra Desta", 
        "nrp" => "213040139",
        "email" => "vindest@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "desta.jpg"
    ],
    [
      "nama" => "Andre Taulany", 
        "nrp" => "213040114",
        "email" => "Prediksi@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "andre.jpg"
    ]
]; 
$no = 1;
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Daftar Mahasiswa</title>
  </head>
  <body>
    <div class="container">
        <h1>Daftar Mahasiswa</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Nama</th>
      <th scope="col">NPM</th>
      <th scope="col">Email</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php  foreach ($mahasiswa as $mhs) { ?>
    <tr class = "align-middle">
      <th scope="row"><?php echo $no++?></th>
      <td>
          <img src="img/<?php echo $mhs["gambar"]?> " width="120" class = "rounded-circle">
      </td>
      <td><?php echo $mhs["nama"]?></td>
      <td> <?php echo $mhs["nrp"]?></td>
      <td><?php echo $mhs["email"]?></td>
      <td><?php echo $mhs["jurusan"]?></td>
      <td>
          <a href="" class ="btn badge bg-danger">edit</a>
          <a href="" class ="btn badge bg-primary">delete</a>
      </td>
      
      
    </tr>

    <?php } ?>
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>