<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = [2, 5, 9, 15, 0, 4];
	foreach ($arr as $value) {
	if ($value > 3 && $value < 10) {
	echo "$value <br>";
	} 
}

// 7. Дан массив с элементами 2, 5, 9, 15, 0, 4. 
// С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3­х, но меньше 10.
?>
  </body>
</html>