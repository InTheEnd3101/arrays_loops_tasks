<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr as $value) {
	$x = implode('-', $arr);	
}
echo "-".$x."-";

// 8. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. 
// С помощью цикла foreach создайте строку '­1­2­3­4­5­6­7­8­9­'. Циклы while и for
?>
  </body>
</html>