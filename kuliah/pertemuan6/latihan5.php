<?php
//array associative
//index nya string
$mahasiswa = [
    [
        "nama" => "Moch. Daffa Dhiya ULhaq", 
        "nrp" => "213040006",
        "email" => "daffa@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Nabila Putri Aisyah Insirawati", 
        "nrp" => "213040144",
        "email" => "nabila@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
    [
        "nama" => "Moch. Rashid", 
        "nrp" => "213040006",
        "email" => "daffa@gmail.com",
        "jurusan" => "Teknik Informatika"
    ],
]; 
//var_dump($mahasiswa[2]["nama"]);
?>
<?php  foreach ($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?php echo $mhs["nama"]?></li>
    <li>NPM: <?php echo $mhs["nrp"]?></li>
    <li>Email: <?php echo $mhs["email"]?></li>
    <li>Jurusan: <?php echo $mhs["jurusan"]?></li>
</ul>
<?php } ?>





