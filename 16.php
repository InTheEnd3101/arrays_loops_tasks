<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach($arr as $ar){
    if ($ar % 3 == 0){
        echo $ar ."\n";
    }else{
        echo $ar .", ";
    }
    }

// 16. Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. 
// С помощью цикла foreach и оператора if выведите на экран столбец элементов массива, 
// как показано на картинке. 1, 2, 3, 4, 5, 6 7, 8, 9


?>
  </body>
</html>