<?php
	$name = htmlspecialchars($_POST['name']);
	$phone = htmlspecialchars($_POST['number']);
	$token="748592982:AAH1yxyrNQC_4eV3pB_AZWeNrt_DuowC384";
	$chat_id="-1001227576308";
	$arr = array(
		'Имя пользователья:'=>$name,
		'Телефон:'=>$phone
	);
	foreach($arr as $key => $value) {
		$txt .= "<b>".$key."</b> ".$value."%0A";
	};
	$sendToTelegram= header("Location: https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}"); exit;
	// if ($sendToTelegram) {
	  // echo"Спасибо Мы вам скоро перезваним";
	// }else {
		// echo"Error";
	// }
?>