<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

for($i=0; $i<10; $i++) {
    $arr[$i] = rand(0,10);
}
print_r($arr);
$max_arr=max($arr);
$min_arr=min($arr);
$max_arr=$min_arr+$max_arr;//1+10
$min_arr=$max_arr-$min_arr;//11-1
$max_arr=$max_arr-$min_arr;//11-10
echo "<br>" ."Min.: ".$max_arr."<br>";
echo "Max.: ".$min_arr;

// 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand), 
// найти максимальное и минимальное значение и поменять их местами.
?>
  </body>
</html>