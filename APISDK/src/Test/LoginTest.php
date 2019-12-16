<?php
require_once '../Auth/Login.php';
require_once '../Request/LoginRequest.php';

$login = new Login();

$login->setEmail('testedev@dev.com');
$login->setPassword('testeDev');
$login->setHash('2b1ba7b7a8ce5c1a003935625bf40047');

$loginRequest = new LoginRequest();

echo ('<pre>' . $loginRequest->send(json_encode($login)) . '</pre>');
