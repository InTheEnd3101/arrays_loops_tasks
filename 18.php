<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr=array(1,2,3,4,5,6,7);
foreach ($arr as $ar){
        if ($ar==6 or $ar==7){
            echo "<b>$ar</b></br>";
        }else {
           echo $ar."<br>";
        }
}

// 18. Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, 
// выходные дни следует вывести жирным.

?>
  </body>
</html>