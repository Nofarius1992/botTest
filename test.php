<?php 
	// Токен моего бота
	const TOKEN 	= '1179121998:AAHqWH6TZ2Bw9QvEijJFtTajhwnQPNbRvVA';
	// Базовая ссылка
	const BASE_URL  = 'https://api.telegram.org/bot' . TOKEN . '/';

	// Функция отправки запроса
	function sendRequerst($method, $params = []) {
		if(!empty($params)) {
			$url = BASE_URL . $method . '?' . http_build_query($params);
		} else {
			$url = BASE_URL . $method;
		}
		// Возвращаем результат запроса
		return json_decode(
			file_get_contents($url), JSON_OBJECT_AS_ARRAY
		);
	}

	$updates = sendRequerst('getUpdates');

    $lastupdate = 138411638;

    var_dump($updates['result']['update_id']);
    die;

	foreach ($updates['result'] as $update) {
		echo $chat_id = $update['message']['chat']['id'];
		sendRequerst('sendMessage', ['chat_id' => $chat_id, 'text' => 'Ответ на новое сообщение!']);
	}
 ?>