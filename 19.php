<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = array(1, 2, 3, 4, 5, 6, 7);
foreach ($arr as $ar) {
    $day = date('N');
    if ($ar == $day) {
        echo "<i>$ar</i><br>";
    } else {
        echo $ar . "<br>";
    }
}
$i=1;

// 19. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, 
// а текущий день выведите курсивом. Текущий день должен храниться в переменной $day.
?>
  </body>
</html>