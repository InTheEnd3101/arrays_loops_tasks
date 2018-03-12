<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$number = 1234;
$number=(str_split($number));
$result=0;
for ($i=0;$i<count($number);$i++){
    //echo $arr[$i]."\n";
    $result+=$number[$i];
    //echo $result."\n";
}
echo 'Сума чисел = '.$result;

// 23. Вам нужно разработать программу, которая считала бы сумму цифр числа введенного пользователем. Например: есть число 123, то программа должна вычислить сумму цифр 1, 2, 3, т. е. 6.
// По желанию можете сделать проверку на корректность введения данных пользователем.

?>
  </body>
</html>