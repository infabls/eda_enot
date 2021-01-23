<?php 
if (!isset($_POST['submit'])) {

	/* https://api.telegram.org/bot1571456139:AAFyxRpYQnMMU21KUfpJj11H2cfnFbShWcE/getUpdates,
	где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

	$name = $_POST['user_name'];
	$phone = $_POST['user_phone'];
	$email = $_POST['user_email'];
	$billing_type = $_POST['contact'];
	if ($billing_type == 'card') {
		$bill_type = 'Оплата картой';
	} elseif ($billing_type == 'cash') {
		$bill_type = 'Наличные';
	} else {
		$bill_type = 'Не указан';	
	}
	$token = "1571456139:AAFyxRpYQnMMU21KUfpJj11H2cfnFbShWcE";
	$chat_id = "-426041849";
	$ass = json_decode($_POST['products']);
	$totalprice = 0;
	$mssg = "%0A";
	$vsegoTovarov = count($ass);
	for ($i=0; $i < $vsegoTovarov; $i++) {
	 	$mssg .= 'Название: ' . $ass[$i]->label . '. Количество: ' . $ass[$i]->quantity . '. Стоимость ' . $ass[$i]->price * $ass[$i]->quantity . '%0A';
		//итоговая сумма заказа
		$totalprice += $ass[$i]->price * $ass[$i]->quantity;
	}


	$arr = array(
	  'Имя пользователя: ' => $name,
	  'Адрес: ' => $email,
	  'Телефон: ' => $phone,
	  'Итоговая сумма: ' => $totalprice . ' тг',
	  'Способ оплаты: ' => $bill_type,
	  'Детали заказа: ' => $mssg,
	);

	foreach($arr as $key => $value) {
	  $txt .= "<b>".$key."</b> ".$value."%0A";
	};
	

	// отправка в телеграм
	$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
	if ($sendToTelegram) {
	  header('Location: tnk.php');
	} else {
	  echo "К сожалению не получилось отправить вашу заявку. Вы можете сделать это по телефону";
	  // при ошибке сохранять в локальный файл 
	  foreach($arr as $key => $value) {
	  $txthtml .= "<b>".$key."</b> ".$value;
		};
		// var_dump($txthtml);
		// echo "<a href='inc/orders.html'>Заявки локально</a>";
	  	file_put_contents('inc/orders.html', $txthtml . PHP_EOL, FILE_APPEND);
	}
	
}


?>
