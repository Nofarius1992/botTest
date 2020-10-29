<?php


    //405951976


    // Токен моего бота
    const TOKEN = '1376184381:AAHvbWV7rE_EH7dBI3DRe0bWgDjox5TK_N8';

    // ссылка по которой будем стучаться в api
    $url = 'https://api.telegram.org/bot' . TOKEN . '/sendMessage';

    $params = [
        'chat_id' => 405951976,
        'text' => 'Я - бот!'
    ];

    $url = $url . '?' . http_build_query($params);


    $response = json_decode(file_get_contents($url), JSON_OBJECT_AS_ARRAY);

    print_r($response);


?>
