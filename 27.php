<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$rows=rand(2,15);
$cols=rand(2,15);
$colors = ['red','yellow','blue','gray','maroon','brown','green'];

echo '<table border="1">';
for($tr=1;$tr<=$rows;$tr++){
    echo '<tr>';
    for($td=1;$td<=$cols;$td++){
        $number=rand();
        $i=$colors[rand(0,count($colors)-1)];
        echo "<td style='background-color:{$i}'>".$number.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

// 27. Создать генератор случайных таблиц. Есть переменные: $row - кол-во строк в таблице, 
// $cols - кол-во столбцов в таблице. Есть список цветов, в массиве: $colors = array('red','yellow','blue','gray','maroon','brown','green'). 
// Необходимо создать скрипт, который по заданным условиям выведет таблицу размера $rows на $cols, в которой все ячейки будут иметь цвета, 
// выбранные случайным образом из массива $colors. В каждой ячейке должно находиться случайное число. 
?>
  </body>
</html>