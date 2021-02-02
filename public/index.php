<?php
session_start();
require_once __DIR__ . '/../vendor/autoload.php';

$request = new \Konstantin\Vernost\Base\Request();

$config = __DIR__ . '/../config.json';

$app = new \Konstantin\Vernost\Base\Application($config);
$response = $app->handleRequest($request);
$response->send();

