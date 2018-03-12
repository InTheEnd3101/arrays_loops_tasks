<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = [26, 17, 136, 12, 79, 15];
	$result = 0;
	foreach ($arr as $value) {
    $result += $value * $value;
}
echo $result;

// 3. Дан массив с элементами 26, 17, 136, 12, 79, 15. 
// С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result.
?>
  </body>
</html>