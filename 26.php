<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

for ($i = 0; $i <= 10; $i++) {
   $arr[$i] = rand(1, 100);
}
//print_r($arr);
foreach ($arr as $key => $ar) {
    if ($ar > 0 and $key % 2 == 0) {
        echo "{$key}(парные) и больше нуля = {$ar} <br> ";
    }
    if ($ar > 0 and $key % 2 == 1) {
        echo "{$key}(непарные) и больше нуля = {$ar} <br> ";
    }
}

// 26. Вам нужно создать массив и заполнить его случайными числами от 1 до 100 (ф­я rand). 
// Далее, вычислить произведение тех элементов, которые больше ноля и у которых парные индексы. 
// После вывести на экран элементы, которые больше ноля и у которых не парный индекс.
?>
  </body>
</html>