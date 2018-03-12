<!doctype html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <title>Задача по массивам и циклам</title>
  </head>
  <body>
 <?php

$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];

 foreach ($arr as $colorEn => $colorRu) {
	$en[] = $colorEn;
	$ru[] = $colorRu;
}
echo '<b>Англ. массив</b>';
echo '<pre>';
print_r($en);
echo '</pre>';

echo '<b>Русс. массив</b>';
echo '<pre>';
print_r($ru);
echo '</pre>';

// 6. Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, 
// а русские — в массив $ru. $arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'); $en = array('green', 'red','blue'); $ru = array('зеленый', 'красный', 'голубой');
?>
  </body>
</html>