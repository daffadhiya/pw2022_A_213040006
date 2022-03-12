<?php
//array adalah variable yang dapat menampung lebih dari 1 nilai




//membuat array
$hari = ["senin", "selasa", "rabu", "kamis", "jumat", "sabtu", "minggu"];//cara baru

$bulan = array ("mei", "juni", "juli"); //cara lama

$tahun = [2020, 2021, 2022];

$myarray = [100, "kemenangan, true"];

//mencetak array
//mencetak 1 elemen / nilai index
echo $hari[1];
echo "<br>";
echo $bulan[2];
echo "<hr>";

//mencetak semua elemen
//menggunakan var_dump() atau print_r()
//khusus debugging
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<hr>";

//mencetak menggunakan looping
//for
for ($k = 0; $k < count($bulan); $k++){
    echo $bulan[$k];
    echo "<br>";
}
for ($i = 0; $i < 7; $i++){
    echo $hari[$i];
    echo "<br>";
    
}

//foreach
//khusus array
foreach ($tahun as $thn) {
    echo $thn;
    echo "<br>";
    echo "<hr>";
}

//manipulasi array
//menambah array
$hari[] = "sabtu";
$bulan[] = "desember";
var_dump($hari);
echo "<br>";
var_dump($bulan);


?>