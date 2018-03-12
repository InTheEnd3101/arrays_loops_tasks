<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$num=0;
for ($n=1000;$n>50;$n/=2) {
    $num++;
    echo "$num =  $n"."<br>";
}
echo 'Сума = '.$num;

// 12. Дано число $n = 1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? 
// Посчитайте количество итераций, необходимых для этого (итерации — это количество проходов цикла), и запишите его в переменную $num.
?>
  </body>
</html>