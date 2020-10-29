<?php 
	// Токен моего бота
	const TOKEN 	= '1376184381:AAHvbWV7rE_EH7dBI3DRe0bWgDjox5TK_N8';
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

	foreach ($updates['result'] as $update) {
		echo $chat_id = $update['message']['chat']['id'];
		sendRequerst('sendMessage', ['chat_id' => $chat_id, 'text' => 'Что значит твоё "ОЕ"?? Я Машин, не понимать этот язык.!']);
	}
 ?>