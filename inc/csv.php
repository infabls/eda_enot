<?php 
// качаем категории и страницы из гугл диска и сохраняем на сервере
$categories = file_get_contents('http://docs.google.com/spreadsheets/d/1R87zOW2-990ATjZmc9qHu_CLqkFvLdqFJlY3TWzHgmU/export?format=csv&gid=1689854645');
file_put_contents('categories.csv', $categories);
// $file="categories.csv";
// $csv= file_get_contents($file);
// $array = array_map("str_getcsv", explode("\n", $csv));
// $json = json_encode($array);
// print_r($json);
 ?>