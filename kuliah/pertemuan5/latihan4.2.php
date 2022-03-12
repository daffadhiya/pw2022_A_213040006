<?php 
//study kasus
$mahasiswa = [
    ["Moch. Daffa Dhiya ULhaq", "213040006", "daffa@gmail.com", "Teknik Informatika"],
    ["Nabila Puti Aisyah INsirawati", "213040144", "nabila@gmail.com", "Teknik informatika"],
    ["Muhammad Alfarozi", "213040003", "Xoji@gmail.com", "Teknik Informatika"]
];





?>
<?php foreach ($mahasiswa as $mhs) { ?>
<ul>
    <li>Nama: <?= $mhs [0] ?></li>
    <li>NPM: <?= $mhs [1] ?></li>
    <li>Email: <?= $mhs [2] ?></li>
    <li>Jurusan:<?= $mhs [3] ?></li>
</ul>




<?php } ?>