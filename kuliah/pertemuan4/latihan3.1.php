<?php 
$a = 9;
$b = 4;

$luas_a = $a*$a*$a;
$luas_b = $b*$b*$b;

$total = $luas_a + $luas_b;

echo "total luas nya adalah $total";
echo "<hr>";
function luas_dua_kubus($a, $b){
$a = 9;
$b = 4;

$luas_a = $a*$a*$a;
$luas_b = $b*$b*$b;

$total = $luas_a + $luas_b;
    return "total luas nya adalah $total";
}
echo luas_dua_kubus(9,4);
echo "<br>";
echo luas_dua_kubus(10,15);





?>