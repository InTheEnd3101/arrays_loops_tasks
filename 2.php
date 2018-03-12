<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = [1, 20, 15, 17, 24, 35];
	$result = 0;
	foreach ($arr as $value) {
    $result += $value;
}
echo $result;

// 2. Дан массив с элементами 1, 20, 15, 17, 24, 35. 
// С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result.
?>
  </body>
</html>