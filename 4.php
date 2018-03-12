<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = ['green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой'];

echo '<b>Выводим столбец ключей</b><br>';
	foreach ($arr as $key => $value) {
    echo "$key<br>";
}

echo '<br><b>Выводим столбец элементов</b><br>';
	foreach ($arr as $key => $value) {
    echo "$value<br>";
}

// 4. Дан массив $arr. С помощью первого цикла foreach выведите на экран столбец ключей, 
// с помощью второго — столбец элементов. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
?>
  </body>
</html>