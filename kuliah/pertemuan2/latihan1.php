<?php  
   echo " <h1 style='color:red'>hallo world </h1>";
   echo "<hr>";
   //VARIABLE
   $nama = 'Daffa';
   echo $nama;
   echo "<br>";
  $nama2 = 'Dhiya';
  echo $nama2;
  echo "<hr>";

   //string
  
   echo "jum'at";
   echo "<br>";
   echo 'Daffa : "jum\'at"';
   echo "<br>";
   echo "Daffa : \"jum'at\"";
   echo "<br>";
   //interpolasi
   //mencetak isi variable
   //hanya ""
   echo "saya bernama $nama";
   echo "<br>";
   echo "price : $500";
   echo "<hr>";

  //operator
  echo 1+1+1*8-2/2;
  echo "<br>";
  $alas = 10;
  $tinggi = 20;
  $luas_segi_tiga = ($alas*$tinggi) / 2;
  echo $luas_segi_tiga;
  echo "<echo>";
  echo "<br>";
  echo 1+99;
  echo "<hr>";
   //concat
   //penggabung string
   // .
   $yoi = "Daffa";
   $yio = "Dhiya";
   echo $yoi . " " . $yio;
   echo "<hr>";


  //perbandingan
  // <, >, <=, >=, ==, != 
  echo 4<5;
  echo "<br>";
  echo 0<5;
  echo "<hr>";

  //identitas
  //===, !==
  echo 10=== "10";
  echo 10=== 10;
  echo "<hr>";

  //decrement/increment
  //++, --
  $x = 10;
  $x++;
  echo $x;
  echo "<br>";
  $y = 10;
  $y--;
  echo $y;
  echo "<br>";
  echo ++$x;
  echo "<br>";
  echo $x++;
  echo "<br>";
  echo $x;
  echo "<hr>";
  
 // asigment
 // =, +=, -=, *=, %=
 $y = "niki";
 $y.= " ";
 $y .= "neko";
 echo $y;