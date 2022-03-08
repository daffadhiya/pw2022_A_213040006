<?php
//for,while
for ($a = 0; $a < 5; $a++) {
    echo "PHP";
    echo '<br>';
}
$s = 0;
while ($s < 5) {
    echo $s;
    $s++;
    echo '<br>';
}
$y = 0;
do {
    echo "Do it";
    echo '<br>';
    $y++;
} while ($y < 5);
 //if,else if.else
 $t = 10;
 if ($t>5){
    echo 'lebih besar dari 5';
    echo "<br>";
}else if (5<$t){
    echo ' lebih kecil dari 5';
 }else 
    echo 'tidak ada jawaban';

 echo "<hr>";

 // swict
 $s = 5+10;
 switch ($s){
    case 0:
     echo 'ditambah 10 sama dengan 11';
     break;
     case 1:
        echo ' ditambah 10 sama dengan 5';
        break;
     case 15:
        echo ' ditambah 10 sama dengan 15';
        break; 
  
 }




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($w = 1;$w <= 3; $w++) : ?>
            <tr>
              <?php for ($t=1; $t<=5; $t++) : ?>
                <td><?= "$w,$t" ?></td>
                <?php endfor; ?>


            </tr>



            <?php endfor; ?>
            

    </table>

</body>

</html>