<?php
 $mahasiswa = [
   ["Daffa Dhiya", "213040006", "Sipil", "daffa@gmail.com"],
   ["Diva Nur Hafifah", "213040001", "PWK", "diva@gmail.com"],
 ];
 ?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<hi>Daftar Mahasiswa</hi>
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
      <li><?= $mhs [0]; ?></li>
      <li><?= $mhs [1]; ?></li>
      <li><?= $mhs [2]; ?></li>
      <li><?= $mhs [3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
