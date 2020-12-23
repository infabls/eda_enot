<?php 
if (isset($_POST['submit'])) {

}

var_dump($_POST['products']);
$ass = json_decode($_POST['products']);
// var_dump($ass);
for ($i=0; $i < count($ass); $i++) {
	echo "Ваш заказ <br>";
	echo "Цена " .$ass[$i]->price . "<br>";
	echo "Цена " .$ass[$i]->price * $ass[$i]->quantity . "<br>";
	echo "<br>";
}

 ?>