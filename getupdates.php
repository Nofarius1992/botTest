<?php 
	// Токен моего бота
	const TOKEN = '1376184381:AAHvbWV7rE_EH7dBI3DRe0bWgDjox5TK_N8';

	// ссылка по которой будем стучаться в api
	$url = 'https://api.telegram.org/bot' . TOKEN . '/getUpdates';

	$lastupdate = 138411638;


    $response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);
    if($response['ok']) {
        foreach ($response['result'] as $update) {
            echo $update['message']['text'];
            var_dump($response);
            ?>
            </pre>
            <?php
        }
    }
    
 ?>