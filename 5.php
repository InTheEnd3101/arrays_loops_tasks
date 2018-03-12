<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];
	foreach ($arr as $key => $value) {
    echo "$key - зарплата $value $.<br>";
}

// 5. Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' с элементами '200', '300', '400'. 
// С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля — зарплата 200 долларов.'.
?>
  </body>
</html>