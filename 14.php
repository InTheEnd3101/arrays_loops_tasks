<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr=array(4, 2, 5, 19, 13, 0, 10);
foreach($arr as $ar){
    if ($ar>1 and $ar<5) {
        echo $ar." -Есть!";
    }else{
        echo "{$ar}- Нет!";
    }
}

// 14. Дан массив с элементами 4, 2, 5, 19, 13, 0, 10. 
// С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением $e, равном 2, 3 или 4. 
// Если есть — выведите на экран 'Есть!', иначе выведите 'Нет!'.

?>
  </body>
</html>