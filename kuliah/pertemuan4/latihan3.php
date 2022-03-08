<?php 
//date
//tanlggal hari bulan tahun
echo date ("l, d-m-y");
echo '<br>';
echo date (" G - l, j F y");
echo '<br>';
echo '<hr>';

//time
//UNIX Timestamp
//1 jaunari 1970
echo time ();
echo '<br>';
echo date ("l, d m y", time()+172800);
echo '<br>';
echo date ("l, j F y", time()+60*60*24*1000);
echo '<br>';
echo '<hr>';


//mktime
//membuat detik sendiri
//jam menit detik bulan tanggal tahun 
echo mktime(0,0,0,10,19,2003);
echo '<br>';
echo date ("l", mktime(0,0,0,10,19,2009));
echo '<br>';
echo '<hr>';

//strtotime
echo date ("l", strtotime ("22 okt 2021"));
echo '<hr>';

//MATH
echo pow(2,3);//pangkat
echo '<br>';
echo rand(1,10);//angka random
echo '<br>';
echo round(2.4); //pembumbulatan
echo '<br>';
echo round(2.7); 
echo '<br>';
echo ceil(2.1);//pembulatan keatas
echo '<br>';
echo floor(2.9); //pembulatan kebawah
echo '<hr>';

//USER DEFINED FUNCTION
//FUNCTION SENDIRI





?>
