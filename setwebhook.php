<?php

const TOKEN = '';
$method = 'setWebhook';

$url = 'https://api.telegram.org/bot' . TOKEN . '/' . $method;
$options = [
    'url' => '',
];

$response = file_get_contents($url . '?' . http_build_query($options));

var_dump($response);