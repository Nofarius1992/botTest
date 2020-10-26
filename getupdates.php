<?php 
	// Токен моего бота
	const TOKEN = '1376184381:AAHvbWV7rE_EH7dBI3DRe0bWgDjox5TK_N8';

	// ссылка по которой будем стучаться в api
	$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';
	echo $url;
 ?>