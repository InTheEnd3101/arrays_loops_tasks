<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr=[1,2,3,4,5,6,7,8,9,10,11,12];
foreach($arr as $ar){
    $month=date("w");
    if ($ar==$month){
        echo "<b>$ar</b></br>";
    } else{
        echo($ar)."<br>";}
}

// 17.Сосктавьте массив месяцев. С помощью цикла foreach выведите все месяцы, 
// а текущий месяц выведите жирным. Текущий месяц должен храниться в переменной $month.

?>
  </body>
</html>